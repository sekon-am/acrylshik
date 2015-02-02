<?php
class ArticleModel extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('CategoryModel');
		$this->load->model('TagModel');
	}
	function _normArticle($article) {
		$article->img = (($article->img)?site_url($this->config->item('img_products_path').$article->img):'');
		$article->category = $this->CategoryModel->getCategory($article->category_id)->name;
		$article->sign = $article->category . '   /   ' . date('F j, Y', strtotime($article->posted));
		$article->url = site_url("articles/show/".$article->id);
		$article->tags = $this->TagModel->getArticleTags($article->id);
		return $article;
	}
	function getArticle($id) {
		if($article = $this->db->query("SELECT * FROM articles WHERE id='{$id}'")->row()) {
			return $this->_normArticle($article);
		}
		return null;
	}
	function getLastest() {
		$articles = array();
		if($articlesQuery = $this->db->query("SELECT * FROM articles ORDER BY posted ASC LIMIT 0,".$this->config->item('articles_per_page'))){
			foreach($articlesQuery->result() as $row) if($row) {
				$articles []= $this->_normArticle($row);
			}
		}
		return $articles;
	}
	function getRelated($id){
		$relQuery = $this->db->query("SELECT related FROM articles WHERE id='{$id}'");
		if($relQuery->num_rows()) {
			$sql = "SELECT * FROM articles WHERE 0";
			foreach(explode(',',$relQuery->row()->related) as $relId) 
				if($relId = trim( $relId )) {
					$sql .= " OR (id='{$relId}')";
				}
			$articlesQuery = $this->db->query($sql . " ORDER BY posted");
			if($articlesQuery->num_rows()){
				$articles = array();
				foreach($articlesQuery->result() as $article ){
					$articles []= $this->_normArticle($article);
				}
				return $articles;
			}
		}
		return null;
	}
}
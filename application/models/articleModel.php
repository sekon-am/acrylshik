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
	function _getArticles($sql) {
		$articles = array();
		$articlesQuery = $this->db->query($sql);
		if($articlesQuery->num_rows()){
			foreach($articlesQuery->result() as $article ){
				$articles []= $this->_normArticle($article);
			}
		}
		return $articles;
	}
	function getArticle($id) {
		if($article = $this->db->query("SELECT * FROM articles WHERE id='{$id}'")->row()) {
			return $this->_normArticle($article);
		}
		return null;
	}
	function getLastest() {
		return $this->_getArticles(
				"SELECT * FROM articles ORDER BY posted ASC LIMIT 0,".$this->config->item('articles_per_page')
			);
	}
	function getRelated($id){
		$relQuery = $this->db->query("SELECT related FROM articles WHERE id='{$id}'");
		if($relQuery->num_rows()) {
			$sql = "SELECT * FROM articles WHERE 0";
			foreach(explode(',',$relQuery->row()->related) as $relId) 
				if($relId = trim( $relId )) {
					$sql .= " OR (id='{$relId}')";
				}
			return $this->_getArticles($sql . " ORDER BY posted");
		}
		return array();
	}
	function getArticlesByTag($tagId,$start=0){
		if($tagId){
			$count = $this->config->item('articles_per_page');
			return $this->_getArticles("SELECT DISTINCT a.* FROM articles a, article_tags at, tags t WHERE (a.id=at.article_id) AND (at.tag_id='{$tagId}') ORDER BY a.posted LIMIT {$start},{$count}");
		}
		return array();
	}
}
<?php
class Articlemodel extends CI_Controller {
	var $permissions;
	function __construct() {
		parent::__construct();
		$this->load->model('Categorymodel');
		$this->load->model('Tagmodel');
		$this->load->helper('fix');
		$permissions = false;
	}
	function _normArticle($article) {
		$article->img = (($article->img)?site_url($this->config->item('img_products_path').$article->img):'');
		$article->category = $this->Categorymodel->getCategory($article->category_id)->name;
		$article->sign = $article->category . '   /   ' . date('F j, Y', strtotime($article->posted));
		$article->url = site_url("articles/show/".$article->id);
		$article->tags = $this->Tagmodel->getArticleTags($article->id);
		if($this->permissions){
			$article->edit_url = site_url("manarticle/edit/".$article->id);
			$article->delete_url = site_url("manarticle/delete/".$article->id);
		}
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
			return $this->_getArticles($sql . " ORDER BY posted LIMIT 4");
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
	function randomArticles($amount) {
		if($amount>0) {
			return $this->_getArticles("SELECT * FROM articles ORDER BY rand() LIMIT {$amount}");
		}
	}
	function getArticles($limit=0) {
		$sql = "SELECT * FROM articles ORDER BY posted";
		if($limit) {
			$sql .= " LIMIT 0,{$limit}";
		}
		return $this->_getArticles($sql);
	}
	function insert($title,$category_id,$related,$short,$txt,$seo_title,$seo_descr,$seo_kwds) {
		$this->load->helper('seo');
		$txt = normImgSrc( $txt );
		$sql = "INSERT INTO articles (category_id,title,txt,posted,short,related,seo_title,seo_descr,seo_kwds) VALUES ('{$category_id}','{$title}','{$txt}','{$posted}','{$short}','{$related}','{$seo_title}','{$seo_descr}','{$seo_kwds}')";
		$this->db->query($sql);
		return $this->db->insert_id();
	}
	function update($id,$title,$category_id,$related,$short,$txt,$seo_title,$seo_descr,$seo_kwds) {
		$this->load->helper('seo');
		$txt = normImgSrc( $txt );
		$sql = "UPDATE articles SET category_id='{$category_id}',title='{$title}',txt='{$txt}',posted='{$posted}',short='{$short}',related='{$related}',seo_title='{$seo_title}',seo_descr='{$seo_descr}',seo_kwds='{$seo_kwds}' WHERE id='{$id}'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}
	function delArticle($id) {
		$this->db->query("DELETE FROM articles WHERE id='{$id}'");
	}
	function setPermissions() {
		$this->permissions = true;
	}
	function getRelatedIds($article){
		$related = array();
		if(strlen($article->related)>2){
			$related = explode(',',substr($article->related,1,-1));
		}
		return $related;
	}
}
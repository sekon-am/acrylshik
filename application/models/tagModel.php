<?php
class TagModel extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	function _normArticleTag($tag) {
		$tag->url = site_url("articles/tag/".$tag->id);
		return $tag;
	}
	function getArticleTags($articleId) {
		if($articleId){
			$tags = $this->db->query(
				"SELECT DISTINCT t.* FROM tags t, article_tags at WHERE (t.id=at.tag_id) AND (at.article_id='{$articleId}')"
			)->result();
			if(count($tags)){
				$normTags = array();
				foreach($tags as $tag) if($tag) {
					$normTags []= $this->_normArticleTag($tag);
				}
				return $normTags;
			}
		}
		return array();
	}
}
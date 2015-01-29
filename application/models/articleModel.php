<?php
class ArticleModel extends CI_Controller {
	function getArticle($id) {
		if($article = $this->db->query("SELECT * FROM articles WHERE id='{$id}'")->row()) {
			return $article;
		}
		return null;
	}
	function getLastest() {
		$articles = array();
		if($articlesQuery = $this->db->query("SELECT * FROM articles ORDER BY posted ASC LIMIT 0,".$this->config->item('articles_per_page'))){
			foreach($articlesQuery->result() as $row) if($row) {
				$row->img = $this->config->item('img_folder_path').$row->img;
				if($cat = $this->db->query("SELECT name FROM categories WHERE id='{$row->category_id}'")->row()){
					$row->sign = $cat->name . '   /   ';
				}
				$row->sign .= date('F j, Y', strtotime($row->posted));
				$row->url = site_url("articles/show/".$row->id);
				$articles []= $row;
			}
		}
		return $articles;
	}
}
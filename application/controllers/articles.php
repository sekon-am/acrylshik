<?php 
class Articles extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('ArticleModel');
	}
	function index() {
		$this->load->view('articles',array(
			'articles'	=> $this->ArticleModel->getLastest(),
		));
	}
	function show($id) {
		load_module('header');
		$this->load->view('article',array(
			'article'	=> $this->ArticleModel->getArticle($id),
		));
		load_module('footer');
	}
}
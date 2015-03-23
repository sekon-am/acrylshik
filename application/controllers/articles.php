<?php 
class Articles extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Articlemodel');
		$this->load->helper('seo');
	}
	function index() {
		$this->load->view('articles',array(
			'articles'	=> $this->Articlemodel->getLastest(),
		));
	}
	function show($id) {
		$article = $this->Articlemodel->getArticle($id);
		load_module('header','index',get_seo($article));
		$this->load->view('article',array(
			'article'		=> $article,
			'articlePrev'	=> $this->Articlemodel->getArticle($this->session->userdata('articlePrev')),
			'related'		=> $this->Articlemodel->getRelated($id),
		));
		$this->session->set_userdata('articlePrev',$id);
		load_module('footer');
	}
	function tag($tagId) {
		load_module('header');
		$this->load->view('articles',array(
			'articles'	=> $this->Articlemodel->getArticlesByTag($tagId),
		));
		load_module('footer');
	}
}
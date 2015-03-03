<?php 
class Footer extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Portfoliomodel','Portfoliomodel');
		$this->load->model('ProductModel','ProductModel');
		$this->load->model('ArticleModel','ArticleModel');
	}
	function index() {
		$this->load->view('footer',array(
			'products'	=> $this->ProductModel->getRandomProducts(0,
				$this->config->item('footer_products_amount')),
			'articles'	=> $this->ArticleModel->randomArticles(
				$this->config->item('footer_articles_amount')),
			'portfolio'	=> $this->Portfoliomodel->getRandomWorks(8),
		));
	}
}
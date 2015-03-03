<?php 
class Footer extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Portfoliomodel','Portfoliomodel');
		$this->load->model('Productmodel','Productmodel');
		$this->load->model('Articlemodel','Articlemodel');
	}
	function index() {
		$this->load->view('footer',array(
			'products'	=> $this->Productmodel->getRandomProducts(0,
				$this->config->item('footer_products_amount')),
			'articles'	=> $this->Articlemodel->randomArticles(
				$this->config->item('footer_articles_amount')),
			'portfolio'	=> $this->Portfoliomodel->getRandomWorks(8),
		));
	}
}
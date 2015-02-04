<?php 
class Footer extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('ProductModel');
		$this->load->model('ArticleModel');
	}
	function index() {
		$this->load->view('footer',array(
		));
	}
}
<?php 
class Our_works extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('ProductModel');
	}
	function index($category_id=0) {
		$this->load->view('our_works',array('products'=>$this->ProductModel->getRandomProducts($category_id,3)));
	}
}
<?php 
class Our_works extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Productmodel');
	}
	function index($category_id=0) {
		$this->load->view('our_works',array('products'=>$this->Productmodel->getRandomProducts($category_id,3)));
	}
}
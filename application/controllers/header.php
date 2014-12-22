<?php 
class Header extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('CategoryModel');
	}
	function index() {
		$this->load->view('header',array('categories'=>$this->CategoryModel->getSubcategories(0)));
	}
}
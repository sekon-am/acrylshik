<?php 
class Header extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Categorymodel');
	}
	function index() {
		$this->load->view('header',array(
			'categories'	=> $this->Categorymodel->getSubcategories(0,'DESC'),
			'subcategories'	=> $this->Categorymodel->getRootSubcategories(),
		));
	}
}
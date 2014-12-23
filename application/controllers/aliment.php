<?php 
class Aliment extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('CategoryModel');
		$this->load->model('AlimentModel');
	}
	function index() {
		$subcats = $this->CategoryModel->getSubcategories();
		$this->load->view('aliment',array('aliment'=>$this->AlimentModel->getItems()));
	}
}
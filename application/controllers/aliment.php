<?php 
class Aliment extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Categorymodel');
		$this->load->model('Alimentmodel');
	}
	function index() {
		$subcats = $this->Categorymodel->getSubcategories();
		$this->load->view('aliment',array('aliment'=>$this->Alimentmodel->getItems()));
	}
}
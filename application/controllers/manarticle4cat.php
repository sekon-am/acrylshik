<?php 
class Manarticle4cat extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Categorymodel');
		$this->load->model('Authmodel');
		$this->load->helper('fix');
	}
	function index() {
		$this->Authmodel->checkEditor();
		$this->load->view('editor/manarticle4cat',array(
			'categories' => $this->Categorymodel->getSubcategories(),
		));
	}
	function save() {
		$rootCats = $this->Categorymodel->getSubcategories();
		foreach ($rootCats as $cat) {
			$this->Categorymodel->updateTxt( $cat->id, $this->input->post('cat'.($cat->id) ));
		}
	}
}
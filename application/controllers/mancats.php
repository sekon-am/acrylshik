<?php
class Mancats extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Authmodel','Authmodel');
		$this->Authmodel->checkEditor();
		$this->load->model('Categorymodel');
		$this->Categorymodel->setAdminMode();
	}
	public function index() {
		$this->load->view('editor/mancats');
	}
	public function lst() {
		echo json_encode($this->Categorymodel->getCategories());
	}
	function tst() {$this->Categorymodel->getCategoriesGroupByParent();}
}
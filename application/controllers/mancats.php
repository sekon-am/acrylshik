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
		$obj = null;
		$obj->cats = $this->Categorymodel->getCategoriesGroupByParent();
		$obj->rootcats = $this->Categorymodel->getRootSelect();
		echo json_encode($obj);
	}
	public function save() {
		$cats = json_decode(json_decode(file_get_contents('php://input'))->cats);
		$res = null;
		$res->affected_rows = intval($this->Categorymodel->saveCats($cats));
		echo json_encode($res);
	}
}
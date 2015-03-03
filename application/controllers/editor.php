<?php
class Editor extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Authmodel');
		$this->load->model('Articlemodel');
	}
	function dashboard() {
		$this->Authmodel->checkEditor();
		$this->load->view('editor/dashboard',array('login'=>$this->Authmodel->getUserName()));
	}
}
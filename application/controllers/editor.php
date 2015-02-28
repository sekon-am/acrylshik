<?php
class Editor extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('AuthModel');
		$this->load->model('ArticleModel');
	}
	function dashboard() {
		$this->load->view('editor/dashboard',array('login'=>$this->AuthModel->getUserName()));
	}
}
<?php 
class Admin extends CI_Controller {
	function __constructor() {
		parent::__constructor();
		$this->load->helper('url');
		$this->load->model('AuthModel');
	}
	function _redirect() {
		switch($this->session->userdata('user_role')){
			case 'admin': redirect('/admin/','refresh'); break;
			case 'editor': redirect('/editor/','refresh'); break;
			default: redirect('/admin/login/','refresh');
		}
	}
	function _check() {
		if(!$this->AuthModel->check()){
			$this->_redirect();
		}
		return true;
	}
	function login($login,$pass) {
		$login_res = $this->AuthModel->login($login,$pass);
		if($login_res->code == 100){
			$this->_redirect();
		}
		$this->load->view(
			'admin/loginform',
			array(
				'errors'=>$login_res->msg,
				'login'=>$login,
			)
		);
	}
	function index() {
		$this->_check();
		$this->load->view('dashboard');
	}
}
?>
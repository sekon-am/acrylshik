<?php 
class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin/AuthModel');
	}
	function _redirect() {
		$login = $this->session->userdata('user_login');
		switch($this->session->userdata('user_role')){
			case 'admin': redirect('/admin/admin/'.$login,'refresh'); break;
			case 'editor': redirect('/admin/editor/'.$login,'refresh'); break;
			default: redirect('/admin/admin/login/','refresh');
		}
		exit(0);
	}
	function _start() {
		$this->load->view('admin/start');
	}
	function _finish() {
		$this->load->view('admin/finish');
	}
	function login() {
		$login = $this->input->post('login');
		$pass = $this->input->post('pass');
		$msg = '';
		if($login || $pass){
			$login_res = $this->AuthModel->login($login,$pass);
			if($login_res['code'] < 200){
				$this->_redirect();
			}
			$msg = $login_res->msg;
		}
		$this->load->view(
			'admin/loginform',
			array(
				'errors'=>$msg,
				'login'=>$login,
			)
		);
	}
	function _check() {
		if(! $this->AuthModel->check('admin')){
			$this->_redirect();
		}
	}
	function index() {
		$this->_check();
		$this->load->view('admin/admin/dashboard');
	}
}
?>
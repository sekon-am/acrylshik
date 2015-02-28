<?php
class Authorize extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('AuthModel');
	}
	function _checkUser() {
		if($this->AuthModel->getUserName()) {
			redirect('/'.$this->AuthModel->getUserRole().'/dashboard/');
			exit(0);
		}
	}
	function index() {
		$this->login();
	}
	function login($msg = '') {
		$this->_checkUser();
		if($this->input->post('submit')){
			$login = $this->input->post('login');
			$pass = $this->input->post('pass');
			$res = $this->AuthModel->login($login,$pass);
			if($res['code']==100){
				$this->_checkUser();
			}
			$msg = $res['msg'];
		}
		$this->load->view('admin/loginform',array('msg'=>$msg));
	}
	function logout() {
		$this->AuthModel->logout();
		$this->login( lang('Successful logout') );
	}
}
<?php 
class Admin extends CI_Controller {
	function __constructor() {
		parent::__constructor();
		$this->load->helper('url');
		$this->load->model('AuthModel');
	}
	function _check() {
		if(!$this->AuthModel->check()){
			redirect('/admin/login/','refresh');
		}
		return true;
	}
	function login($login,$pass) {
		$errors = array();
		if($login && $pass) {
			if($this->AuthModel->login($login,$pass)){
				redirect('/admin/','refresh');
			}else{
				$errors []= lang('msg_wrong_login_pass');
			}
		}elseif($login || $pass){
			$errors []= lang('msg_enter_login_pass');
		}
		$this->load->view(
			'admin/loginform',
			array(
				'errors'=>$errors,
				'login'=>$login,
			)
		);
	}
	function index($params) {
		print_r($params);
	}
	/*
	function __call($name,$params) {
		echo $name.'!!!';
		$this->_check();
		$name = ucfirst($name);
		if ( ! file_exists(APPPATH.'controllers/admin/'.strtolower($name).'.php')){
			show_404("Class {$name} don't exists");
		}
		include_once(APPPATH.'controllers/admin/'.strtolower($name).'.php');
		
		$method = (isset($params[0]) ? $params[0] : 'index');
		if( ! method_exists($name,$method) ){
			show_404("Method {$name}/{$method} don't exists");
		}
		
		$controller = new $name();
		return call_user_func_array(array(&$controller, $method), array_slice($params, 1));
	}
	*/
}
?>
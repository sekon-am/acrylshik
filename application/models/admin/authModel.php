<?php 
class AuthModel extends CI_Model {
	function __constructor() {
		parent::__constructor();
		$this->load->library('session');
	}
	function check() {
		return $this->session->userdata('is_admin');
	}
	function login($login,$pass) {
		if(($login == $this->config->item('admin_login') && md5($pass) == $this->config->item('admin_pass'))) {
			$this->session->set_userdata(array('is_admin'=>true,));
			return true;
		}
		return false;
	}
	function logout() {
		$this->session->unset_userdata('is_admin');
	}
}
?>
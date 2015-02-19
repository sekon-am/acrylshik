<?php
class Editor extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('admin/AuthModel');
	}
	function _redirect() {
		redirect('/admin/admin/login/','refresh');
		exit(0);
	}
	function _navbar() {
		$this->load->view('editor/navbar');
	}
	function _welcome($login) {
		$this->load->view('editor/welcome',array('login'=>$login));
	}
	function _check() {
		if(!$this->AuthModel->check('editor')){
			$this->_redirect();
		}
	}
	function _sidebar() {
		$this->load->view('admin/sidebar',array(
			'menu'=>array(
				array('url'=>site_url('editor/article'),'txt'=>lang('Articles'),),
				array('url'=>site_url('editor/article/add'),'txt'=>lang('Add article'),),
				array('url'=>site_url('editor/product'),'txt'=>lang('Products'),),
				array('url'=>site_url('editor/product/add'),'txt'=>lang('Add product'),),
				array('url'=>site_url('editor/portfolio'),'txt'=>lang('Portfolio'),),
				array('url'=>site_url('editor/portfolio/add'),'txt'=>lang('Add portfolio'),),
			),
			'active'=>site_url($this->uri->uri_string()),
		));
	}
	function index($login='') {
		$this->_check();
		$this->load->view('editor/dashboard',array('login'=>$login));
	}
	function test() {
		echo $this->session->userdata('user_login');
		exit(0);
	}
}
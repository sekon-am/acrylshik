<?php
class Article4cat extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Categorymodel');
	}
	function index($category_id) {
		$this->load->view('article4cat',array(
			'category' => $this->Categorymodel->getCategory($category_id),
		));
	}
}
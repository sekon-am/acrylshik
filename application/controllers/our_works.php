<?php 
class Our_works extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Portfoliomodel');
	}
	function index($category_id=0) {
		$this->load->view('our_works',array(
			'portfolio'=>$this->Portfoliomodel->getWorks(0,6,0)
		));
	}
}
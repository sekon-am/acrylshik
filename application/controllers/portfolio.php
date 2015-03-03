<?php
class Portfolio extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Portfoliomodel','Portfoliomodel');
	}
	function cat($category_id=0) {
		$this->load->view('portfolio',array(
			'filters'=>$this->Portfoliomodel->getFilters(),
			'works'=>$this->Portfoliomodel->getWorks($category_id),
			'category_id'=>$category_id,
		));
	}
}
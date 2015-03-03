<?php 
class Subcategories extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Categorymodel');
	}
	function index($category_id) {
		$this->load->view('subcategories',
						array(
							'categories'=>$this->Categorymodel->getSubcategories($category_id),
							'category'=>$this->Categorymodel->getCategory($category_id)
						));
	}
}
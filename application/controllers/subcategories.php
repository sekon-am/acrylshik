<?php 
class Subcategories extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('CategoryModel');
	}
	function index($category_id) {
		$this->load->view('subcategories',
						array(
							'categories'=>$this->CategoryModel->getSubcategories($category_id),
							'category'=>$this->CategoryModel->getCategory($category_id)
						));
	}
}
<?php 
class Product extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('CategoryModel');
		$this->load->model('ProductModel');
	}
	function index($category_id){
		return $this->lst($category_id);
	}
	function lst($category_id) {
		$category_id = intval($category_id);
		$products = $this->ProductModel->lst($category_id);
		$category = $this->CategoryModel->getCategory($category_id);
		load_module('header');
		$this->load->view(	'products',
							array(	'products'=>$products,
									'category'=>$category,
							));
		load_module('footer');
	}
	function show($product_id) {
		$product = $this->ProductModel->details($product_id);
		$this->load->view('product',array('product'=>$product));
	}
}
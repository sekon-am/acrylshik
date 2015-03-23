<?php 
class Product extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Categorymodel');
		$this->load->model('Productmodel');
	}
	function index($category_id){
		return $this->lst($category_id);
	}
	function _lst($category_id) {
		$category_id = intval($category_id);
		$products = $this->Productmodel->lst($category_id);
		if(count($products)>0){
			for($i=0;$i<count($products);$i++){
				$this->load->view('product', array(
					'product'=> $products[$i],
					'index'  => $i,
				));
			}
		}else{
			$this->load->view('warning',array('message'=>lang('msg_no_products')));
		}
	}
	function lst($category_id) {
		$category_id = intval($category_id);
		$category = $this->Categorymodel->getCategory($category_id);
		load_module('header','index',array(
			'seo_title' => $category->name . ': ' . $category->title,
			'seo_descr' => $category->descr,
			'seo_kwds'  => $category->name,
		));
		$this->load->view('products',array(	
							'category'=>$category,
						));
		load_module('footer');
	}
	function _show($product_id) {
		$product = $this->Productmodel->details($product_id);
		$this->load->view('product',array(
			'product'=>$product,
			'index'  =>0,
		));
		$this->load->view('prod_js');
	}
	function show($product_id){
		$product = $this->Productmodel->details($product_id);
		load_module('header','index',array(
			'seo_title' => $product->seo_title,
			'seo_descr' => $product->seo_descr,
			'seo_kwds'  => $product->seo_kwds,
		));
		$this->_show($product_id);
		load_module('footer');
	}
}
<?php 
class ProductModel extends CI_Model {
	function _prepare(&$product) {
		$product->images = array();
		$images_req = $this->db->query("SELECT * FROM product_images WHERE product_id='{$product->id}'");
		if($images_req->num_rows()) {
			foreach($images_req->result() as $image) {
				$product->images []= base_url().'images/products/'.$image->img;
			}
			shuffle($product->images);
		}
		return $product;
	}
	function _prepareArray(&$products){
		if(is_array($products)) {
			for($i=0;$i<count($products);$i++){
				$this->_prepare($products[$i]);
			}
			return $products;
		}
		return $this->_prepare($products);
	}
	function lst($category_id) {
		$products = $this->db->query("SELECT * FROM products WHERE category_id='{$category_id}'")->result();
		for($i=0;$i<count($products);$i++){
			$this->_prepare($products[$i]);
		}
		return $products;
	}
	function details($product_id) {
		$prod_req = $this->db->query("SELECT * FROM products WHERE product_id='{$product->id}'");
		if($prod_req->num_rows()) {
			return $this->_prepare($prod_req->row());
		}
		return null;
	}
	function getRandomProducts($category_id,$amount) {
		if($category_id ){
			$products_req = $this->db->query("SELECT * FROM products WHERE category_id='{$category_id}' LIMIT 0,{$amount}");
			if($products_req->num_rows()==$amount){
//				products
			}
		}
	}
}
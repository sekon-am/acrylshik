<?php 
class Productmodel extends CI_Model {
	var $permissions = false;
	function _prepare(&$product) {
		if($product){
			$this->load->helper('files');
			$dir = 'uploads/products/'.$product->id.'/';
			$images = readfiles($dir);
			$product->images = array();
			if(count($images)) {
				foreach($images as $image) {
					$product->images []= site_url($image);
				}
				shuffle($product->images);
			}
			$product->url = site_url('product/show/'.$product->id);
			if($this->permissions){
				$product->edit_url = site_url('manproduct/edit/'.$product->id);
				$product->delete_url = site_url('manproduct/delete/'.$product->id);
				$product->title = $product->name;
			}
			return $product;
		}
		return null;
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
		$prod_req = $this->db->query("SELECT * FROM products WHERE id='{$product_id}'");
		if($prod_req->num_rows()) {
			return $this->_prepare($prod_req->row());
		}
		return null;
	}
	function getRandomProducts($category_id=0,$amount=0) {
		$sql = "SELECT * FROM products";
		if($category_id){
			$this->load->model('Categorymodel');
			$cats = $this->Categorymodel->getAllSubcategoryIds($category_id);
			$sql .= " WHERE 0 OR (category_id='".implode("') OR (category_id='",$cats)."')";
		}
		$sql .= " ORDER BY RAND()";
		if($amount){
			$sql .= " LIMIT 0,{$amount}";
		}
		$productsReq = $this->db->query( $sql );
		if($productsReq->num_rows()){
			return $this->_prepareArray($productsReq->result());
		}
		return null;
	}
	function setPermissions() {
		$this->permissions = true;
	}
	function delArticle($id) {
		$this->db->query("DELETE FROM products WHERE id='{$id}'");
	}
	function getAllProducts() {
		return $this->_prepareArray($this->db->query("SELECT * FROM products")->result());
	}
	function insert($name,$category_id,$txt,$seo_title,$seo_descr,$seo_kwds) {
		$this->load->helper('seo');
		$txt = normImgSrc( $txt );
		$sql = "INSERT INTO products (name,category_id,txt,seo_title,seo_descr,seo_kwds) VALUES ('{$name}','{$category_id}','{$txt}','{$seo_title}','{$seo_descr}','{$seo_kwds}')";
		$this->db->query($sql);
		return $this->db->insert_id();
	}
	function update($id,$name,$category_id,$txt,$seo_title,$seo_descr,$seo_kwds) {
		$this->load->helper('seo');
		$txt = normImgSrc( $txt );
		$sql = "UPDATE products SET category_id='{$category_id}',name='{$name}',txt='{$txt}',seo_title='{$seo_title}',seo_descr='{$seo_descr}',seo_kwds='{$seo_kwds}' WHERE id='{$id}'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}
}
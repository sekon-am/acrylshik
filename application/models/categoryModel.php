<?php 
class CategoryModel extends CI_Model {
	function _getCatRes($id) {
		$sql = ($id==0) ? 
			"SELECT * FROM categories WHERE ISNULL(parent_id)" : 
			"SELECT * FROM categories WHERE parent_id='{$id}'";
		return $this->db->query($sql);
	}
	function _normCategory(&$category) {
		$category->img = base_url().'images/categories/'.$category->img;
		if($this->_getCatRes($category->id)->num_rows()) {
			$category->url = site_url('category/index/'.$category->id);
		}else{
			$category->url = site_url('product/index/'.$category->id);
		}
		return $category;
	}
	function getSubcategories($id) {
		$categories = $this->_getCatRes($id)->result();
		for($i=0;$i<count($categories);$i++){
			$this->_normCategory($categories[$i]);
		}
		return $categories;
	}
	function getCategory($category_id) {
		$category = $this->db->query("SELECT * FROM categories WHERE id='{$category_id}'");
		if(!$category->num_rows()){
			return null;
		}
		return $this->_normCategory($category->row());
	}
}
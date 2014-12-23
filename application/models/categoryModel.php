<?php 
class CategoryModel extends CI_Model {
	function _getChildrenRes($id) {
		$sql = ($id==0) ? 
			"SELECT * FROM categories WHERE ISNULL(parent_id)" : 
			"SELECT * FROM categories WHERE parent_id='{$id}'";
		return $this->db->query($sql);
	}
	function _normCategory(&$category) {
		$category->img = base_url().'images/categories/'.$category->img;
		if($this->_getChildrenRes($category->id)->num_rows()) {
			$category->url = site_url('category/index/'.$category->id);
		}else{
			$category->url = site_url('product/index/'.$category->id);
		}
		return $category;
	}
	function getCategory($category_id) {
		$category = $this->db->query("SELECT * FROM categories WHERE id='{$category_id}'");
		if(!$category->num_rows()){
			return null;
		}
		return $this->_normCategory($category->row());
	}
	function getSubcategories($id=0) {
		$categories = $this->_getChildrenRes($id)->result();
		for($i=0;$i<count($categories);$i++){
			$this->_normCategory($categories[$i]);
		}
		return $categories;
	}
}
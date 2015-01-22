<?php 
class CategoryModel extends CI_Model {
	function _getChildrenRes($id,$order='ASC') {
		$sql = ($id==0) ? 
			"SELECT * FROM categories WHERE ISNULL(parent_id) ORDER BY id {$order}" : 
			"SELECT * FROM categories WHERE parent_id='{$id}' ORDER BY id {$order}";
		return $this->db->query($sql);
	}
	function _normCategory(&$category) {
		$category->img = base_url().'images/categories/'.$category->img;
		if($this->_getChildrenRes($category->id)->num_rows()) {
			$category->url = site_url('category/index/'.$category->id);
		}else{
			$category->url = site_url('product/index/'.$category->id);
		}
		$category->position->x = ($category->img_position % 6) * 160;
		$category->position->y = floor($category->img_position / 6) * 160;
		return $category;
	}
	function getCategory($category_id) {
		$category = $this->db->query("SELECT * FROM categories WHERE id='{$category_id}'");
		if(!$category->num_rows()){
			return null;
		}
		return $this->_normCategory($category->row());
	}
	function getSubcategories($id=0,$order='ASC') {
		$categories = $this->_getChildrenRes($id,$order)->result();
		for($i=0;$i<count($categories);$i++){
			$this->_normCategory($categories[$i]);
		}
		return $categories;
	}
	function getRootSubcategories() {
		$rootCats = $this->getSubcategories();
		$subcats = array();
		foreach($rootCats as $rootCat) {
			$subcats[$rootCat->id] = $this->getSubcategories($rootCat->id);
		}
		return $subcats;
	}
}
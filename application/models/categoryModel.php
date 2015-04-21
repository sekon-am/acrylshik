<?php 
class Categorymodel extends CI_Model {
	private $admin_mode;
	function __construct(){
		parent::__construct();		
		$this->admin_mode = false;
	}
	function setAdminMode() {
		$this->admin_mode = true;
	}
	function _getChildrenRes($id,$order='ASC') {
		$sql = ($id==0) ? 
			"SELECT * FROM categories WHERE ISNULL(parent_id) ORDER BY id {$order}" : 
			"SELECT * FROM categories WHERE parent_id='{$id}' ORDER BY id {$order}";
		return $this->db->query($sql);
	}
	function _normCategory(&$category) {
		$category->img = base_url().'uploads/cats/'.$category->img;
		if($this->_getChildrenRes($category->id)->num_rows()) {
			$category->url = site_url('category/index/'.$category->id);
		}else{
			$category->url = site_url('product/index/'.$category->id);
		}
		$category->position->x = ($category->img_position % 6) * 160;
		$category->position->y = floor($category->img_position / 6) * 160;
		if($this->admin_mode) {
			$category->clss = ($category->parent_id) ? 'cat-tr-shift' : 'cat-tr-bold';
		}
		return $category;
	}
	function _normCategories(&$categories) {
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
	function getSubcategories($id=0,$order='ASC') {
		return $this->_normCategories( $this->_getChildrenRes($id,$order)->result() );
	}
	function getCategories() {
		return $this->_normCategories( $this->db->query("SELECT * FROM categories")->result() );
	}
	function getRootSelect() {
		$rootcats = $this->db->query("SELECT * FROM categories WHERE ISNULL(parent_id)")->result();
		$res = array();
		foreach($rootcats as $rootcat){
			$obj = null;
			$obj->value = $rootcat->id;
			$obj->label = $rootcat->name;
			$res []= $obj;
		}
		return $res;
	}
	function getCategoriesGroupByParent() {
		$rootcats = $this->_normCategories( 
			$this->db->query("SELECT * FROM categories WHERE ISNULL(parent_id)")->result() 
		);
		$allcats = array();
		foreach($rootcats as $rootcat){
			$allcats []= $rootcat;
			$allcats = array_merge($allcats, $this->_normCategories( 
				$this->db->query("SELECT * FROM categories WHERE parent_id='{$rootcat->id}'")->result()
			));
		}
		return $allcats;
	}
	function getRootSubcategories() {
		$rootCats = $this->getSubcategories();
		$subcats = array();
		foreach($rootCats as $rootCat) {
			$subcats[$rootCat->id] = $this->getSubcategories($rootCat->id);
		}
		return $subcats;
	}
	function updateTxt($id,$txt) {
		$this->load->helper('fix');
		$txt = normImgSrc( $txt );
		$this->db->query("UPDATE categories SET txt='{$txt}' WHERE id='{$id}'");
		return $this->db->affected_rows();		
	}
	function getAllSubcategoryIds($category_id) {
		$categoryIds = array($category_id);
		$q_sub = $this->db->query("SELECT id FROM categories WHERE parent_id='{$category_id}'");
		if($q_sub->num_rows()){
			foreach($q_sub->result() as $cat){
				$categoryIds = array_merge($categoryIds, $this->getAllSubcategoryIds($cat->id) );
			}
		}
		return $categoryIds;
	}
	function saveCats($cats) {
		$affected = 0;
		foreach($cats as $cat) {
			if(!$cat->parent_id)$cat->parent_id='NULL';
			$sql = "UPDATE categories SET name='{$cat->name}', title='{$cat->title}', descr='{$cat->descr}', parent_id={$cat->parent_id}, img_position='{$cat->img_position}' WHERE id='{$cat->id}'";
			$this->db->query($sql);
			$affected += $this->db->affected_rows();
		}
		file_put_contents('log.txt',$affected);
		return $affected;
	}
}
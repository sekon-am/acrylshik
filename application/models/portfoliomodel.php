<?php
class Portfoliomodel extends CI_Model {
	var $permissions = false;
	function __construct() {
		parent::__construct();
		$this->load->model('Categorymodel','Categorymodel');
	}
	function setPermissions() {
		$this->permissions = true;
	}
	function _norm(&$work){
		$work->url = site_url('portfolio/cat');
		$work->img = (($work->img)?site_url($this->config->item('img_portfolio_path').$work->img):'');
		$work->category = $this->Categorymodel->getCategory($work->category_id)->name;
		if($this->permissions){
			$work->edit_url = site_url('manportfolio/edit/'.$work->id);
			$work->delete_url = site_url('manportfolio/delete/'.$work->id);
		}
		return $work;
	}
	function _normArray(&$works) {
		foreach($works as &$work){
			$this->_norm($work);
		}
		return $works;
	}
	function getWork($id) {
		if($id){
			$q_work = $this->db->query("SELECT * FROM portfolio WHERE id='{$id}'");
			if($q_work->num_rows()){
				return $this->_norm( $q_work->row() );
			}
		}
		return null;
	}
	function getWorks($category_id=0,$limit=0) {
		$sql = "SELECT * FROM portfolio";
		if($category_id){
			$sql .= " WHERE category_id='{$category_id}'";
		}
		if($limit){
			$sql .= " LIMIT 0,{$limit}";
		}
		$q_works = $this->db->query($sql);
		if($q_works->num_rows()){
			return $this->_normArray($q_works->result());
		}
		return array();
	}
	function getRandomWorks($limit=0) {
		$sql = "SELECT * FROM portfolio ORDER BY RAND()";
		if($limit){
			$sql .= " LIMIT 0,{$limit}";
		}
		$q_works = $this->db->query($sql);
		if($q_works->num_rows()){
			return $this->_normArray($q_works->result());
		}
		return array();
	}
	function getFilters() {
		$filters = array();
		$filters []= array(
			'category_id'=>0,
			'url'=>site_url('portfolio/cat/0'),
			'txt'=>lang('All'),
			'amount'=>$this->db->query("SELECT COUNT(*) as num FROM portfolio")->row()->num,
		);
		$rootCats = $this->Categorymodel->getSubcategories();
		foreach($rootCats as $cat){
			$filters []= array(
				'category_id'=>$cat->id,
				'url'=>site_url('portfolio/cat/'.$cat->id),
				'txt'=>$cat->name,
				'amount'=>$this->db->query("SELECT COUNT(*) as num FROM portfolio WHERE category_id='{$cat->id}'")->row()->num,
			);
		}
		return $filters;
	}
	function add($name,$title,$category_id,$txt,$img){
		$this->db->query("INSERT INTO portfolio (name,title,category_id,txt,img) VALUES ('{$name}','{$title}','{$category_id}','{$txt}','{$img}')");
		return $this->db->insert_id();
	}
	function upd($id,$name,$title,$category_id,$txt,$img){
		$this->db->query("UPDATE portfolio SET name='{$name}',title='{$title}',category_id='{$category_id}','txt={$txt}',img='{$img}' WHERE id='{$id}'");
		return $this->db->affected_rows();
	}
	function del($id){
		$this->db->query("DELETE FROM portfolio WHERE id='{$id}'");
	}
}
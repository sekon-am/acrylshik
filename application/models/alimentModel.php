<?php
class AlimentModel extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->model('CategoryModel');
	}
	function getItems() {
		$rootCats = $this->CategoryModel->getSubcategories();
		$aliments = array();
		foreach($rootCats as $cat) {
			$aliments []= array(
				'bg'	=> base_url().'images/aliments/bg-'.$cat->id.'.png',
				'name'	=> $cat->name,
				'title'	=> $cat->title,
				'descr'	=> $cat->descr,
				'url'	=> $cat->url,
			);
		}
		return $aliments;
	}
}
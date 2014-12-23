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
				'title'	=> $cat->name,
			);
		}
		return $aliments;
	}
}
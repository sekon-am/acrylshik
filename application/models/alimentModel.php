<?php
class AlimentModel extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->model('CategoryModel');
	}
	function getElements() {
		$rootCats = $this->CategoryModel->getSubcategories();
		$aliments = array();
		foreach($rootCats as $cat) {
			$aliments []= base_url().'images/aliments/bg-'.$cat->id.'.jpg';
		}
		return $aliments;
	}
}
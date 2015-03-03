<?php
class Alimentmodel extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->model('Categorymodel');
	}
	function getItems() {
		$rootCats = $this->Categorymodel->getSubcategories();
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
<?php 
class Header extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Categorymodel');
	}
	function index($seo=array()) {
		foreach(array('seo_title','seo_descr','seo_kwds') as $seo_tag)
			if(!isset($seo[$seo_tag]))
				$seo[$seo_tag] = lang('default_'.str_replace('seo_','',$seo_tag));
		$this->load->view('header',array(
			'categories'	=> $this->Categorymodel->getSubcategories(0,'DESC'),
			'subcategories'	=> $this->Categorymodel->getRootSubcategories(),
			'seo'			=> $seo,
		));
	}
}
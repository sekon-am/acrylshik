<?php
class Pagearticles extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
	public function index($start=0) {
		$start = intval($start);
		load_module('header');
		load_module('articles');
		load_module('our_works');
		load_module('footer');
	}
}
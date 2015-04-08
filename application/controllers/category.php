<?php
class Category extends CI_Controller {
	function __constructor() {
		parent::__constructor();
	}
	function index($category_id) {
		load_module('header');
		load_module('subcategories','index',$category_id);
		load_module('slider');
		load_module('article4cat','index',$category_id);
		load_module('our_works','index',$category_id);
		load_module('articles');
		load_module('footer');
	}
}
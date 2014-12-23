<?php 
class MainPage extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
	function index() {
		load_module('header');
		load_module('aliment');
		load_module('articles');
		load_module('footer');
	}
}
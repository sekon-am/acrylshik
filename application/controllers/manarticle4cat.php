<?php 
class Manarticle4cat extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Categorymodel');
		$this->load->model('Authmodel');
		$this->load->helper('fix');
	}
}
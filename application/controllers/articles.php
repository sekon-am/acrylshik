<?php 
class Articles extends CI_Controller {
	function index() {
		$this->load->view('articles');
	}
}
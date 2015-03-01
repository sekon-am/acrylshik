<?php
class Manarticle extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('AuthModel','AuthModel');
		$this->load->model('ArticleModel','ArticleModel');
		$this->ArticleModel->setPermissions();
	}
	function dashboard() {
		$this->AuthModel->checkEditor();
		$this->load->view(
			'admin/table2edit',
			array(
				'title'	=> lang('Articles'),
				'data'	=> $this->ArticleModel->getLastest(),
			)
		);
	}
	function edit($id) {
		if( $article = $this->ArticleModel->getArticle($id) ) {
			$this->load->view('editor/article_add',array('article'=>$article));
		}
	}
	function delete($id) {
	}
}
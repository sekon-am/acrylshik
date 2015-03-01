<?php
class Manarticle extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('CategoryModel','CategoryModel');
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
			$edit_form = $this->load->view('editor/article_add',array(
				'article'=>$article,
				'categories'=>$this->CategoryModel->getCategories(),
			),true);
			$this->load->view('modal',array(
				'title'	=> lang('Edit article'),
				'content'	=> $edit_form,
				'save'	=> lang('Save'),
			));
		}
	}
	function delete($id) {
		$this->ArticleModel->delArticle($id);
		echo '{"code":100}';
	}
}
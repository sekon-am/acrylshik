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
				'data'	=> $this->ArticleModel->getArticles(),
				'table'	=> 'article',
			)
		);
	}
	function add() {
			$edit_form = $this->load->view('editor/article_add',array(
				'article'=>null,
				'categories'=>$this->CategoryModel->getCategories(),
				'articles'=>$this->ArticleModel->getArticles(),
				'related'=>array(),
				'rand'=>mt_rand(),
			),true);
			$this->load->view('modal',array(
				'title'	=> lang('Edit article'),
				'content'	=> $edit_form,
				'save'	=> lang('Save'),
			));
	}
	function edit($id) {
		if( $article = $this->ArticleModel->getArticle($id) ) {
			$edit_form = $this->load->view('editor/article_add',array(
				'article'=>$article,
				'categories'=>$this->CategoryModel->getCategories(),
				'articles'=>$this->ArticleModel->getArticles(),
				'related'=>$this->ArticleModel->getRelatedIds($article),
				'rand'=>mt_rand(),
			),true);
			$this->load->view('modal',array(
				'title'	=> lang('Edit article'),
				'content'	=> $edit_form,
				'save'	=> lang('Save'),
			));
		}
	}
	function save($id=0) {
		$title = $this->input->post('title');
		$category_id = $this->input->post('category_id');
		$related = $this->input->post('related');
		$short = $this->input->post('_short');
		$txt = $this->input->post('txt');
		$tpl = '';
		if($id){
			$this->db->query("UPDATE articles SET title='{$title}', category_id='{$category_id}', related='{$related}', short='{$short}', txt='{$txt}' WHERE id='{$id}'");
		}else{
			$this->db->query("INSERT INTO articles (title,category_id,related,short,txt) VALUES ('{$title}','{$category_id}','{$related}','{$short}','{$txt}')");
		}
		$code = 'ERROR';
		if($this->db->affected_rows()){
			$code = 'OK';
			if(!$id){
				$tpl = $this->load->view('admin/table-tr',array(
					'row'=>$this->ArticleModel->getArticle($this->db->insert_id()),
					'table'=>'article',
					'index'=>$this->input->post('count'),
				),true);
			}
		}
		header('Content-Type: application/json');
		echo json_encode(array('code' => $code, 'tr' => $tpl,));
	}
	function delete($id) {
		$this->ArticleModel->delArticle($id);
		echo '{"code":100}';
	}
}
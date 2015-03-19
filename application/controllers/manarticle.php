<?php
class Manarticle extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Categorymodel','Categorymodel');
		$this->load->model('Authmodel','Authmodel');
		$this->load->model('Articlemodel','Articlemodel');
		$this->load->helper('fix');
		$this->Articlemodel->setPermissions();
	}
	function dashboard() {
		$this->Authmodel->checkEditor();
		$this->load->view(
			'admin/table2edit',
			array(
				'title'	=> lang('Articles'),
				'data'	=> $this->Articlemodel->getArticles(),
				'table'	=> 'article',
				'field'	=> 'title',
			)
		);
	}
	function add() {
			$edit_form = $this->load->view('editor/article_add',array(
				'article'=>null,
				'categories'=>$this->Categorymodel->getCategories(),
				'articles'=>$this->Articlemodel->getArticles(),
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
		if( $article = $this->Articlemodel->getArticle($id) ) {
			$edit_form = $this->load->view('editor/article_add',array(
				'article'=>$article,
				'categories'=>$this->Categorymodel->getCategories(),
				'articles'=>$this->Articlemodel->getArticles(),
				'related'=>$this->Articlemodel->getRelatedIds($article),
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
		$txt = normImgSrc( $this->input->post('txt') );
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
					'row'=>$this->Articlemodel->getArticle($this->db->insert_id()),
					'table'=>'article',
					'index'=>$this->input->post('count'),
				),true);
			}
		}
		header('Content-Type: application/json');
		echo json_encode(array('code' => $code, 'tr' => $tpl,'txt'=>$txt));
	}
	function delete($id) {
		$this->Articlemodel->delArticle($id);
		echo '{"code":100}';
	}
	function lst() {
		$this->load->view('editor/lst-article');
	}
}
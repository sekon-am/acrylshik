<?php
class Manarticle extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Articlemodel','Articlemodel');
		$this->load->model('Authmodel','Authmodel');
		$this->load->model('Categorymodel','Categorymodel');
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
		$txt = $this->input->post('txt');
		$seo_title = $this->input->post('seo_title');
		$seo_descr = $this->input->post('seo_descr');
		$seo_kwds  = $this->input->post('seo_kwds');
		$tpl = '';
		$res = null;
		if($id){
			$res = $this->Articlemodel->update($id,$title,$category_id,$related,$short,$txt,$seo_title,$seo_descr,$seo_kwds);
		}else{
			$res = $this->Articlemodel->insert($title,$category_id,$related,$short,$txt,$seo_title,$seo_descr,$seo_kwds);
		}
		$code = 'ERROR';
		if($res){
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
	function uploadimg($id) {
		
		$dir = 'uploads/articles/'.$id.'/';
		if(!file_exists($dir)){
			mkdir($dir);
		}else{
			function rem_dir($dir) {
				if ($handle = opendir($dir)) {
					while( false !== ($entry = readdir($handle))) {
						if ($entry != "." && $entry != "..") {
							if(is_dir($entry)){
								rem_dir($dir.$entry);
								rm_dir($dir.$entry);
							}else{
								unlink($dir.$entry);
							}
						}
					}
					closedir($handle);
				}
			}
			rem_dir($dir);
		}
		$this->load->library('uploadhandler',array(
			'options'=>array(
				'upload_dir'=>$dir,
				'upload_url'=>site_url($dir).'/',
				'script_url'=>site_url('manarticle/delimg'),
			),
		));
		$res = $this->uploadhandler->get_response();
		$fname = $res['files'][0]->name;
		$this->Articlemodel->updateImg($id,$fname);
	}
}
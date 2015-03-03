<?php
class Manportfolio extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('CategoryModel','CategoryModel');
		$this->load->model('AuthModel','AuthModel');
		$this->load->model('Portfoliomodel','Portfoliomodel');
		$this->Portfoliomodel->setPermissions();
	}
	function dashboard() {
		$this->AuthModel->checkEditor();
		$this->load->view(
			'admin/table2edit',
			array(
				'title'	=> lang('Portfolio'),
				'data'	=> $this->Portfoliomodel->getWorks(),
				'table'	=> 'portfolio',
				'field'	=> 'name',
			)
		);
	}
	function add() {
			$edit_form = $this->load->view('editor/portfolio_add',array(
				'portfolio'=>null,
				'categories'=>$this->CategoryModel->getCategories(),
				'rand'=>mt_rand(),
			),true);
			$this->load->view('modal',array(
				'title'	=> lang('Add portfolio'),
				'content'	=> $edit_form,
				'save'	=> lang('Save'),
			));
	}
	function edit($id) {
		if( $portfolio = $this->Portfoliomodel->getWork($id) ) {
			$edit_form = $this->load->view('editor/portfolio_add',array(
				'portfolio'=>$portfolio,
				'categories'=>$this->CategoryModel->getCategories(),
				'rand'=>mt_rand(),
			),true);
			$this->load->view('modal',array(
				'title'	=> lang('Edit portfolio'),
				'content'	=> $edit_form,
				'save'	=> lang('Save'),
			));
		}
	}
	function save($id=0) {
		$name = $this->input->post('name');
		$title = $this->input->post('title');
		$category_id = $this->input->post('category_id');
		$txt = $this->input->post('txt');
		$img = 'our-works-sample.jpg';
		$tpl = '';
		if($id){
			$this->Portfoliomodel->upd($id,$name,$title,$category_id,$txt,$img);
		}else{
			$this->Portfoliomodel->add($name,$title,$category_id,$txt,$img);
		}
		$code = 'ERROR';
		if($this->db->affected_rows()){
			$code = 'OK';
			if(!$id){
				$tpl = $this->load->view('admin/table-tr',array(
					'row'=>$this->Portfoliomodel->getWork($this->db->insert_id()),
					'table'=>'portfolio',
					'index'=>$this->input->post('count'),
					'field'=>'name',
				),true);
			}
		}
		header('Content-Type: application/json');
		echo json_encode(array('code' => $code, 'tr' => $tpl,));
	}
	function delete($id) {
		$this->Portfoliomodel->del($id);
		echo '{"code":"OK"}';
	}
	function lst() {
		$this->load->view('editor/lst-portfolio');
	}
}
<?php
class Manproduct extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('CategoryModel','CategoryModel');
		$this->load->model('AuthModel','AuthModel');
		$this->load->model('ProductModel','ProductModel');
		$this->ProductModel->setPermissions();
	}
	function dashboard() {
		$this->AuthModel->checkEditor();
		$this->load->view(
			'admin/table2edit',
			array(
				'title'	=> lang('Products'),
				'data'	=> $this->ProductModel->getAllProducts(),
				'table'	=> 'product',
				'field'	=> 'title',
			)
		);
	}
	function add() {
			$edit_form = $this->load->view('editor/product_add',array(
				'product'=>null,
				'categories'=>$this->CategoryModel->getCategories(),
				'rand'=>mt_rand(),
			),true);
			$this->load->view('modal',array(
				'title'	=> lang('Add product'),
				'content'	=> $edit_form,
				'save'	=> lang('Save'),
			));
	}
	function edit($id) {
		if( $product = $this->ProductModel->details($id) ) {
			$edit_form = $this->load->view('editor/product_add',array(
				'product'=>$product,
				'categories'=>$this->CategoryModel->getCategories(),
				'rand'=>mt_rand(),
			),true);
			$this->load->view('modal',array(
				'title'	=> lang('Edit product'),
				'content'	=> $edit_form,
				'save'	=> lang('Save'),
			));
		}
	}
	function save($id=0) {
		$name = $this->input->post('name');
		$category_id = $this->input->post('category_id');
		$txt = $this->input->post('txt');
		$tpl = '';
		if($id){
			$this->db->query("UPDATE products SET name='{$name}', category_id='{$category_id}', txt='{$txt}' WHERE id='{$id}'");
		}else{
			$this->db->query("INSERT INTO products (name,category_id,txt) VALUES ('{$name}','{$category_id}','{$txt}')");
		}
		$code = 'ERROR';
		if($this->db->affected_rows()){
			$code = 'OK';
			if(!$id){
				$tpl = $this->load->view('admin/table-tr',array(
					'row'=>$this->ProductModel->details($this->db->insert_id()),
					'table'=>'product',
					'index'=>$this->input->post('count'),
				),true);
			}
		}
		header('Content-Type: application/json');
		echo json_encode(array('code' => $code, 'tr' => $tpl,));
	}
	function delete($id) {
		$this->ProductModel->delArticle($id);
		echo '{"code":"OK"}';
	}
	function lst() {
		$this->load->view('editor/lst-product');
	}
}
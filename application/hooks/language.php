<?php 
class Language {
	function init() {
		$ci =& get_instance();
		$ci->lang->load('interface',$ci->config->item('language'));
		$ci->lang->load('admin',$ci->config->item('language'));
	}
}
?>
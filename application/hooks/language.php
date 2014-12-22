<?php 
class Language {
	function init() {
		$ci =& get_instance();
		$ci->load->helper('language');
		$ci->lang->load(
			'interface',
			$ci->config->item('language')
		);
	}
}
?>
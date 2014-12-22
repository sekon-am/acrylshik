<?php
function get_config_item($name) {
	$ci =& get_instance();
	return $ci->config->item($name);
}
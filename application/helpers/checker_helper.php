<?php
function is_home() {
	$ci =& get_instance();
	return !($ci->uri->segment(1));
}
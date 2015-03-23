<?php
if(!function_exists('get_seo')){
	function get_seo($obj) {
		return array(
			'seo_title' => $obj->seo_title,
			'seo_descr' => $obj->seo_descr,
			'seo_kwds'  => $obj->seo_kwds,
		);
	}
}
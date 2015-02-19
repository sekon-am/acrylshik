<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if( !function_exists( 'load_module' ) ) {
	function load_module() {
		$args = func_get_args();
		if(count($args)<1){
			show_404('load_module: empty module name');
		}
		$class  = $args[0];
		$method	= 'index';
		$params = array();
		if(count($args)>=2){
			$method = $args[1];
			if(count($args)>2){
				$params = array_slice($args,2);
			}
		}

		$EXT =& load_class('Hooks', 'core');
		$BM =& load_class('Benchmark', 'core');
		if ( ! file_exists(APPPATH.'controllers/'.$class.'.php')){
			show_404("Can't find class {$class}");
		}
		include_once(APPPATH.'controllers/'.$class.'.php');
		
		$class = ucfirst(end(explode('/','/'.$class)));
		if ( ! class_exists($class)){
			show_404("Can't find {$class}");
		}
		$EXT->_call_hook('pre_controller');
		$BM->mark('controller_execution_time_( '.$class.' / '.$method.' )_start');
		$CI = new $class();
		$EXT->_call_hook('post_controller_constructor');

		if ( ! in_array(strtolower($method), array_map('strtolower', get_class_methods($CI))) ){
			show_404("{$class}/{$method}");
		}
		call_user_func_array(array(&$CI, $method), $params);

		// Mark a benchmark end point
		$BM->mark('controller_execution_time_( '.$class.' / '.$method.' )_end');
		$EXT->_call_hook('post_controller');
	}
}

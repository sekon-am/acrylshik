<?php
function readfiles($dir) {
	$files = array();
	if (file_exists($dir) && ($handle = opendir($dir))) {
		while (false !== ($entry = readdir($handle))) {
			if ($entry != "." && $entry != ".." && !is_dir($dir.$entry)) {
				$files []= $dir . $entry;
			}
		}
		closedir($handle);
	}
	return $files;
}
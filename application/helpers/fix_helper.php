<?php
	function normImgSrc($txt) {
		$txt = preg_replace('~src="(\.\./)*~i','src="/', $txt );
		//$txt = preg_replace('~src="([^"]*?)([^/"]+)"~i','src="$1thumbnail/$2',$txt);
		return $txt;
	}

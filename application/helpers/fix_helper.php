<?php
	function normImgSrc($txt) {
		return preg_replace('~src="(\.\./)*~i','src="/',$txt);
	}

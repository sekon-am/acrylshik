<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<title></title>
	<meta name="author" content="" />
	<meta name="description" content="" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="favicon.ico" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_config_item('base_url'); ?>css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_config_item('base_url'); ?>css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_config_item('base_url'); ?>css/main.css" />
	
	<script src="<?php echo get_config_item('base_url'); ?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo get_config_item('base_url'); ?>js/main.js"></script>
</head>
<body>
	<header class="block-wide">
		<div class="header-block">
			<a href="<?php echo get_config_item('base_url'); ?>" id="logo"><img src="<?php echo get_config_item('base_url'); ?>images/logo.png" alt="" title=""/></a>
			<nav class="main-menu block-wrap">
<?php foreach($categories as $cat): ?>
				<a href="<?php echo $cat->url; ?>" class="main-menu-element" title="<?php echo $cat->title; ?>" style="background-image:url(<?php echo $cat->img; ?>)"><span><?php echo $cat->name; ?></span></a>
<?php endforeach; ?>
			</nav>
		</div>
	</header>
	<div class="header-hr block-wide"></div>

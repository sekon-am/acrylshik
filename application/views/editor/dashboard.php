<?php load_view('editor/header',array(
	'additional' => array( load_view( 'editor/multiupload-links', array(), true ), ),
)); ?>
		<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
			<h1><?php echo lang('Welcome').$login; ?></h1>
			<?php load_module('manarticle','dashboard'); ?>
			<?php load_module('manproduct','dashboard'); ?>
			<?php load_module('manportfolio','dashboard'); ?>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
			<div class="sidebar-menu">
				<h4><?php echo lang('Articles'); ?></h4>
				<?php load_view('editor/sidebar-article'); ?>
			</div>
			<div class="sidebar-menu">
				<h4><?php echo lang('Products'); ?></h4>
				<?php load_view('editor/sidebar-product'); ?>
			</div>
			<div class="sidebar-menu">
				<h4><?php echo lang('Portfolio'); ?></h4>
				<?php load_view('editor/sidebar-portfolio'); ?>
			</div>
		</div>
<?php load_view('editor/footer'); ?>

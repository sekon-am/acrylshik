<?php load_view('editor/header',array(
	'additional' => array( 
		load_view( 'editor/multiupload-links', array(), true ), 
	),
)); ?>
		<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
			<?php load_module('manarticle','dashboard'); ?>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
			<div class="sidebar-menu">
				<h4><?php echo lang('Actions'); ?></h4>
				<?php load_view('editor/sidebar-article'); ?>
			</div>
		</div>
<?php load_view('editor/footer'); ?>

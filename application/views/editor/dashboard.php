<?php load_view('admin/start'); ?>
<?php load_view('editor/navbar'); ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
			<h1><?php echo lang('Welcome').$login; ?></h1>
			<?php load_module('articles','dashboard'); ?>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
			<?php load_view('editor/sidebar'); ?>
		</div>
	</div>
</div>
<?php load_view('admin/finish'); ?>


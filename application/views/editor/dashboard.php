<?php load_view('editor/header'); ?>
		<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
			<h1><?php echo lang('Welcome').$login; ?></h1>
			<?php load_module('manarticle','dashboard'); ?>
			<?php load_module('manproduct','dashboard'); ?>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
			<div class="sidebar-menu">
				<h4><?php echo lang('Articles'); ?></h4>
				<ul class="nav nav-sidebar">
					<li><a href="<?php echo site_url('manarticle/lst'); ?>"><?php echo lang('List'); ?></a></li>
					<li><a data-link="<?php echo site_url('manarticle/add'); ?>"><?php echo lang('Add'); ?></a></li>
				</ul>
			</div>
			<div class="sidebar-menu">
				<h4><?php echo lang('Products'); ?></h4>
				<ul class="nav nav-sidebar">
					<li><a href="<?php echo site_url('manproduct/lst'); ?>"><?php echo lang('List'); ?></a></li>
					<li><a data-link="<?php echo site_url('manproduct/add'); ?>"><?php echo lang('Add'); ?></a></li>
				</ul>
			</div>
		</div>
<?php load_view('editor/footer'); ?>

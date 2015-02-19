<?php load_module('admin/admin','_start'); ?>
<?php load_module('admin/editor','_navbar'); ?>
<div class="container main-body">
	<div class="row">
	<?php load_module('admin/editor','_welcome',$login); ?>
	<?php load_module('admin/editor','_sidebar'); ?>
	</div>
</div>
<?php load_module('admin/admin','_finish'); ?>


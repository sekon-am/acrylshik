<div class="modal fade" id="addedit" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title"><?php echo $title; ?></h4>
		</div>
		<div class="modal-body">
			<?php echo $content; ?>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('Close'); ?></button>
			<button type="button" class="btn btn-primary"><?php echo $save; ?></button>
		</div>
	</div>
</div>

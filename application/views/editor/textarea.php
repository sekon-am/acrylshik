	<div class="form-group">
		<label for="<?php echo $label; ?>Id"><?php echo lang($label); ?></label>
		<textarea class="form-control" id="<?php echo $label.$rand; ?>Id">
		<?php if($el && $el->$f): echo $el->$f; endif; ?>
		</textarea>
	</div>

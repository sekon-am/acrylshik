	<div class="form-group">
		<label for="<?php echo $label; ?>Id"><?php echo lang($label); ?></label>
		<input type="<?php echo $type; ?>" 
			class="form-control" 
			id="<?php echo $label; ?>Id" 
			placeholder="<?php echo lang('Enter value'); ?>"
			<?php if($el && $el->$f): ?>value="<?php echo $el->$f; ?>"<?php endif; ?>>
	</div>

	<div class="form-group">
		<label for="<?php echo $label; ?>Id"><?php echo lang($label); ?></label>
		<select class="form-control" id="<?php echo $label; ?>Id">
		<?php foreach($items as $el): ?>)
			<option value="<?php echo $el->id; ?>"<?php if($el->id == $selected): ?> SELECTED<?php endif; ?>>
				<?php echo $el->$val; ?>
			</option>
		<?php endforeach; ?>
		</select>
	</div>

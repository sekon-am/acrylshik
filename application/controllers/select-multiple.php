	<div class="form-group">
		<label for="<?php echo $label; ?>Id"><?php echo lang($label); ?></label>
		<select class="form-control" id="<?php echo $label; ?>Id" multiple>
		<?php foreach($items as $el): ?>)
			<option value="<?php echo $el->id; ?>"<?php if(in_array($el->id,$related)): ?> SELECTED<?php endif; ?>>
				<?php echo $el->$val; ?>
			</option>
		<?php endforeach; ?>
		</select>
	</div>

<table class="table table-striped table-responsive">
	<caption><?php echo $title; ?></caption>
	<thead>
		<tr>
			<th>#</th>
			<th><?php echo lang('Title'); ?></th>
			<th><?php echo lang('Edit'); ?></th>
			<th><?php echo lang('Delete'); ?></th>
		</tr>
	</thead>
	<tbody>
	<?php 
	$i=1;
	foreach($data as $row): ?>
		<tr>
			<th scope="row"><?php echo $i++; ?></th>
			<td>
				<a href="<?php echo $row->url; ?>" target="_blank"><?php echo $row->title; ?></a>
			</td>
			<td>
				<span class="glyphicon glyphicon-edit td-edit" 
					aria-hidden="true" 
					data-link="<?php echo $row->edit_url; ?>">
				</span>
			</td>
			<td>
				<span class="glyphicon glyphicon-remove td-delete" 
					aria-hidden="true" 
					data-link="<?php echo $row->delete_url; ?>">
				</span>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
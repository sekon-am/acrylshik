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
	<tbody class="data-<?php echo $table; ?>">
	<?php 
	$i=1;
	foreach($data as $row):
		load_view('admin/table-tr',array(
			'row'=>$row,
			'table'=>$table,
			'index'=>$i++,
		));
	endforeach; ?>
	</tbody>
</table>
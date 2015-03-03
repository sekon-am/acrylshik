		<tr data-<?php echo $table; ?>-id="<?php echo $row->id; ?>">
			<th scope="row"><?php echo $index; ?></th>
			<td>
				<a class="title" href="<?php echo $row->url; ?>" target="_blank"><?php echo $row->title; ?></a>
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

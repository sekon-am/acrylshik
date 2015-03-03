	<div class="sidebar">
		<h4><?php echo $title; ?></h4>
		<ul class="nav nav-sidebar">
		<?php foreach($menu as $el): ?>
			<li<?php if($active==$el['url']): ?> class="active"<?php endif; ?>>
				<a href="<?php echo $el['url']; ?>"><?php echo $el['txt']; ?></a>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
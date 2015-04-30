	<article class="subcats">
	<?php load_view('part_h',array(
		'title' => $category->name,
		'descr' => $category->title,
	)); ?>	
		<div class="subcategories1 block-wrap">
<?php foreach($categories as $category): ?>
			<div class="subcategory-icon" data-link="<?php echo $category->url; ?>">
				<div class="subcategory-top-icon" style="background-position:-<?php echo $category->position->x; ?>px -<?php echo $category->position->y; ?>px,-<?php echo $category->position->x; ?>px -<?php echo $category->position->y; ?>px;">
					<a class="subcategory-name" class href="<?php echo $category->url; ?>">
						<h2><?php echo $category->name; ?></h2>
					</a>
				</div>
				<div class="subcategory-image-wrap">
					<div class="subcategory-image" style="background-image:url(<?php echo $category->img; ?>);"></div>
				</div>
				<div class="subcategory-title"><?php echo $category->title; ?></div>
				<div class="more" data-link="<?php echo $category->url; ?>"><div class="arrow">&gt;</div>Подробнее</div>
			</div>
<?php endforeach;?>
		</div>
	</article>

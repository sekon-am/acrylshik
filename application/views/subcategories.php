	<article>
		<div class="block-wrap">
			<h1 class="h1"><?php echo $category->name; ?></h1>
			<h3 class="h1-descr"><?php echo $category->descr; ?></h3>
			<div class="hr"></div>
		</div>
		<div class="subcategories block-wrap">
<?php foreach($categories as $category): ?>
			<div class="subcategory">
				<div class="icon" style="background-position:-<?php echo $category->position->x; ?>px -<?php echo $category->position->y; ?>px;" data-link="<?php echo $category->url; ?>">
					<a href="<?php echo $category->url; ?>">
						<h2><?php echo $category->name; ?></h2>
					</a>
				</div>
				<div class="title" data-link="<?php echo $category->url; ?>"><?php echo $category->title; ?></div>
				<div class="hr"></div>
				<p class="descr"><?php echo $category->descr; ?></p>
				<div class="more" data-link="<?php echo $category->url; ?>"><div class="arrow">&gt;</div>Подробнее</div>
			</div>
<?php endforeach; ?>
		</div>
	</article>

<article class="article block-wrap">
	<?php load_view('part_h',array(
		'title' => $category->name,
		'descr' => $category->title,
	)); ?>	
	<div class="txt  article-markup"><?php echo $category->txt; ?></div>
</article>
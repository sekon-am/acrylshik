<article class="article article4cat block-wrap">
	<?php load_view('part_h',array(
		'title' => $category->name,
		'descr' => lang('Category article'),
	)); ?>	
	<div class="txt  article-markup"><?php echo $category->txt; ?></div>
</article>
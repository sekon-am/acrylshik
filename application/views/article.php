<div class="article block-wrap">
	<div class="image" style="backround-image:url(<?php echo $product->img; ?>);"></div>
	<h1><?php echo $product->title; ?></h1>
	<div class="sign"><?php echo $product->category; ?>&nbsp;/&nbsp;<?php echo $product->posted; ?></div>
	<div class="hr"></div>
	<div class="txt"><?php echo $product->txt; ?></div>
	<div class="tags">
		<?php echo lang('TAGS'); ?>
		<?php foreach($product->tags as $tag): ?>
		<a class="tag" href="<?php echo $tag->url; ?>"><span><?php echo $tag->name; ?></span></a>
		<?php endforeach; ?>
	</div>
</div>
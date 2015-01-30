<article class="article block-wrap">
	<?php if($article->img): ?>
	<div class="image" style="background-image:url(<?php echo $article->img; ?>);"></div>
	<?php endif; ?>
	<h1><?php echo $article->title; ?></h1>
	<div class="sign"><?php echo $article->category; ?>&nbsp;/&nbsp;<?php echo $article->posted; ?></div>
	<div class="hr"></div>
	<div class="txt"><?php echo $article->txt; ?></div>
	<div class="tags">
		<?php echo lang('TAGS'); ?>:
		<?php foreach($article->tags as $tag): ?>
		<a class="tag" href="<?php echo $tag->url; ?>"><span><?php echo $tag->name; ?></span></a>
		<?php endforeach; ?>
	</div>
	<div class="prev-article">
		<div class="image" style="background-image:url(<?php echo $articlePrev->img; ?>);"></div>
		<h2><?php echo $articlePrev->img; ?></h2>
		<div class="sign"><?php echo $articlePrev->category; ?>&nbsp;/&nbsp;<?php echo $articlePrev->posted; ?></div>
		<div class="hr"></div>
		<div class="txt"><?php echo $articlePrev->txt; ?></div>
	</div>
	<div>
	</div>
</article>
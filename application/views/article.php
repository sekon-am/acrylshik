<article class="article block-wrap article-1">
	<?php if($article->img): ?>
	<div class="image" style="background-image:url(<?php echo $article->topimg; ?>);"></div>
	<?php endif; ?>
	<div class="maintitle h1"><?php echo lang('Articles'); ?><span>&gt;</span><h1><?php echo $article->title; ?></h1></div>
	<div class="sign"><?php echo $article->category; ?>&nbsp;/&nbsp;<?php echo $article->posted; ?></div>
	<div class="hr"></div>
	<div class="txt  article-markup"><?php echo $article->txt; ?></div>
	<?php if(count($article->tags)): ?>
	<div class="tags">
		<span class="title"><?php echo lang('TAGS'); ?>:</span>
		<?php foreach($article->tags as $tag): ?>
		<a class="tag" href="<?php echo $tag->url; ?>"><span><?php echo $tag->name; ?></span></a>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>
	<?php if($articlePrev): ?>
	<div class="prev-article">
		<div class="image-wrap">
			<div class="image" style="background-image:url(<?php echo $articlePrev->img; ?>);" data-link="<?php echo $articlePrev->url; ?>"></div>
		</div>
		<a href="<?php echo $articlePrev->url; ?>"><h2><?php echo $articlePrev->title; ?></h2></a>
		<div class="sign"><?php echo $articlePrev->category; ?>&nbsp;/&nbsp;<?php echo $articlePrev->posted; ?></div>
		<div class="hr"></div>
		<div class="short"><?php echo $articlePrev->short; ?></div>
	</div>
	<?php endif; ?>
	<?php if(count($related)): ?>
	<div class="related">
		<div class="button" id="relative-next">&gt;</div>
		<div class="button" id="relative-prev">&lt;</div>
		<div class="title"><?php echo lang('Relative articles'); ?></div>
		<?php $relCounter = 0;
		foreach($related as $rel): ?>
		<div class="rel-article<?php if($relCounter++ >= $this->config->item('related_articles')) { ?> hidden<?php } ?>">
			<div class="image-wrap">
				<div class="image" 
					style="background-image:url(<?php echo $rel->img; ?>);"
					data-link="<?php echo $rel->url; ?>">
				</div>
			</div>
			<a href="<?php echo $rel->url; ?>"><h2><?php echo $rel->title; ?></h2></a>
		</div>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>
</article>
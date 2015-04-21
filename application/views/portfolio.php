<?php load_module('header'); ?>
<article class="portfolio">
<?php load_view('part_h',array(
	'title' => lang('Portfolio'),
	'descr' => lang('Portfolio descr'),
)); ?>	
<div class="filter block-wrap">
	<?php foreach($filters as $filter): ?>
	<a class="filter-item<?php if($category_id==$filter['category_id']):?> active<?php endif; ?>" href="<?php echo $filter['url']; ?>">
		<div class="amount"><?php echo $filter['amount']; ?></div>
		<span><?php echo $filter['txt']; ?></span>
	</a>
	<?php endforeach; ?>
</div>
<div class="works block-wrap ">
<?php foreach($works as $work): ?>
	<div class="work-one">
		<div class="icon-wrap">
			<div class="icon" style="background-image:url(<?php echo $work->img; ?>);">
						<div class="portfolio-icon-wave">
							<div class="portfolio-wave-title"><?php echo $work->name; ?></div>
						</div>
			</div>
		</div>
		<h2><?php echo $work->name; ?></h2>
		<div class="hr"></div>
		<h4><?php echo $work->title; ?></h4>
		<div class="more">
			<div class="arrow">&gt;</div>
			<?php echo lang('More'); ?>
		</div>
	</div>
<?php endforeach; ?>
</div>
</article>
<?php load_module('footer'); ?>

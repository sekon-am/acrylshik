<article class="products-list block-wrap">
	<div class="category-box">
		<div class="category-box-wrap" style="background-image:url(<?php echo $category->img; ?>);">
			<div class="category-descr"><?php echo $category->descr; ?></div>
			<h1 class="category-name"><?php echo $category->name; ?></h1>
			<div class="category-title"><?php echo $category->title; ?></div>
		</div>
	</div>
	<?php load_module('product','_lst',$category->id); ?>
</article>
<script src="<?php echo get_config_item('base_url'); ?>js/products.js"></script>

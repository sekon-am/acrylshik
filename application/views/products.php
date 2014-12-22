<article class="products-list block-wrap">
	<div class="category-box">
		<div class="category-box-wrap" style="background-image:url(<?php echo $category->img; ?>);">
			<div class="category-descr"><?php echo $category->descr; ?></div>
			<h1 class="category-name"><?php echo $category->name; ?></h1>
			<div class="category-title"><?php echo $category->title; ?></div>
		</div>
	</div>
<?php 
if(count($products)>0):
for($i=0;$i<count($products);$i++): 
$product=$products[$i];
?>
	<div class="product">
		<div class="product-img-box <?php echo ($i%2==0)?'lfloat':'rfloat'; ?>">
<?php for($j=0;$j<min(3,count($product->images));$j++): ?>
			<div class="product-img" style="background-image:url(<?php echo $product->images[$j]; ?>);"></div>
<?php endfor; ?>
		</div>
		<div class="<?php echo ($i%2==0)?'lshift':'rshift'; ?>">
			<h2 class="product-title"><?php echo $product->name; ?></h2>
			<div class="product-txt"><?php echo $product->txt; ?></div>
		</div>
	</div>
<?php endfor; ?>
<?php else: ?>
	<div class="no-products">
		<?php echo lang('msg_no_products'); ?>
	</div>
<?php endif; ?>
</article>
<script src="<?php echo get_config_item('base_url'); ?>js/products.js"></script>

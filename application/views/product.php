	<div class="product block-wrap">
		<div class="product-img-box <?php echo ($index%2==0)?'lfloat':'rfloat'; ?>">
<?php for($j=0;$j<min(3,count($product->images));$j++): ?>
			<div class="product-img" style="background-image:url(<?php echo $product->images[$j]; ?>);"></div>
<?php endfor; ?>
		</div>
		<div class="<?php echo ($index%2==0)?'lshift':'rshift'; ?>">
			<h2 class="product-title"><?php echo $product->name; ?></h2>
			<div class="product-txt"><?php echo $product->txt; ?></div>
		</div>
	</div>

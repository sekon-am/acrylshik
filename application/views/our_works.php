	<article class="our-works block-wide">
		<div class="block-wrap">
			<h3 class="h1">Рекламная продукция</h3>
			<p class="h1-descr">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты</p>
			<div class="hr-light"></div>
<?php 
if(count($products)):
foreach($products as $product):
?>
			<div class="icon-wrap">
				<div class="icon" style="background-image:url(<?php echo $product->img; ?>);" data-link="<?php echo $product->url; ?>"></div>
			</div>
<?php
endforeach;
else:
?>
			<div class="warning-message"><?php echo lang('msg_no_products'); ?></div>
<?php 
endif;
?>
			<div class="wide-empry"></div>
		</div>
	</article>
	<script src="<?php echo get_config_item('base_url'); ?>js/our-works.js"></script>
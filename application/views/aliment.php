<div class="aliment block-wide">
<?php 
$pos = 0;
foreach($aliment as $a):?>
	<div class="aliment-item" style="background-image:url(<?php echo $a['bg']; ?>);">
		<div class="shirma">
			<div class="icon-dark" style="background-position:-<?php echo $pos++*160; ?>px 0;">
				<span><?php echo $a['title']; ?></span>
			</div>
		</div>
		<div class="icon-light"></div>
		<div class="aliment-descr"></div>
	</div>
<?php endforeach; ?>
</div>
<script src="<?php echo get_config_item('base_url'); ?>js/aliment.js"></script>
<div class="aliment block-wide">
<?php 
$pos = 0;
foreach($aliment as $a):?>
	<div class="aliment-item" style="background-image:url(<?php echo $a['bg']; ?>);" data-link="<?php echo $a['url']; ?>">
		<div class="shirma">
			<div class="icon-dark" style="background-position:-<?php echo $pos*160; ?>px 0;">
				<span><?php echo $a['name']; ?></span>
			</div>
		</div>
		<div class="icon-light-box">
			<div class="icon-light" style="background-position:-<?php echo $pos++*160; ?>px -80px;">
				<span><?php echo $a['name']; ?></span>
			</div>
		</div>
		<div class="aliment-info">
			<div class="aliment-title"><?php echo $a['title']; ?></div>
		</div>
	</div>
<?php endforeach; ?>
</div>
<script src="<?php echo get_config_item('base_url'); ?>js/aliment.js"></script>
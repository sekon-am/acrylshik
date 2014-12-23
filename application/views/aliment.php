<div class="aliment block-wide">
<?php $i=10; ?>
<?php foreach($aliment as $a):?>
	<div class="aliment-item" style="background-color:rgb(<?php echo $i; ?>,<?php echo $i; ?>,<?php echo $i;$i+=50; ?>);">
	</div>
<?php endforeach; ?>
</div>
<script src="<?php echo get_config_item('base_url'); ?>js/aliment.js"></script>
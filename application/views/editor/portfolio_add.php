<?php load_view('editor/input',array(
	'label'=>'Name',
	'type'=>'text',
	'el'=>$portfolio,
	'f'=>'name',
)); ?>
<?php load_view('editor/input',array(
	'label'=>'Title',
	'type'=>'text',
	'el'=>$portfolio,
	'f'=>'title',
)); ?>
<?php load_view('editor/select',array(
	'label'=> 'Category',
	'items'=> $categories,
	'val'=> 'name',
	'selected'=> ($portfolio)?$portfolio->category_id:0,
)); ?>
<?php load_view('editor/textarea',array(
	'label'=>'Text',
	'el'=>$portfolio,
	'f'=>'txt',
	'rand'=>$rand,
)); ?>
	<script>
		tinymce.init({
			selector: "#Text<?php echo $rand; ?>Id",
			theme: "modern",
			plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
			image_advtab: true,
			height:300
		});
<?php if(!$portfolio): ?>
		$('#Count').val($('[data-portfolio-id]').length);
<?php endif; ?>
	</script>
	<input type="hidden" id="Rand" value="<?php echo $rand; ?>"/>
	<?php if($portfolio){ ?>
	<input type="hidden" id="Id" value="<?php echo $portfolio->id; ?>"/>
	<?php }else{ ?>
	<input type="hidden" id="Count"/>
	<?php } ?>
	<input type="hidden" id="table-name" value="portfolio"/>
<script src="/js/portfolio_add.js"></script>
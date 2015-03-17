<?php load_view('editor/input',array(
	'label'=>'Name',
	'type'=>'text',
	'el'=>$product,
	'f'=>'name',
)); ?>
<?php load_view('editor/select',array(
	'label'=> 'Category',
	'items'=> $categories,
	'val'=> 'name',
	'selected'=> ($product)?$product->category_id:0,
)); ?>
<?php load_view('editor/textarea',array(
	'label'=>'Text',
	'el'=>$product,
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
				"insertdatetime media table contextmenu paste jbimages"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
			image_advtab: true,
			height:400
		});
<?php if(!$product): ?>
		$('#Count').val($('[data-product-id]').length);
<?php endif; ?>
	</script>
	<input type="hidden" id="Rand" value="<?php echo $rand; ?>"/>
	<?php if($product){ ?>
	<input type="hidden" id="Id" value="<?php echo $product->id; ?>"/>
	<?php }else{ ?>
	<input type="hidden" id="Count"/>
	<?php } ?>
	<input type="hidden" id="table-name" value="product"/>
<script src="/js/product_add.js"></script>
<div role="tabpanel">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#article-home" aria-controls="article-home" role="tab" data-toggle="tab"><?php echo lang('Params'); ?></a></li>
		<li role="presentation"><a href="#article-txt" aria-controls="article-txt" role="tab" data-toggle="tab"><?php echo lang('Text'); ?></a></li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="article-home">
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
<?php load_view('editor/input',array(
	'label'=>'SEO_Title',
	'type'=>'text',
	'el'=>$product,
	'f'=>'seo_title',
)); ?>
<?php load_view('editor/input',array(
	'label'=>'SEO_Descr',
	'type'=>'text',
	'el'=>$product,
	'f'=>'seo_descr',
)); ?>
<?php load_view('editor/input',array(
	'label'=>'SEO_Kwds',
	'type'=>'text',
	'el'=>$product,
	'f'=>'seo_kwds',
)); ?>
		</div>
		<div role="tabpanel" class="tab-pane" id="article-txt">
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
		</div>
	</div>
	<input type="hidden" id="Rand" value="<?php echo $rand; ?>"/>
	<?php if($product){ ?>
	<input type="hidden" id="Id" value="<?php echo $product->id; ?>"/>
	<?php }else{ ?>
	<input type="hidden" id="Count"/>
	<?php } ?>
	<input type="hidden" id="table-name" value="product"/>
</div>
<script src="/js/product_add.js"></script>
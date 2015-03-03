<div role="tabpanel">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#article-home" aria-controls="article-home" role="tab" data-toggle="tab"><?php echo lang('Params'); ?></a></li>
		<li role="presentation"><a href="#article-txt" aria-controls="article-txt" role="tab" data-toggle="tab"><?php echo lang('Text'); ?></a></li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="article-home">
<?php load_view('editor/input',array(
	'label'=>'Title',
	'type'=>'text',
	'el'=>$article,
	'f'=>'title',
)); ?>
<?php load_view('editor/select',array(
	'label'=> 'Category',
	'items'=> $categories,
	'val'=> 'name',
	'selected'=> ($article)?$article->category_id:null,
)); ?>
<?php load_view('editor/select-multiple',array(
	'label'=> 'Related',
	'items'=> $articles,
	'related'=> $related,
	'val'=> 'title',
)); ?>
		</div>
		<div role="tabpanel" class="tab-pane" id="article-txt">
<?php load_view('editor/textarea',array(
	'label'=>'Short',
	'el'=>$article,
	'f'=>'short',
	'rand'=>$rand,
)); ?>
<?php load_view('editor/textarea',array(
	'label'=>'Text',
	'el'=>$article,
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
			height:320
		});
		tinymce.init({
			selector: "#Short<?php echo $rand; ?>Id",
			plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify",
			menubar : false,
			height: 120
		});
<?php if(!$article): ?>
		$('#Count').val($('[data-article-id]').length);
<?php endif; ?>
	</script>
		</div>
	</div>
	<input type="hidden" id="Rand" value="<?php echo $rand; ?>"/>
	<?php if($article){ ?>
	<input type="hidden" id="Id" value="<?php echo $article->id; ?>"/>
	<?php }else{ ?>
	<input type="hidden" id="Count"/>
	<?php } ?>
	<input type="hidden" id="table-name" value="article"/>
</div>
<script src="/js/article_add.js"></script>
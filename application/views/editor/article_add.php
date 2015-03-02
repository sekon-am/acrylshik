<form>
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
	'label'	=> 'Category',
	'items'	=> $categories,
	'val'	=> 'name',
	'selected'	=> $article->id,
)); ?>
		</div>
		<div role="tabpanel" class="tab-pane" id="article-txt">
<?php load_view('editor/textarea',array(
	'label'=>'Short',
	'el'=>$article,
	'f'=>'short',
)); ?>
<?php load_view('editor/textarea',array(
	'label'=>'Text',
	'el'=>$article,
	'f'=>'txt',
)); ?>
		</div>
	</div>

</div>
<script src="/js/article_add.js"></script>
<!--	<div class="form-group">
		<label for=""><?php echo lang(''); ?></label>
		<input type="text" class="form-control" id="" placeholder="<?php echo lang(''); ?>">
	</div>
	<div class="form-group">
		<label for=""><?php echo lang(''); ?></label>
		<input type="text" class="form-control" id="" placeholder="<?php echo lang(''); ?>">
	</div>
	<div class="form-group">
		<label for=""><?php echo lang(''); ?></label>
		<input type="text" class="form-control" id="" placeholder="<?php echo lang(''); ?>">
	</div>
	<div class="form-group">
		<label for=""><?php echo lang(''); ?></label>
		<input type="text" class="form-control" id="" placeholder="<?php echo lang(''); ?>">
	</div>-->
</form>
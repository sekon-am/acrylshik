<form>
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
<?php load_view('editor/textarea',array(
	'label'=>'Text',
	'el'=>$article,
	'f'=>'txt',
)); ?>
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
<?php load_view('editor/header'); ?>
		<div class="col-lg-12">
			<h1><?php echo lang('Category titles editor'); ?></h1>
			<div role="tabpanel">
				<ul class="nav nav-tabs" role="tablist">
					<?php $i=0; foreach($categories as $cat): ?>
					<li role="presentation"<?php if($i++==0):?> class="active"<?php endif; ?>>
						<a href="#Cat<?php echo $cat->id; ?>" aria-controls="Cat<?php echo $cat->id; ?>" role="tab" data-toggle="tab"><?php echo $cat->name; ?></a>
					</li>
					<?php endforeach; ?>
				</ul>
				<div class="tab-content">
					<?php $i=0; foreach($categories as $cat): ?>
					<div role="tabpanel" class="tab-pane<?php if($i++==0):?> active<?php endif; ?>" id="Cat<?php echo $cat->id; ?>">
						<?php load_view('editor/textarea',array(
							'label'=>'Text',
							'el'=>$cat,
							'f'=>'txt',
							'rand'=>$cat->id,
						)); ?>
							<script>
								tinymce.init({
									selector: "#Text<?php echo $cat->id; ?>Id",
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
							</script>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
<?php load_view('editor/footer'); ?>

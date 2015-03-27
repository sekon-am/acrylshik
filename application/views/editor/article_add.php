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
 <!-- The fileinput-button span is used to style the file input field as button -->
    <span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Add files...</span>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]">
    </span>
    <br>
    <br>
    <!-- The global progress bar -->
    <div id="progress" class="progress">
        <div class="progress-bar progress-bar-success"></div>
    </div>
    <!-- The container for the uploaded files -->
    <div id="files" class="files"></div>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="/js/bootstrap.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="/js/jquery.fileupload-validate.js"></script>
<script>
/*jslint unparam: true, regexp: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = '//jquery-file-upload.appspot.com/',
        uploadButton = $('<button/>')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 5000000, // 5 MB
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
        data.context = $('<div/>').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>
<?php load_view('editor/input',array(
	'label'=>'SEO_Title',
	'type'=>'text',
	'el'=>$article,
	'f'=>'seo_title',
)); ?>
<?php load_view('editor/input',array(
	'label'=>'SEO_Descr',
	'type'=>'text',
	'el'=>$article,
	'f'=>'seo_descr',
)); ?>
<?php load_view('editor/input',array(
	'label'=>'SEO_Kwds',
	'type'=>'text',
	'el'=>$article,
	'f'=>'seo_kwds',
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
				"insertdatetime media table contextmenu paste jbimages"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
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
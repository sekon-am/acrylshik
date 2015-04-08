<div role="tabpanel">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#article-home" aria-controls="article-home" role="tab" data-toggle="tab"><?php echo lang('Params'); ?></a></li>
		<li role="presentation"><a href="#article-txt" aria-controls="article-txt" role="tab" data-toggle="tab"><?php echo lang('Text'); ?></a></li>
		<?php if($product): ?>
		<li role="presentation"><a href="#article-imgs" aria-controls="article-imgs" role="tab" data-toggle="tab"><?php echo lang('Images'); ?></a></li>
		<?php endif; ?>
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
		<?php if($product): ?>
		<div role="tabpanel" class="tab-pane" id="article-imgs">
			<label><?php echo lang('Images'); ?></label>
    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="/manproduct/multiupload/<?php echo $product->id; ?>" method="POST" enctype="multipart/form-data" data-id="<?php echo $product->id; ?>">
		<input type="hidden" name="id" value="<?php echo $product->id; ?>">
        <!-- Redirect browsers with JavaScript disabled to the origin page --
        <noscript><input type="hidden" name="redirect" value="/manproduct/multiupload/<?php echo $product->id; ?>"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
    </form>
		</div>
		<?php endif; ?>
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
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="/js/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="/js/jquery.blueimp-gallery.min.js"></script>
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
<!-- The File Upload user interface plugin -->
<script src="/js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="/js/fileupload-main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="/js/cors/jquery.xdr-transport.js"></script>
<![endif]-->

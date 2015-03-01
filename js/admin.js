$(function(){
	tinymce.init({
		selector: "textarea",
		theme: "modern",
		plugins: [
			"advlist autolink lists link image charmap print preview hr anchor pagebreak",
			"searchreplace wordcount visualblocks visualchars code fullscreen",
			"insertdatetime media nonbreaking save table contextmenu directionality",
			"emoticons template paste textcolor colorpicker textpattern"
		],
		toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons",
		image_advtab: true,
		templates: [
			{title: 'Test template 1', content: 'Test 1'},
			{title: 'Test template 2', content: 'Test 2'}
		]
	});
	
	$('.td-edit').click(
		function () {
			var $this = $(this),
				url = $this.attr('data-link');
			$.get(url,function(data){
				$('body').append(data);
				$('.fade').fadeIn(200);
				$('[data-dismiss="modal"]').click(
					function(){
						var $fade = $(this).closest('.fade').fadeOut(200);
						setTimeout(function(){
							$fade.remove();
						},200);
					}
				);
			});
		}
	);
	$('.td-delete').click(
		function () {
			var $this = $(this),
				url = $this.attr('data-link');
			$.get(url,function(data){
				$this.closest('tr').remove();
			});
		}
	);
});
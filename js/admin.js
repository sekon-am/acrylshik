$(function(){
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
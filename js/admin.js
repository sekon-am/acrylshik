$(function (){
	$('.td-edit,.sidebar-menu [data-link]').click(
		function () {
			var $this = $(this),
				url = $this.attr('data-link');
			$.get(url,function(data){
				function closeModal(obj){
					var $fade = $(obj).closest('.fade').fadeOut(250);
					setTimeout(function(){
						$fade.remove();
					},250);
				}
				$('body').append(data);
				$('.fade').fadeIn(250);
				$('[data-dismiss="modal"]').click(
					function(){
						closeModal(this);
					}
				);
				$('.modal-footer .btn-primary').click(
					function(){
						var func_name = $('#table-name').val()+'_save';
						window[func_name](url.replace('edit','save').replace('add','save'));
						closeModal(this);
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
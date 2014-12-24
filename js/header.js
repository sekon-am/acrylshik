$(function(){
	var subMenuDelay = 400;
	$('[data-category-show]').click(function(){
		var catId = $(this).attr('data-category-show');
		$('.sub-menu').hide();
		$('.sub-menu[data-category="'+catId+'"]').slideDown(subMenuDelay);
		subMenuDelay = 0;
		return false;
	});
});
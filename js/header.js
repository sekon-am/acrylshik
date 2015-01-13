$(function(){
	var subMenuDelay = 300,
		$subMenu = null;
	$('[data-category-show]').click(function(){
		var catId = $(this).attr('data-category-show');
		if($subMenu){
			$subMenu.animate(
				{opacity:0},
				subMenuDelay,
				'swing',
				function(){
					$subMenu.hide();
					$subMenu = $('.sub-menu[data-category="'+catId+'"]')
						.show()
						.css({opacity:0})
						.animate(
							{opacity:1},
							subMenuDelay,
							'swing',
							function (){}
						);
				}
			);
		}else{
			$subMenu = $('.sub-menu[data-category="'+catId+'"]')
				.css({opacity:1})
				.slideDown(subMenuDelay);
		}
		return false;
	});
});
$(function(){
	var subMenuDelayEnd = 400,
		subMenuDelayStart = 0,
		subMenuDelayDelta = function (len) {
								return Math.round((subMenuDelayEnd-subMenuDelayStart)/len);
							}
		$subMenu = null;
	$('[data-category-show]').click(function(){
		var catId = $(this).attr('data-category-show');
		if($subMenu){
			var $subMenuElements = $subMenu.find('a'),
				subMenuDelta = subMenuDelayDelta($subMenuElements.length),
				subMenuDelay = subMenuDelayStart;
			
			$subMenuElements.each(
				function() {
					$(this)
						.css({opacity:1})
						.animate(
							{opacity:0},
							subMenuDelay
						);
					subMenuDelay+=subMenuDelta;
				}
			);
			$subMenu
				.delay(subMenuDelayEnd)
				.hide(0,
					function(){
						$subMenu = $('.sub-menu[data-category="'+catId+'"]').show();
						var $subMenuElements = $subMenu.find('a'),
							subMenuDelta = subMenuDelayDelta($subMenuElements.length),
							subMenuDelay = subMenuDelayEnd-subMenuDelta;
						$subMenuElements.css({opacity:0}).each(
							function() {
								$(this)
									.animate(
										{opacity:1},
										subMenuDelay
									);
								subMenuDelay-=subMenuDelta;
							}
						);
					}
				);
		}else{
			$subMenu = $('.sub-menu[data-category="'+catId+'"]')
				.css({opacity:1})
				.slideDown(300);
		}
		return false;
	});
});
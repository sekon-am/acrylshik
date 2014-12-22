$(
	function(){
		/*
		* Parallax (our works background)
		*/
		function our_works_parallax(){
			var $our_works = $('.our-works'),
				$window = $(window),
				img_height = 1500,
				scrollTop = $window.scrollTop(),
				elementTop = $our_works.offset().top,
				elementHeight = $our_works.height(),
				windowHeight = $window.height(),
				k = (img_height-elementHeight)/(windowHeight+elementHeight);
			if((scrollTop+windowHeight>elementTop) && (scrollTop<elementTop+elementHeight)){
				$our_works.css({'background-position':'50% '+k*(elementTop-windowHeight-scrollTop)+'px'});
			}
		}our_works_parallax();
		$(window).scroll(our_works_parallax).resize(our_works_parallax);
	}
);
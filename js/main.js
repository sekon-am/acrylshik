$(
	function(){
	
		/*Logo position if window width less then image width*/
		function makeLogoLeft(){
			var windowWidth = $(window).width(),
				marginLeft = 0;
			if(windowWidth<659) {
				marginLeft = (windowWidth-659)/2;
			}
		} makeLogoLeft();
		$(window).resize(makeLogoLeft);
		
		/*
		 * data-link attribute realization
		 */
		$("[data-link]").each(
			function () {
				var $this = $(this);
				$this.click(
					function () {
						window.location = $this.attr('data-link');
					}
				);
			}
		);
		
		var $imgs = $(".product .lshift, .product .rshift, .article-markup").find('img'),
			rand = Math.round(Math.random()*1000000);
		$imgs.each(function(){
			var $this = $(this)
				url = $this . attr('src'),
				ttl = $this . attr('alt'),
				flt = $this . css('float');
			$this
				.wrap( 
					$('<a></a>') 
						. attr('href', url) 
						. attr('title', ttl)
						. addClass('swipebox')
						. attr('rel', rand )
						. attr('style', $this.attr('style'))
				).attr('style','')
				.after(
					$('<div></div>')
						.addClass('swipebox-title')
						.html(ttl)
				).after(
					$('<div></div>')
						.addClass('swipebox-zoom')
				);
		});
		$( '.swipebox' ).swipebox( {
			useCSS : true, // false will force the use of jQuery for animations
			useSVG : true, // false to force the use of png for buttons
			initialIndexOnArray : 0, // which image index to init when a array is passed
			hideBarsDelay : 3000, // delay before hiding bars on desktop
			videoMaxWidth : 1140, // videos max width
			beforeOpen: function() {}, // called before opening
			afterOpen: null, // called after opening
			afterClose: function() {}, // called after closing
			loopAtEnd: true // true will return to the first image after the last image is reached
		} );
		
	}
);
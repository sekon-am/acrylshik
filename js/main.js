$(
	function(){
	
		/*Logo position if window width less then image width*/
		function makeLogoLeft(){
			var windowWidth = $(window).width(),
				marginLeft = 0;
			if(windowWidth<659) {
				marginLeft = (windowWidth-659)/2;
			}
//			$('#logo').css({'margin-left':marginLeft+'px'});
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
		
	}
);
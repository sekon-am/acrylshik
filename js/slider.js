$(
	function(){
		/* Slider */
		$.fn.getSlide = function (num) {
			var slides = $(this);
			return slides.eq( Math.abs(num % slides.length) );
		};
		var	slider = $('.slider'),
			slideNum = 0,
			effects = [
					'scale(1.5,1.5) rotate(7deg)',
					'scale(1.3,1.3) translate(10%,10%)',
					'scale(1.5,1.5) rotate(-7deg)',
					'scale(1.3,1.3) translate(-10%,-10%)',
				],
			effectIndex=0;
		var txts = $('.slider p.txt-element'),
			imgs = $('.slider img');
		for(var i=0;i<Math.min(imgs.length,txts.length);i++) {
			$('<div data-slide-num="'+i+'"><div class="animation-frame" style="background-image:url('+imgs.eq(i).attr('src')+');"></div></div>')
				.append(txts.eq(i))
				.addClass('slider-element')
				.appendTo(slider);
		}

		function initSliderControls() {
			var	imgSliderWidth = slider.width(),
				imgSliderHeight = slider.height();
				txtSliderHeight = $('.slider .txt-element').height();
			$('.button-left,.button-right').css({
				'top':((imgSliderHeight-txtSliderHeight-$('.button-left').height())/2)+'px',
			});
			$('.button-left').css({
				'left':'30px',
			});
			$('.button-right').css({
				'right':'30px',
			});
		} initSliderControls();
		$(window).resize(initSliderControls);

		function goSlide(num) {
			if(slideNum!=num){
				var side = (slideNum>num)?-1:1,
					slides = $('.slider-element');
				slides.css({'z-index':'1'}).getSlide(slideNum).css({'z-index':'2'});
				slides.getSlide(num)
					.css({
						'left':side*100+'%',
						'z-index':'3',
					})
					.find('.animation-frame')
					.css({
						'transition': 'transform 0s',
						'transform':'scale(1,1) translate(0,0) rotate(0deg)',
					});
				slides.getSlide(num)
					.animate(
						{
							'left':'0',
						},
						700,
						'swing',
						function(){
							$(this).find('.animation-frame').css({
								'transition':'transform 15s',
								'transform':effects[++effectIndex%effects.length],
							});
						}
					);
				slideNum = num;
			}
		}
		var siderDelay = 7000,
			slidesListed = 0;
		function sliderRotate(newSlideNum) {
			if(!slidesListed) {
				if(newSlideNum==undefined){
					newSlideNum=slideNum-1;
				}
				goSlide(newSlideNum);
				setTimeout(sliderRotate,siderDelay);
			}else{
				slidesListed--;
			}
		}sliderRotate();
		$('.button-left').click(
			function(){
				goSlide(slideNum+1);
				slidesListed++;
				setTimeout(sliderRotate,siderDelay);
			}
		);
		$('.button-right').click(
			function(){
				goSlide(slideNum-1);
				slidesListed++;
				setTimeout(sliderRotate,siderDelay);
			}
		);
	}
);
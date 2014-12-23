$(function(){
	jQuery.fn.aliment = function(timeout,callback) {
		var aliment = $(this),
			items = aliment.find('*'),
			moused = null,
			procWH = function(val){ return Math.round(val*3/4); },
			procOE = function(val){ return Math.round(val*7/8); },
			getAW  = function(val){ return aliment.width()-(items.length-1)*val };
		function initSize(){
			moused = null;
			var val = aliment.width()/items.length;
			items.height(procWH(val)).width(val);
		} initSize();
		$(window).resize(initSize);
		function animationStep(delta) {
			var itemWidth = 0;
			items.each(function(){
				if(this != moused){
					itemWidth=$(this).width()-delta;
					$(this).width(itemWidth);
				}
			});
			$(moused).width(getAW(itemWidth));
		}
		var time=0,
			TIME_PER_ACTION = 5,
			;
		function animate(delta) {
			if(time<=timeout) {
				animationStep(delta);
				time+=TIME_PER_ACTION;
				setTimeout(animate,TIME_PER_ACTION);
			}
		}
		items.mousemove(function(){
			if(!moused || moused != this) {
				moused = this;
				time=0;
				animate();
			}
		});
		aliment.mouseout(initSize);
	}
	$('.aliment').aliment(200);
});	
$(function(){
	$.fn.addWidth = function(delta,minWidth) {
		var val = $(this).width()+delta;
		val = (minWidth) ? Math.max(val,minWidth) : val;
		return $(this).width(val);
	}
	jQuery.fn.aliment = function(timeout) {
		var aliment = $(this),
			items = aliment.find('*'),
			inAliment = false,
			prev = null,
			self = null,
			TIME_PER_ACTION = 5,
			time = 0;
		function getStandardWidth() {
			return aliment.width()/items.length;
		}
		function getStandardHeight() {
			return Math.round(getStandardWidth()*3/4);
		}
		function getUnactiveWidth() {
			return Math.round(getStandardWidth()*7/8);
		}
		function getActiveWidth() {
			return aliment.width()-(items.length-1)*getUnactiveWidth();
		}
		function getUnactiveDelta() {
			return Math.round((getStandardWidth()-getUnactiveWidth())*TIME_PER_ACTION/timeout);
		}
		function initSize(){
			prev = null;
			self = null;
			items.height(getStandardHeight()).width(getStandardWidth());
		}
		initSize();
		$(window)
			.resize(initSize)
			.mousemove(function(event){
				if(
					aliment.offset().left<=event.pageX &&
					aliment.offset().top<=event.pageY &&
					event.pageX<=aliment.offset().left+aliment.width() &&
					event.pageY<=aliment.offset().top+aliment.height()
				){
					inAliment = true;
				}else{
					if(inAliment){
						items.animate({width:getStandardWidth()},timeout);
					}
					inAliment = false;
				}
			});
		
		function animateAllToOne() {
			if(time<timeout) {
				var width=0;
				items.each(function(){
					if(this != self){
						$(this).addWidth(-1*getUnactiveDelta(),getUnactiveWidth());
						width+=$(this).width(); 
					}
				});
				$(self).width(aliment.width()-width);
				time+=TIME_PER_ACTION;
				setTimeout(animateAllToOne,TIME_PER_ACTION);
			}
		}
		function animateOneToOne() {
			$(self).animate({width:getActiveWidth()},timeout);
			$(prev).animate({width:getUnactiveWidth()},timeout);
		}
		items.mousemove(function(){
			if(inAliment){
				if(!self){
					/*time = 0;
					self = this;
					animateAllToOne();*/
					var self = this;
					items.each(function(){
						if(this != self){
							$(this).animate();
						width+=$(this).width(); 
					}
				});
				}else if(self != this){
					prev = self;
					self = this;
					animateOneToOne();
				}
			}
			return true;
		});
		function outputWidth(){
				var width = 0;
				items.each(function(){
						width += $(this).width();
				});
				console.log(width,aliment.width());
		}
		return aliment;
	}
	$('.aliment').aliment(200);

});	
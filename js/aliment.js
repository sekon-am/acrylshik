$(function(){
	$.fn.addWidth = function(delta,minWidth) {
		var val = $(this).width()+delta;
		val = (minWidth) ? Math.max(val,minWidth) : val;
		return $(this).width(val);
	}
	jQuery.fn.aliment = function(timeout) {
		var aliment = $(this),
			items = aliment.find('> div');
		function getStandardWidth() {
			return Math.round(aliment.width()/items.length);
		}
		function getStandardHeight() {
			return Math.round(aliment.width()/items.length);
		}
		function getUnactiveWidth() {
			return Math.round(aliment.width()/items.length*7/8);
		}
		function getActiveWidth() {
			return aliment.width()-(items.length-1)*getUnactiveWidth();
		} 
		function getUnactiveDelta() {
			return Math.round((aliment.width()/(8*items.length))*TIME_PER_ACTION/timeout);
		}
		
		var	self = null,
			locked = false,
			inWorkingArea = false,
			TIME_PER_ACTION = Math.max(1,timeout/30),
			time = 0;
			
		function initSize(){
			self = null;
			items.height(getStandardHeight());
			items.slice(1).width(getStandardWidth());
			items.eq(0).width(aliment.width() - (items.length-1)*getStandardWidth());
			$('.icon-dark').css({marginTop:Math.round((getStandardHeight()-80)/2-15)});
		} initSize();
		
		function goOut() {
			if(self){
				locked = true;
				items.slice(1).animate(
					{width : getStandardWidth()},
					timeout,'linear');
				items.eq(0).animate(
					{width : aliment.width() - (items.length-1)*getStandardWidth()},
					timeout,'linear',
					function(){locked = false;});
			}
			self = null;
		}
		$(window)
			.resize(initSize)
			.mousemove(function(event){
				if(
					aliment.offset().left>event.pageX ||
					aliment.offset().top>event.pageY ||
					event.pageX>aliment.offset().left+aliment.width() ||
					event.pageY>aliment.offset().top+aliment.height()
				){
					inWorkingArea = false;
					if(!locked){
						goOut();
					}
				}else{
					inWorkingArea = true;
				}
			});
		
		items.mousemove(function(){
			if(!locked && inWorkingArea){
				if(!self){
					locked = true;
					self = this;
					time = 0;
					animateAllToOne();
				}else if(self != this){
					locked = true;
					self = this;
					items.each(function(){
						if(this != self){
							$(this).animate({width:getUnactiveWidth()},timeout);
						}
					});
					$(this).animate({width:getActiveWidth()},timeout,function(){locked = false;});
				}
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
			}else{
				locked = false;
			}
		}
		
		
		
		return aliment;
	}
	$('.aliment').aliment(250);

});	
$(function(){
	jQuery.fn.aliment = function(timeout) {
		var aliment = $(this),
			items = aliment.find('*'),
			self = null,
			locked = false;
		function getStandardWidth() {
			return aliment.width()/items.length;
		}
		function getStandardHeight() {
			return Math.round(getStandardWidth()*3/4);
		}
		function getUnactiveWidth() {
			return Math.round(getStandardWidth()*7/8);
		}
		function initSize(){
			self = null;
			locked = false;
			items.height(getStandardHeight()).width(getStandardWidth());
		}
		initSize();
		$(window)
			.resize(initSize)
			/*.mousemove(function(event){
				if(
					event.pageX>=aliment.offset().left &&
					event.pageY>=aliment.offset().top &&
					event.pageX<=aliment.offset().left+aliment.width() &&
					event.pageY<=aliment.offset().top+aliment.height()
				){}else{
					items.animate({width:getStandardWidth()},timeout,'linear');
					self = null;
					console.log(1);
				}
			})*/;
		
		items.mousemove(function(){
			if(this != self && !locked){
				locked = true;
				self = this;
				var width = 0;
				items.each(function(){
					if(this != self){
						$(this).animate({width:getUnactiveWidth()},timeout,'linear');
						width+=getUnactiveWidth(); 
					}
				});
				$(this).animate({width:aliment.width()-width},timeout,'linear',function(){locked=false;});
			}
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
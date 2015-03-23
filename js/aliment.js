$(function(){
	jQuery.fn.addWidth = function(delta,minWidth) {
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
		
		jQuery.fn.hoverOn = function() {
			var $this = $(this);
			$this.find('.shirma').fadeOut(timeout);
			$this.find('.icon-light-box')
		//		.delay(timeout)
				.animate({
					top:'0px',
				},timeout);
			$this.find('.aliment-info')
//				.delay(timeout)
				.animate({
					bottom:'0px',
				},timeout);
		}
		jQuery.fn.hoverOff = function() {
			var $this = $(this),
				$iconBox = $this.find('.icon-light-box'),
				$alimentInfo = $this.find('.aliment-info');
			$this.find('.shirma')/*.delay(timeout)*/.fadeIn(timeout);
			$iconBox.animate({top:'-'+$iconBox.height()+'px'},timeout);
			$alimentInfo.animate({bottom:'-'+$alimentInfo.height()+'px'},timeout);
		}
		
		var	self = null,
			locked = false,
			inWorkingArea = false;
			TIME_PER_ACTION = Math.max(1,timeout/30);
			
		function initSize(){
			self = null;
			items.height(getStandardHeight());
			items.slice(1).width(getStandardWidth());
			items.eq(0).width(aliment.width() - (items.length-1)*getStandardWidth());
			
			$('.icon-dark').css({marginTop:Math.round((getStandardHeight()-80)/2-15)});
			var $iconBox = $('.icon-light-box'),
				$alimentInfo = $('.aliment-info');
			$iconBox.css({
				top:'-'+$iconBox.height()+'px',
				left:Math.round((getActiveWidth()-$iconBox.width())/2),
			});
			$alimentInfo
				.height(Math.round($alimentInfo.width()*9/28))
				.css({
					bottom:'-'+$alimentInfo.height()+'px'
				});
		} initSize();
		
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
						if(self){
							locked = true;
							$(self).hoverOff();
							items.slice(1).animate(
								{width : getStandardWidth()},
								timeout,'linear');
							items.eq(0).animate(
								{width : aliment.width() - (items.length-1)*getStandardWidth()-1},
								timeout,'linear',
								function(){
									locked = false;
									$(this).css({
										width : aliment.width() - (items.length-1)*getStandardWidth()
									});
								}
							);
						}
						self = null;
					}
				}else{
					inWorkingArea = true;
				}
			});
		
		function newSelf(nSelf) {
			locked = true;
			$(self).hoverOff();
			self=nSelf;
			$(self).hoverOn();
		}
		var time = 0;
		items.mousemove(function(){
			if(!locked && inWorkingArea){
				if(!self){
					newSelf(this);
					time = 0;
					animateAllToOne();
				}else if(self != this){
					newSelf(this);
					items.each(function(){
						if(this != self){
							$(this).animate({width:getUnactiveWidth()},timeout);
						}
					});
					$(this)/*.delay(timeout)*/.animate(
						{width:getActiveWidth()-1},
						timeout,
						function(){
							locked = false;
							$(this).css(
								{width:getActiveWidth()}
							);
						}
					);
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
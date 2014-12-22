$(
	function(){
		/*
		 * product images
		 */
		var PRODUCT_BALLS = [
								{
									'radius':140,
									'left':20,
									'top':0
								},
								{
									'radius':70,
									'left':150,
									'top':170
								},
								{
									'radius':50,
									'left':40,
									'top':210
								},
							];
							
				function getParamsByNum(num,z_index) {
					if(0<=num && num<PRODUCT_BALLS.length) {
						return {height:2*PRODUCT_BALLS[num].radius+'px',
								width:2*PRODUCT_BALLS[num].radius+'px',
								borderTopLeftRadius:PRODUCT_BALLS[num].radius+'px',
								borderTopRightRadius:PRODUCT_BALLS[num].radius+'px',
								borderBottomLeftRadius:PRODUCT_BALLS[num].radius+'px',
								borderBottomRightRadius:PRODUCT_BALLS[num].radius+'px',
								WebkitBorderTopLeftRadius:PRODUCT_BALLS[num].radius+'px',
								WebkitBorderTopRightRadius:PRODUCT_BALLS[num].radius+'px',
								WebkitBorderBottomLeftRadius:PRODUCT_BALLS[num].radius+'px',
								WebkitBorderBottomRightRadius:PRODUCT_BALLS[num].radius+'px',
								MozBorderRadius:PRODUCT_BALLS[num].radius+'px',
								top:PRODUCT_BALLS[num].top+'px',
								left:PRODUCT_BALLS[num].left+'px',
								zIndex:z_index};
					}
					return null;
				}
				$.fn.rotate = function (step) {
					var $this = $(this),
						pib = $this.closest('.product-img-box'),
						num = pib.attr('data-num'),
						images = pib.find('.product-img'),
						len = Math.min(images.length,PRODUCT_BALLS.length);
					if(step){
						for(var i=0;i<len;i++){
							images.eq(i)
								.css(getParamsByNum((rotator[num]+i)%len,(rotator[num]+i+step)%len+1))
								.animate(getParamsByNum((rotator[num]+i+step)%len),500);
						}
						rotator[num] += step;
					}
					images.unbind('click');
					if(images.length>0){
						images.eq(len-1-rotator[num]%len).click(
							function(){
								$(this).rotate(1);
							});
						if(images.length>1){
							images.eq(len-1-(rotator[num]+1)%len).click(
								function(){
									$(this).rotate(-1);
								});
						}
					}
				}
				
				
		var rotator = [],
			num = 0;
		$('.product-img-box').each(
			function () {
				var $this = $(this),
					images = $this.find('.product-img');
				rotator.push($('.product-img-box').length*10000);
				$this.attr('data-num',num++);
				for(var i=0;i<Math.min(images.length,PRODUCT_BALLS.length);i++) {
					images.eq(i).css(getParamsByNum(i,i+1));
				}
				images.eq(0).rotate(1);
			}
		);
	}
);
function product_save(url) {
						var newData = {
								name:$('#NameId').val(),
								category_id:$('#CategoryId').val(),
								txt:tinyMCE.get('Text'+$('#Rand').val()+'Id').getContent(),
								id:$('#Id').val(),
								count:$('#Count').val()
							};
						$.ajax({
							type: "POST",
							url: url,
							data: newData
						}).done(
							function(resp){
								if(resp['code']=='OK'){
									if(newData.id){
										$('[data-product-id="'+newData.id+'"] a.title').html(newData.name);
									}else{
										$('.data-product').append(resp['tr']);
									}
								}
							}
						);
}
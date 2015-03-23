function product_save(url) {
						var newData = {
								name:$('#NameId').val(),
								category_id:$('#CategoryId').val(),
								txt:tinyMCE.get('Text'+$('#Rand').val()+'Id').getContent(),
								seo_title:$('#SEO_TitleId').val(),
								seo_descr:$('#SEO_DescrId').val(),
								seo_kwds:$('#SEO_KwdsId').val(),
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
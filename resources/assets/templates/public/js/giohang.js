$(document).ready(function(){
	$('.giohang').click(function(event) {
		event.preventDefault();
		var id = $(this).attr('id');
		var price = $(this).parent().find('#gia').text();
		var name = $(this).parent().parent().find('#ten').text();
		var qty = 1;
		var img = $(this).parent().parent().parent().find('.hinhanh').attr('value');
		$.ajax({ 
					url : '/mua-hang/'+id,
					type: 'GET', 
					cache: false,
					data: {
						id:id,
						price:price,
						name:name,
						qty:qty,
						img:img,
					},
					success: function(data) {
						$('.loadGH').html(data);
						smoke.alert("Thêm sản phẩm thành công vào giỏ hàng") ;
						
					}
				});

    });
});

$(document).ready(function(){
	$('.update').click(function(event) {
		event.preventDefault();
		var rowid = $(this).attr('id');
		var qty = $(this).parent().parent().find('.soluong').val();
		var token = $("input[name='_token']").val();

		$.ajax({
			url: '/cap-nhat-san-pham/'+rowid+'/'+qty,
			type: 'GET',
			cache: false,
			data:{
				_token:token,
				id:rowid,
				qty:qty,
			},
			success: function(data){
				window.location = '/san-pham/gio-hang'
			}
		});

    });
});

$(document).ready(function(){
	$('.timkiem1').click(function() {
		var id = $(this).attr('id');

		$.ajax({
			url: '/san-pham-tim-kiem/'+id,
			type: 'GET',
			cache: false,
			data:{
				id:id,
			},
			success: function(data){
				$('.loctimkiem').html(data);
				$('.giohang').click(function(event) {
					event.preventDefault();
					var id = $(this).attr('id');
					var price = $(this).parent().find('#gia').text();
					var name = $(this).parent().parent().find('#ten').text();
					var qty = 1;
					var img = $(this).parent().parent().parent().find('.hinhanh').attr('value');
					$.ajax({ 
								url : '/mua-hang/'+id,
								type: 'GET', 
								cache: false,
								data: {
									id:id,
									price:price,
									name:name,
									qty:qty,
									img:img,
								},
								success: function(data) {
									$('.loadGH').html(data);
									smoke.alert("Thêm sản phẩm thành công vào giỏ hàng") ;
									
								}
							});

			    });
			}
		});

    });
});

$(document).ready(function(){
	$('.tkhsx').click(function() {
		var id = $(this).attr('id');
		$.ajax({
			url: '/tim-kiem-hang-san-xuat/'+id,
			type: 'GET',
			cache: false,
			data:{
				id:id,
			},
			success: function(data){
				$('.loctimkiem').html(data);
				$('.giohang').click(function(event) {
					event.preventDefault();
					var id = $(this).attr('id');
					var price = $(this).parent().find('#gia').text();
					var name = $(this).parent().parent().find('#ten').text();
					var qty = 1;
					var img = $(this).parent().parent().parent().find('.hinhanh').attr('value');
					$.ajax({ 
								url : '/mua-hang/'+id,
								type: 'GET', 
								cache: false,
								data: {
									id:id,
									price:price,
									name:name,
									qty:qty,
									img:img,
								},
								success: function(data) {
									$('.loadGH').html(data);
									smoke.alert("Thêm sản phẩm thành công vào giỏ hàng") ;
									
								}
							});

			    });
			}
		});

    });
});













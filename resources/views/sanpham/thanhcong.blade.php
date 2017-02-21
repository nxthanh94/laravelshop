@extends('templates.public.template')

@section('main')


<div class="prdt"> 
	<div class="container">
		<div class="prdt-top">
			<div class="col-md-9 prdt-left" style="font-size: 18px;">
				
				<h2 style="color: red;">Đặt hàng của bạn đã được xử lý!</h2><br />
				<div>
					<b><i><p>Xin chúc mừng! Đơn hàng của bạn đã được đặt thành công! </p>
					<p>Chúng tôi sẽ liên lạc trong thời gian sớm nhất!</p></i></b>
				</div>
				<a title="" href="/" class="btn btn-default">Quay lại</a>
			</div>	
			
			@include('sanpham.right_bar')	
			
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection
@section('title')
Thành công
@endsection
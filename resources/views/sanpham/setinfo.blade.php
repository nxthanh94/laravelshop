@extends('templates.public.template')

@section('main')
<div class="breadcrumbs">
	<div class="container">
		<div class="breadcrumbs-main">
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li class="active">Thông tin của bạn</li>
			</ol>
		</div>
	</div>
</div>

<div class="prdt"> 
	<div class="container">
		<div class="prdt-top">
			<div class="col-md-9 prdt-left">
			<h2><center><b>Thông tin của bạn</b></center></h2>
		<div class="dangnhap">
		<form action="{{ route('public.sanpham.thongtinthanhtoan') }}" method="get">
            {{ csrf_field() }}
			<div class="col-content" style="font-size: 18px;">
				<p>
					Họ và tên:
					<span>(*)</span>
					<br>
					<input class="form-control" type="text" required="" value="" name="name">
				</p>
				<p>
					Số phone:
					<span>(*)</span>
					<br>
					<input class="form-control" type="text" required="" value="" name="phone">
				</p>
				<p>
					Email:
					<span>(*)</span>
					<br>
					<input class="form-control" type="email" required="" value="" name="email">
				</p>
				<p>
					Địa chỉ:
					<span>(*)</span>
					<br>
					<input class="form-control" type="text" required="" value="" name="diachi">
				</p>
				<p>
					<a title="" class="btn btn-default" href="javaScript:window.history.back();">Quay lại</a>
					<input type="submit" class="btn btn-default" value="Tiếp tục" name="submit">
				</p>
			</div>
		</form>
			<div class="clear"></div>
		</div>
			</div>	
			@include('sanpham.right_bar')	
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection
@section('title')
Thông tin thanh toán
@endsection
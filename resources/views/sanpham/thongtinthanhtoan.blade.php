@extends('templates.public.template')

@section('main')
<div class="breadcrumbs">
	<div class="container">
		<div class="breadcrumbs-main">
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li class="active">Thông tin thanh toán</li>
			</ol>
		</div>
	</div>
</div>
<div class="prdt"> 
	<div class="container">
		<div class="prdt-top">
			<div class="col-md-9 prdt-left">
			<form role="form" action="{{ route('public.sanpham.xacnhanthanhtoan') }}" method="post">
			{{ csrf_field() }}
			<div class="left_content cthongtin">
				<h2><center>Thông tin thanh toán</center></h2>

				<?php
					$hoten = $arUser['name'];
					$diachi = $arUser['diachi'];
					$email = $arUser['email'];
					$phone = $arUser['dienthoai'];
				?>
				<br/ > <br />
				<div class="feat_prod_box_details" style="font-size: 18px;">
			       <p class="bold" style="font-size: 20px;color: blue;">Địa chỉ giao hàng</p>
			       <div class="form-group">
			       		<table class="table table-bordered table-striped" width="100%">
			       			<tr>
			       				<td width="20%" class="tdtitle">Họ và tên: </td>
			       				<td>
			       					<b><i>{{$hoten}}</i></b>
			       					<input type="hidden" name="hoten" value="{{$hoten}}" />
								</td>
			       			</tr>
			       			<tr>
			       				<td width="20%" class="tdtitle">Địa chỉ: </td>
			       				<td>
			       					<b><i>{{$diachi}}</i></b>
			       					<input type="hidden" name="diachi" value="{{$diachi}}" />
			       					@if(Auth::check() == "")
			       					<input type="hidden" name="email" value="{{$email}}" />
			       					<input type="hidden" name="phone" value="{{$phone}}" />
			       					@endif
			       				</td>
			       			</tr>
			       		</table>
			       </div>
			       <br />
			       <p class="bold" style="font-size: 20px;color: blue;">Phương thức thanh toán</p>
			       @foreach($arThanhtoan as $key => $TT)
			       <?php
			       		$id = $TT['id'];
			       		$loaithanhtoan = $TT['loaithanhtoan'];
			       ?>
			       <div class="content">
       		       		<input type="radio" value="{{ $id }}" name="thanhtoan" checked="checked"> &nbsp;{{ $loaithanhtoan }}<br>
			       	</div>
			       	@endforeach
			       	<br /> <br />
			       <p class="bold" style="color: blue;">Thông tin thêm</p>
			       	<textarea class="form-control"  rows="3" name="thongtinthem"></textarea>
				</div>
				
				<div class="clear"></div>
				<br/>
				<div >
					<a title="" href="javaScript:window.history.back();" class="btn btn-default">Quay lại</a> 
					<input class="btn btn-default" type="submit" value="Tiếp tục" name="submit">
				</div>
			</div>
			</form>

				
			

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
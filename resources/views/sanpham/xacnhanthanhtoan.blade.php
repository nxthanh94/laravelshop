@extends('templates.public.template')

@section('main')


<div class="prdt"> 
	<div class="container">
		<div class="prdt-top">
			<h2><center><b>Xác nhận thanh toán</b></center></h2>
			<div class="col-md-9 prdt-left" style="font-size: 18px;">
			<form action="{{ route('public.sanpham.thanhcong') }}" method="post">
			{{ csrf_field() }}	
				<h3 style="color: blue;">Địa chỉ giao hàng</h3>
				<table class="table table-bordered table-striped">
					<tr>
						<td>Họ và tên</td>
						<td>
							<b><i>{{ $name }}</i></b>
							<input type="hidden" name="hoten" value="{{$name}}" />
						</td>
					</tr>
					<tr>
						<td>Địa chỉ</td>
						<td>
	       					<b><i>{{$diachi}}</i></b>
	       					<input type="hidden" name="diachi" value="{{$diachi}}" />
	       					@if(Auth::check() == "")
	       					<input type="hidden" name="email" value="{{$email}}" />
	       					<input type="hidden" name="phone" value="{{$sodienthoai}}" />
	       					@endif
	       				</td>
					</tr>
				</table>
				<br />
				<div class="feat_prod_box_details">
					<h3 style="color: blue;">Sản phẩm mua</h3>
				    <table class="table table-bordered table-striped">
				      <tr class="cart_title" >
				        <td>Hình ảnh</td>
				        <td>Tên sản phẩm</td>
				        <td>Giá</td>
				        <td>Số lượng</td>
				        <td>Tổng tiền</td>
				      </tr>
				      	
				      	@foreach($content as $key => $row)
				        <tr valign="middle">
				        <td>
				        	<a href="{{ route('public.sanpham.detail',['slug'=> $row->name, 'id' => $row->id ])}}">
				        		<img border="0" src="<?php echo  $row->options->img  ?>" alt="" style="width: 60px;height: 60px;">
				        	</a>
				        </td>
				        <td align="left">
							<a title="" href="{{ route('public.sanpham.detail',['slug'=> $row->name, 'id' => $row->id ])}}"><?php echo $row->name; ?></a>
						</td>
				        <td align="right"><?php echo number_format($row->price,0,'','.'); ?> VNĐ</td>
				        <td align="center"><?php echo $row->qty; ?></td>
				        <td align="right"><?php echo number_format($row->price*$row->qty,0,'','.'); ?> VNĐ</td>
				      	</tr>
				      	@endforeach
				      	
				             
				        <tr class="thanhtien">
				        <td colspan="4" class="cart_total"><span class="red">Thành tiền:</span></td>
				        <td align="right"><b><i><?php echo Cart::subtotal(0,'','.'); ?> VNĐ</i></b></td>
				      </tr>
				    </table>
				</div>

<h3 style="color: blue;">Phương thức thanh toán:</h3>
<div class="">
<p style="color: red;">
	{{ $tentt }}
	<input type="hidden" value="{{ $thanhtoan }}"  name="thanhtoan"/>
</p>
@if($tentt == 'ATM')

	<br /><b>HƯỚNG DẪN THANH TOÁN</b><br />

	1. Thanh toán bằng hình thức chuyển khoản qua ngân hàng.
	Hình thức này áp dụng cho các khách hàng ở vùng ngoại thành Đà Nẵng, các tỉnh và thành phố khác trên toàn quốc. Ngay sau khi xác nhận đơn hàng, Qúy khách vui lòng chuyển khoản vào một trong những tài khoản sau, để chúng tôi sớm có thể chuyển hàng cho Qúy khách.<br/>
	
	2. NGÂN HÀNG NÔNG NGHIỆP VÀ PHÁT TRIỀN NÔNG THÔN<br/>
	Chủ Tài Khoản : <b><i>Nguyễn Xuân Thanh</i></b><br/>
	Số tài khoản : <b><i>3803205069636</i></b><br/>
	Địa chỉ: Tân Ninh - Quảng Ninh - Quảng Bình<br/>
	
@endif      
</div>
<br />
	@if($thongtinthem == '')
	@else
	<div class="" >
   			<h3 style="color: blue;">Thông tin thêm</h3>
		   <div>
		   		{{ $thongtinthem }}
		   		<input type="hidden" name="thongtinthem" value="{{ $thongtinthem }}" />    
		   	</div>
	</div>
	@endif
<br />
<div>
	<a title="" href="javaScript:window.history.back();" class="btn btn-default">Quay lại</a>
	@if($idtt == 1) 
	<a class="btn btn-default" href="https://www.nganluong.vn/button_payment.php?receiver=nxthanh94@gmail.com&product_name=<?php echo $row->name; ?>&price=<?php echo $row->price; ?>&return_url={{ route('public.sanpham.thanhcong') }}&comments={{ $thongtinthem }}">Thanh toán</a>
	@else
	<input class="btn btn-default" type="submit" value="Thanh toán" name="submit">
	@endif
</div>
</form>
</div>

			</div>	
			
			@include('sanpham.right_bar')	
			
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection
@section('title')
Xác nhận thanh toán
@endsection
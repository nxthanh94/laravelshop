@extends('templates.public.template')

@section('main')
<div class="breadcrumbs">
	<div class="container">
		<div class="breadcrumbs-main">
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li class="active">Giỏ hàng</li>
			</ol>
		</div>
	</div>
</div>
<br /> <br /> <br /> <br/>
@if(Cart::count() == "")
	<?php echo '<center><h3 style="color:red">Giỏ hàng hiện đang rỗng</h3></center>' ?><br /> <br /> <br /> <br/>
@else
<div class="container">
<div class="ckeck-top heading">
		<h3>Giỏ hàng của bạn</h3>
	</div>
	<div class="ckeckout-top updateshop">
	<div class="cart-items">
	 <h4>Sản phẩm (<?php echo Cart::count(); ?>)</h4><br /> <br/>
	<table id="cart" class="table table-hover table-condensed">
		<thead>
			<tr>
				<th style="width:32%">Sản phẩm</th>
				<th style="width:25%">Giá</th>
				<th style="width:8%">Số lượng</th>
				<th style="width:25%" class="text-center">Tổng tiền</th>
				<th style="width:10%"></th>
			</tr>
		</thead>
		<tbody>
		
		@foreach($content as $key => $row)
			<tr>
				<td data-th="Product">
					<div class="row">
						<div class="col-sm-2 hidden-xs">
							<img src="<?php echo  $row->options->img  ?>" alt="..." class="img-responsive"/>
						</div>
						<div class="col-sm-10">
							<h4 class="nomargin"><?php echo $row->name; ?></h4>
						</div>
					</div>
				</td>
				<form method="get" action="" style="display: inline;">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<td data-th="Price" style="padding-top: 20px;"><?php echo number_format($row->price,0,'','.'); ?> VNĐ</td>
				<td data-th="Quantity" style="padding-top: 10px;">
					<input type="number" name="pty" class="form-control text-center soluong" value="<?php echo $row->qty ?>">
				</td>
				<td data-th="Subtotal" style="padding-top: 20px;" class="text-center "><?php echo number_format($row->price*$row->qty,0,'','.'); ?> VNĐ</td>
				<td class="actions" data-th="" style="padding-top: 10px;">
					<a href="#" class="update" id="<?php echo $row->rowId; ?>">
						<button class="btn btn-info btn-sm ">
							<i class="fa fa-refresh "></i>
						</button>
					</a>
				</form>
					<a href="{{ route('public.sanpham.xoasanpham',['slug' => $row->rowId ]) }}" class="xoasp" id="<?php echo $row->rowId; ?>">
						<button  class="btn btn-danger btn-sm" >
							<i class="fa fa-trash-o"></i>
						</button>	
					</a>							
				</td>
			</tr>
		@endforeach
		
		</tbody>

		<tfoot>
			<tr class="visible-xs">
				<td class="text-center"><strong>Thành tiền <?php echo Cart::subtotal(0,'','.'); ?> VNĐ</strong></td>
			</tr>
			<tr>
				<td><a href="/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Mua tiếp</a></td>
				<td colspan="2" class="hidden-xs"></td>
				<td class="hidden-xs text-center" style="padding-top: 15px;">
					<strong style="color: red" >Thành tiền:  <?php echo Cart::subtotal(0,'','.'); ?> VNĐ</strong>
				</td>
				@if(Auth::check() == "")
				<td><a href="{{route('public.auth.login')}}" class="btn btn-success btn-block ">Thanh toán <i class="fa fa-angle-right"></i></a></td>
				@else
				<td><a href="{{route('public.sanpham.thongtinthanhtoan')}}" class="btn btn-success btn-block ">Thanh toán <i class="fa fa-angle-right"></i></a></td>
				@endif
			</tr>
		</tfoot>
</table>
</div>
<br /> <br/><br /> <br/>
@endif
@endsection
@section('title')
Giỏ hàng
@endsection
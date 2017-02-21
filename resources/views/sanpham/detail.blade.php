@extends('templates.public.template')

@section('main')
<div class="breadcrumbs">
	<div class="container">
		<div class="breadcrumbs-main">
			<ol class="breadcrumb">
				<li><a href="/">Trang chủ</a></li>
				<li class="active">Chi tiết</li>
			</ol>
		</div>
	</div>
</div>
<!--end-breadcrumbs-->
<!--start-single-->
<?php
	$id = $arNews['id'];
	$name = $arNews['name'];
	$gia = $arNews['gia'];
	$gia1 = number_format($gia,0,'','.');
	$hinhanh = $arNews['hinhanh'];
	$urlPic = asset("storage/app/files/{$hinhanh}");
	$mota = $arNews['mota'];
	$kieudang = $arNews['kieudang'];
	$vo = $arNews['vo'];
	$day = $arNews['day'];
	$matkinh = $arNews['matkinh'];
	$duongkinh = $arNews['duongkinh'];
	$dochiunuoc = $arNews['dochiunuoc'];
	$nameSeo = str_slug($name);
	$url = route('public.sanpham.muahang',['id' => $id]);
?>	
<div class="single contact">
	<div class="container">
		<div class="single-main">
			<div class="col-md-9 single-main-left loctimkiem">
			<div class="sngl-top">
				<div class="col-md-5 single-top-left">	
					<div class="flexslider">
						  <ul class="slides">
							<li data-thumb="{{ $urlPic }}">
								<div class="thumb-image"> <img src="{{ $urlPic }}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
							</li>
						  </ul>
					</div>
					<!-- FlexSlider -->
					<script src="{{ $url_public }}/js/imagezoom.js"></script>
					<script defer src="{{ $url_public }}/js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="{{ $url_public }}/css/flexslider.css" type="text/css" media="screen" />

					<script>
					
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
				</div>
				
				<div class="col-md-7 single-top-right">
					<div class="single-para simpleCart_shelfItem">
					<h2>{{ $name }}</h2>
						<div class="star-on">
							<ul class="star-footer">
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
								</ul>
							<div class="review">
								<a href="#"> 1 customer review </a>
								
							</div>
						<div class="clearfix"> </div>
						</div>
						
						<h5 class="item_price">{{ $gia1 }} VNĐ</h5>
						<p>{{ $mota }}</p>
						
						<ul class="tag-men">
							<li><span>Kiểu dáng: </span>
							<span class="women1">{{ $kieudang }}</span></li>
							<li><span>Hãng &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </span>
							<span class="women1">{{ $tenhsx }}</span></li>
						</ul>
							<a href="{{ $url }}" class="add-cart item_add">ADD TO CART</a>
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="tabs">
				<ul class="menu_drop">
			<li class="item1"><a href="javascript: void(0)"><img src="{{ $url_public }}/images/arrow.png" alt="">Thông tin chi tiết</a>
				<ul>
					<table>
					<li class="subitem1">
						<a href="javascript: void(0)">Loại vỏ: {{ $vo }}</a>
					</li>
					<li class="subitem1">
						<a href="javascript: void(0)">Chất liệu dây: {{ $day }}</a>
					</li>
					<li class="subitem1">
						<a href="javascript: void(0)">Mặt kính: {{ $matkinh }}</a>
					</li>
					<li class="subitem1">
						<a href="javascript: void(0)">Đường kính: {{ $duongkinh }}</a>
					</li>
					<li class="subitem1">
						<a href="javascript: void(0)">Độ chịu nước: {{ $dochiunuoc }}</a>
					</li>
					</table>
				</ul>
			</li>
			
 		</ul>
			</div>
			<div class="latestproducts">
				<div class="product-one">
				@foreach($sPhamlienquan as $key => $SP)
					<?php
						$id_lq = $SP['id'];
						$id_loaisp = $SP['id_loaisp'];
						$name_lq = $SP['name'];
						$gia_lq = $SP['gia'];
						$gia_1_lq = number_format($gia_lq,0,'','.');
						$hinhanh_lq = $SP['hinhanh'];
						$picUrl_lq = asset("storage/app/files/{$hinhanh_lq}");
						$nameSeo_lq = str_slug($name_lq);
						$url_lq = route('public.sanpham.detail',['slug' => $nameSeo_lq,'id' => $id_lq]);
					?>
					<div class="col-md-4 product-left p-left" style="margin-bottom: 15px;">
						<div class="product-main simpleCart_shelfItem">
							<a href="{{ $url_lq }}" class="mask"><img  class="hinhanh img-responsive zoom-img" src="{{ $picUrl_lq }}" alt="" value="{{$hinhanh_lq}}" /></a>
							<div class="product-bottom"  style="white-space: nowrap;overflow: hidden;" >
								<h3 id="ten">{{ $name_lq }}</h3>
								<h4>
									<a class="giohang" href="javascript:void(0);" id="{{ $id}}"><i></i></a>
									<!-- <span id="hinhanh" value="{{$hinhanh}}">{{$hinhanh}}</span> -->
									<span id="gia" style="display: none;" class=" item_price">{{ $gia_lq }}</span>
									<span class=" item_price">{{ $gia_1_lq }} VNĐ</span>
								</h4>
							</div>
							@if($id_loaisp == 1)
							<div class="srch">
								<span>Mới</span>
							</div>
							@elseif($id_loaisp == 2)
							<div class="srch">
								<span>Hot</span>
							</div>
							@else
							<div class="srch">
								<span>-50%</span>
							</div>
							@endif
						</div> 
					</div>
				@endforeach	
					
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
			
		@include('sanpham.right_bar')	
			
		<div class="clearfix"> </div>
		</div>
	</div>
</div>
@endsection
@section('title')
{{ $name}} | ThanhWatches
@endsection
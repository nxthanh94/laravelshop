@extends('templates.public.template')

@section('main')
<div class="breadcrumbs">
	<div class="container">
		<div class="breadcrumbs-main">
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li class="active">Sản phẩm</li>
			</ol>
		</div>
	</div>
</div>

<div class="prdt" id="cks_div" > 
	<div class="container">
		<div class="prdt-top">
			<div class="col-md-9 prdt-left loctimkiem">
				<div class="product-one">
				
				@foreach($arItems as $key => $arItem)
					<?php
						$id = $arItem['id'];
						$id_loaisp = $arItem['id_loaisp'];
						$name = $arItem['name'];
						$gia = $arItem['gia'];
						$gia_1 = number_format($gia,0,'','.');
						$hinhanh = $arItem['hinhanh'];
						$picUrl = asset("storage/app/files/{$hinhanh}");
						$nameSeo = str_slug($name);
						$url = route('public.sanpham.detail',['slug' => $nameSeo,'id' => $id]);
						$url1 = route('public.sanpham.muahang',['id' => $id]);
					?>
					<div class="col-md-4 product-left p-left" style="margin-bottom: 1em;">
						<div class="product-main simpleCart_shelfItem">
							<a href="{{ $url }}" class="mask"><img  class="hinhanh img-responsive zoom-img" src="{{ $picUrl }}" alt="" value="{{$hinhanh}}" /></a>
							<div class="product-bottom"  style="white-space: nowrap;overflow: hidden;" >
								<h3 id="ten">{{ $name }}</h3>
								<h4>
									<a class="giohang" href="javascript:void(0);" id="{{ $id}}"><i></i></a>
									<!-- <span id="hinhanh" value="{{$hinhanh}}">{{$hinhanh}}</span> -->
									<span id="gia" style="display: none;" class=" item_price">{{ $gia}}</span>
									<span class=" item_price">{{ $gia_1 }} VNĐ</span>
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

				
			
{{$arItems->links()}}

			</div>	
			
			@include('sanpham.right_bar')	
			
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>

@endsection
@section('title')
Sản phẩm
@endsection
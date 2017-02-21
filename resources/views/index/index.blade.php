@extends('templates.public.template')

@section('main')
<div class="bnr" id="home">
	<div  id="top" class="callbacks_container">
		<ul class="rslides" id="slider4">
		    <li>
				<img src="{{ $url_public }}/images/bnr-1.jpg" alt=""/>
			</li>
			<li>
				<img src="{{ $url_public }}/images/bnr-2.jpg" alt=""/>
			</li>
			<li>
				<img src="{{ $url_public }}/images/bnr-3.jpg" alt=""/>
			</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
<!--banner-ends--> 
<!--Slider-Starts-Here-->
			<script src="{{ $url_public }}/js/responsiveslides.min.js"></script>
		 <script>
		    // You can also use "$(window).load(function() {"
		    $(function () {
		      // Slideshow 4
		      $("#slider4").responsiveSlides({
		        auto: true,
		        pager: true,
		        nav: true,
		        speed: 500,
		        namespace: "callbacks",
		        before: function () {
		          $('.events').append("<li>before event fired.</li>");
		        },
		        after: function () {
		          $('.events').append("<li>after event fired.</li>");
		        }
		      });
		
		    });
		  </script>
		<!--End-slider-script-->
<!--about-starts-->
<br /> <br />
<!--about-end-->
<!--product-starts-->
<div class="product"> 
	<div class="container">
		<div class="product-top">
			<div class="product-one">
			@foreach($arMoi as $key => $arItem)
				<?php
					$id_moi = $arItem['id'];
					$name_moi = $arItem['name'];
					$gia_moi = $arItem['gia'];
					$gia_moi_1 = number_format($gia_moi,0,'','.');
					$hinhanh_moi = $arItem['hinhanh'];
					$urlPic_moi = asset("storage/app/files/{$hinhanh_moi}");
					$nameSeo_moi = str_slug($name_moi);
					$url_moi = route('public.sanpham.detail',['slug' => $nameSeo_moi,'id' => $id_moi]);
					$url = route('public.sanpham.muahang',['id' => $id_moi]);
				?>
				<div class="col-md-3 product-left">
					<div class="product-main simpleCart_shelfItem">
						<a href="{{ $url_moi }}" class="mask"><img class="hinhanh img-responsive zoom-img" value="{{$hinhanh_moi}}" src="{{ $urlPic_moi }}" alt="" /></a>
						<div class="product-bottom" style="white-space: nowrap;overflow: hidden;">
							<h3 id="ten">{{ $name_moi }}</h3>
							<h4>
								<a class="giohang" href="javascript:void(0);" id="{{ $id_moi}}"><i></i></a>
								<span id="gia" style="display: none;" class=" item_price">{{ $gia_moi }}</span>
								<span class=" item_price">{{ $gia_moi_1 }} VNĐ</span>
							</h4>
						</div>
						<div class="srch">
							<span>Mới</span>
						</div>
					</div>
				</div>
			@endforeach

				<div class="clearfix"></div>
			</div>


			<div class="product-one">
			@foreach($arKmai as $key => $arKm)
				<?php
					$id_km = $arKm['id'];
					$name_km = $arKm['name'];
					$gia_km = $arKm['gia'];
					$gia_km_1 = number_format($gia_km,0,'','.');
					$hinhanh_km = $arKm['hinhanh'];
					$urlPic_km = asset("storage/app/files/{$hinhanh_km}");
					$nameSeo_km = str_slug($name_km);
					$url_km = route('public.sanpham.detail',['slug' => $nameSeo_km,'id' => $id_km]);
					$url1 = route('public.sanpham.muahang',['id' => $id_km]);
				?>
				<div class="col-md-3 product-left">
					<div class="product-main simpleCart_shelfItem">
						<a href="{{ $url_km }}" class="mask"><img class="hinhanh img-responsive zoom-img" src="{{ $urlPic_km }}" value="{{$hinhanh_km}}" alt="" /></a>
						<div class="product-bottom" style="white-space: nowrap;overflow: hidden;">
							<h3 id="ten">{{ $name_km }}</h3>
							<h4>
								<a class="giohang" href="javascript:void(0);" id="{{ $id_km}}"><i></i></a>
								<span id="gia" style="display: none;" class=" item_price">{{ $gia_km }}</span>
								<span class=" item_price">{{ $gia_km_1 }} VNĐ</span>
							</h4>
						</div>
						<div class="srch">
							<span>-50%</span>
						</div>
					</div>
				</div>
			@endforeach

				<div class="clearfix"></div>
			</div>
		<br /><br />
			<div class="product-one">
			@foreach($arUthich as $key => $arUT)
				<?php
					$id_ut = $arUT['id'];
					$name_ut = $arUT['name'];
					$gia_ut = $arUT['gia'];
					$gia_ut_1 = number_format($gia_ut,0,'','.');
					$hinhanh_ut = $arUT['hinhanh'];
					$urlPic_ut = asset("storage/app/files/{$hinhanh_ut}");
					$nameSeo_ut = str_slug($name_ut);
					$url_ut = route('public.sanpham.detail',['slug' => $nameSeo_ut,'id' => $id_ut]);
					$url2 = route('public.sanpham.muahang',['id' => $id_ut]);
				?>	
				<div class="col-md-3 product-left">
					<div class="product-main simpleCart_shelfItem">
						<a href="{{ $url_ut }}" class="mask"><img class="hinhanh img-responsive zoom-img" src="{{ $urlPic_ut }}" value="{{$hinhanh_ut}}" alt="" /></a>
						<div class="product-bottom" style="white-space: nowrap;overflow: hidden;">
							<h3 id="ten">{{ $name_ut }}</h3>
							<h4>
								<a class="giohang" href="javascript:void(0);" id="{{ $id_km}}"><i></i></a>
								<span id="gia" style="display: none;" class=" item_price">{{ $gia_ut}}</span>
								<span class=" item_price">{{ $gia_ut_1 }} VNĐ</span>
							</h4>
						</div>
						<div class="srch">
							<span>Hot</span>
						</div>
					</div>
				</div>
			@endforeach
				<div class="clearfix"></div>
			</div>					
		</div>
	</div>
</div>
@endsection
@section('title')
Dự án shop bán hàng online
@endsection
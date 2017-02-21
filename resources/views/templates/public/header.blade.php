<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link href="{{ $url_public }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<script src="{{ $url_public }}/js/jquery-1.11.0.min.js"></script>

<link href="{{ $url_public }}/css/style.css" rel="stylesheet" type="text/css" media="all" />

<!--css giỏ hàng -->
<link rel="stylesheet" href="{{ $url_public }}/dialog/smoke.css" />

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!--  -->

<script type="text/javascript" src="{{ $url_public }}/dialog/smoke.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dự án Shop bán hàng online" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="{{ $url_public }}/js/simpleCart.min.js"> </script>
<link href="{{ $url_public }}/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{ $url_public }}/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	

<script src="{{ $url_public }}/js/jquery.easydropdown.js"></script>
<script src="{{ $url_public }}/js/giohang.js"></script>
<script type="text/javascript" src="{{ $url_public }}/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="{{ $url_public }}/js/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu_drop > li > ul'),
	           menu_a  = $('.menu_drop > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>
<script type="text/javascript">
	var baseURL = "{!! url('/') !!}";
</script>
<script type="text/javascript" src="{{ $url_public }}/js/func_ckfinder.js"></script>	
</head>
<body> 
<!--top-header-->
<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-6 top-header-left">
				<div class="drop">
					<div class="box">
						<select tabindex="4" class="dropdown drop">
							<option value="" class="label">Dollar :</option>
							<option value="1">Dollar</option>
							<option value="2">Euro</option>
						</select>
					</div>
					<div class="box1">
						<select tabindex="4" class="dropdown">
							<option value="" class="label">English :</option>
							<option value="1">English</option>
							<option value="2">French</option>
							<option value="3">German</option>
						</select>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-6 top-header-left">
				<div class="cart box_1">
					<a href="{{ route('public.sanpham.giohang') }}">
						 <div class="total">
							<span class="loadGH"><?php echo Cart::count() ?> </span> SP</div>
							<img src="{{ $url_public }}/images/cart-1.png" alt="" />
					</a>
					<p><a href="javascript:;" class="simpleCart_empty">Giỏ hàng</a></p>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--top-header-->
<!--start-logo-->
<div class="logo">
	<a href="/"><h1>Thanh Watches</h1></a>
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
	<div class="container">
		<div class="header">
			<div class="col-md-9 header-left">
			<div class="top-nav">
				<ul class="memenu skyblue">
					<li class="grid {{ Route::currentRouteNamed('public.index.index') ? 'active' : '' }}">
						<a href="/">Trang chủ</a>
					</li>
					<li class="grid {{ Route::currentRouteNamed('public.sanpham.index') ? 'active' : '' }}">
						<a href="{{ route('public.sanpham.index') }}">Sản phẩm</a>
					</li>
					<li class="grid">
						<a href="#">Giới thiệu</a>
					</li>
					<li class="grid {{ Route::currentRouteNamed('public.lienhe') ? 'active' : '' }}">
						<a class="" href="\lien-he">Liên hệ</a>
					</li>
					@if(Auth::check() == "")
					<li class="grid ">
						<a href="{{ route('public.auth.login') }}" class="login-window">Đăng nhập</a>
					</li>
					@else
					<li class="grid">
						<a href="{{ route('public.auth.logout') }}">Đăng xuất</a>
					</li>
					@endif
				</ul>
				
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-3 header-right"> 
			<div class="search-bar">
				<form action="{{ route('public.sanpham.timkiem') }}" method="GET">
				{!! csrf_field() !!}
					<input type="text" value="" placeholder="Nhập từ khóa" name="tukhoa" required>
					<input type="submit" value="">
				</form>
			</div>
		</div>

		<div class="clearfix"> </div>
		</div>
	</div>
</div>
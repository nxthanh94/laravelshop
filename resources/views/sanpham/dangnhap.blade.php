@extends('templates.public.template')

@section('main')


<div class="prdt"> 
	<div class="container">
		<div class="prdt-top">
			<div class="col-md-9 prdt-left">
				

				<div class="left_content">
				<div class="crumb_nav">
					<a href="/">Trang chủ</a> &gt;&gt; Đăng nhập
				</div>
				<div class="title">
					<span class="title_icon">
						<img alt="" src="images/bullet1.gif"> 
					</span> Đăng nhập
				</div>
				<div class="frmdangnhap">
			        <div class="col-left fl">
			        	<p class="tit">Bạn là khách hàng mới</p>
			        	<div class="col-content">
			        		<form name="frmShop" method="post" action="/account/login.php">
				        		<p>Tùy chọn Thanh toán:</p>
				        		<input type="radio" required="" value="register" name="register"> Đăng ký tài khoản<br> 
				        		<input type="radio" required="" value="guest" name="register"> Mua hàng không cần đăng ký tài khoản
				        		<p class="dangky">Bạn hãy đăng ký một tài khoản, hoàn toàn nhanh chóng và miễn phí.</p>
				        		<input type="submit" value="Tiếp tục" name="submit">
				        	</form>
			        	</div>
			        </div>
			        <div class="col-right fr">
			        	<p class="tit">Chào mừng bạn trở lại</p>
			        	<div class="col-content">
			        		<form name="frmShopLogin" method="post" action="/account/login.php">
				        		<p>Vui lòng đăng nhập.</p>
				        			        		<p>
				        			Tên đăng nhập: <br>
				        			<input type="text" required="" value="" name="username">
				        		</p>
				        		<p>
				        			Mật khẩu: <br>
				        			<input type="password" required="" value="" name="password">
				        		</p>
				        		<p>
				        			<input type="submit" value="Đăng nhập" name="submit">
				        		</p>
			        		</form>
			        	</div>
			        </div>
			        <div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>

			</div>	
			
			@include('sanpham.right_bar')	
			
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection
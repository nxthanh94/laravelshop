@extends('templates.public.template')

@section('main')
<div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Liên hệ</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->
    <!--contact-start-->
    <div class="contact lienhe12" id="login-box">
        <div class="container">
            <div class="contact-top heading">
                <h2>Liên hệ</h2>
            </div>
            @if(Session::get('msg') != "")
                <p style="color: red"><center>{{ Session::get('msg') }}</center></p>
            @endif
                <div class="contact-text">
                <div class="col-md-2 contact-left">
                        <div class="address">
                            <h5>Địa chỉ</h5>
                            <p>133 Nguyễn Văn Linh, Hải Châu, Đà Nẵng 
                            <span>0962.853.212</span>
                            Email: <a href="mailto:nxthanh94@gmail.com">nxthanh94@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-10 contact-right">
                        <form action="{{ route('public.lienhe') }}" method="post">
                            {{ csrf_field() }}
                            <input name="name" type="text" placeholder="Họ và tên" required />
                            <input name="phone" type="text" placeholder="Số điện thoại" required >
                            <input name="email" type="text"  placeholder="Email" required >
                            <br /> <br />
                            <textarea name="noidung" placeholder="Nội dung" required></textarea>
                            <script type="text/javascript">ckeditor ("noidung")</script>
                            <div class="submit-btn">
                                <input type="submit" value="Gửi">
                            </div>
                        </form>
                    </div>  
                    <div class="clearfix"></div>
                </div>
        </div>
    </div>
    <!--contact-end-->
    <!--map-start-->
    <div class="map">
        <iframe src="https://www.google.com/maps/d/embed?mid=1jV84NhNsjpUyPi_LJh9zGfAGT6o" style="border:0" width="640" height="480"></iframe>
       
    </div>
    @endsection
@section('title')
Liên hệ
@endsection
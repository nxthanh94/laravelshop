<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website bán đồng hồ online">
    <meta name="author" content="">

    <title>Đăng nhập</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ $url_admin }}/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ $url_admin }}/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ $url_admin }}/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ $url_admin }}/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="login-panel panel panel-default col-md-4" style="margin-right: 15px; margin-top: 100px;" >
                    <div class="panel-heading">
                        <h3 class="panel-title">Bạn là thành viên mới</h3>
                    </div>
                    <div class="panel-body">
                    <p>Tùy chọn Thanh toán:</p>
                        <form role="form" action="{{ route('public.sanpham.setinfo')}}" method="POST">
                        {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <input type="radio" value="1" name="thanhtoan">
                                     Đăng ký tài khoản
                                </div>
                                <div class="form-group">
                                    <input type="radio" value="2" name="thanhtoan">
                                    Mua hàng không cần đăng ký tài khoản
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Tiếp tục</button>
                            </fieldset>


                        </form>
                    </div>
                </div>

                <div class="login-panel panel panel-default col-md-4" style="margin-top: 100px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Đăng nhập</h3>
                         @if(Session::get('msg') != "")
                            <p style="color: red">{{ Session::get('msg') }}</p>
                        @endif
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{ route('public.auth.login') }}" method="POST">
                        {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username" type="text" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mật khẩu" name="password" type="password" required value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Đăng nhập</button>
                            </fieldset>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ $url_admin }}/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ $url_admin }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ $url_admin }}/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ $url_admin }}/dist/js/sb-admin-2.js"></script>

</body>

</html>

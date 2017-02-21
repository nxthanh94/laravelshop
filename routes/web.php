<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::pattern('id','([0-9]*)');
Route::pattern('id1','([0-9]*)');
Route::pattern('status','([0-9]*)');
Route::pattern('slug','(.*)');


Route::get('/', function () {
    return view('welcome');
});
/////////////////////////////////////////////////////////////
//Quản lý phần public

Route::get('',[
	'uses' => 'IndexController@index',
	'as' => 'public.index.index'
]);

Route::get('san-pham',[
	'uses' => 'SanphamController@index',
	'as' => 'public.sanpham.index'
]);

Route::get('san-pham-tim-kiem/{id}',[
	'uses' => 'SanphamController@sanphamtimkiem',
	'as' => 'public.sanpham.sanphamtimkiem'
]);

Route::get('tim-kiem-hang-san-xuat/{id}',[
	'uses' => 'SanphamController@sanphamtimkiem1',
	'as' => 'public.sanpham.sanphamtimkiem1'
]);


Route::get('san-pham/gio-hang',[
	'uses' => 'SanphamController@giohang',
	'as' => 'public.sanpham.giohang'
]);



Route::get('mua-hang/{id}',[
	'uses' => 'SanphamController@muahang',
	'as' => 'public.sanpham.muahang'
]);

Route::get('xoa-san-pham/{slug}',[
	'uses' => 'SanphamController@xoasanpham',
	'as' => 'public.sanpham.xoasanpham'
]);

Route::get('cap-nhat-san-pham/{slug}/{id}',[
	'uses' => 'SanphamController@capnhatsanpham',
	'as' => 'public.sanpham.capnhatsanpham'
]);

Route::get('chi-tiet/{slug}-{id}.html',[
	'uses' => 'SanphamController@detail',
	'as' => 'public.sanpham.detail'
]);

///////////////////////////////////////////////
Route::get('lien-he',[
	'as' => 'public.lienhe', 
	'uses' => 'LienheController@getindex'
]);

// Route::get('lien-he',function(){
// 	return view('lienhe.index');
// });

Route::post('lien-he',[
	'as' => 'public.lienhe', 
	'uses' => 'LienheController@postlienhe'
]);

/////////////////////////////



Route::get('thanh-cong',[
	'uses' => 'SanphamController@getthanhcong',
	'as' => 'public.sanpham.thanhcong'
]);

Route::post('thanh-cong',[
	'uses' => 'SanphamController@postthanhcong',
	'as' => 'public.sanpham.thanhcong'
]);

Route::get('dang-nhap',[
	'uses' => 'SanphamController@dangnhap',
	'as' => 'public.sanpham.dangnhap'
]);


Route::get('set-info',[
	'uses' => 'SanphamController@getsetinfo',
	'as' => 'public.sanpham.setinfo'
]);

Route::post('set-info',[
	'uses' => 'SanphamController@postsetinfo',
	'as' => 'public.sanpham.setinfo'
]);


Route::get('thong-tin-thanh-toan',[
	'uses' => 'SanphamController@thongtinthanhtoan',
	'as' => 'public.sanpham.thongtinthanhtoan'
]);

Route::get('xac-nhan-thanh-toan',[
	'uses' => 'SanphamController@getxacnhanthanhtoan',
	'as' => 'public.sanpham.xacnhanthanhtoan'
]);


Route::post('xac-nhan-thanh-toan',[
	'uses' => 'SanphamController@postxacnhanthanhtoan',
	'as' => 'public.sanpham.xacnhanthanhtoan'
]);


// Route::get('thong-tin-thanh-toan.html',[
// 	'uses' => 'SanphamController@thongtinthanhtoan',
// 	'as' => 'public.sanpham.thongtinthanhtoan'
// ]);





//////////////////////////////////////////////////////////////////
//Quản lý admin
Route::group(['namespace' => 'Admin', 'prefix' => 'admin','middleware' => 'auth','middleware' =>'role'], function () {
	Route::get('',[
		'uses' => 'IndexController@index',
		'as'  => 'admin.index.index'
	]);

	//Quản lý chi tiết hóa đơn
	Route::group(['prefix' => 'chi-tiet-hoa-don','middleware' =>'role'], function () {
		Route::get('/{id}',[
		'uses' => 'ChitiethoadonController@index',
		'as'  => 'admin.chitiethoadon.index'
		]);

		Route::get('/del/{id}',[
		'uses' => 'ChitiethoadonController@del',
		'as'  => 'admin.chitiethoadon.del'
		]);

		
	});

	//Quản lý hãng sản xuất
	Route::group(['prefix' => 'hang-san-xuat'], function () {
		Route::get('',[
		'uses' => 'HangsanxuatController@index',
		'as'  => 'admin.hangsanxuat.index'
		]);

		Route::get('add',[
		'uses' => 'HangsanxuatController@getadd',
		'as'  => 'admin.phanquyen.add'
		]);

		Route::post('add',[
		'uses' => 'HangsanxuatController@postadd',
		'as'  => 'admin.hangsanxuat.add'
		]);

		Route::get('edit/{id}',[
		'uses' => 'HangsanxuatController@getedit',
		'as'  => 'admin.hangsanxuat.edit'
		]);

		Route::post('edit/{id}',[
		'uses' => 'HangsanxuatController@postedit',
		'as'  => 'admin.hangsanxuat.edit'
		]);

		Route::get('/del/{id}',[
		'uses' => 'HangsanxuatController@del',
		'as'  => 'admin.hangsanxuat.del'
		]);


	});

	//Quản lý hóa đơn
	Route::group(['prefix' => 'hoa-don'], function () {
		Route::get('',[
		'uses' => 'HoadonController@index',
		'as'  => 'admin.hoadon.index'
		]);

		Route::get('del/{id}',[
        	'uses' => 'HoadonController@del',
        	'as' => 'admin.hoadon.del'
        ]);

        Route::get('/trang-thai/{id}/{status}',[
		'uses' => 'HoadonController@trangthai',
		'as'  => 'admin.hoadon.trangthai'
		]);

		
	});

	//Quản lý liên hệ
	Route::group(['prefix' => 'lien-he'], function () {
		Route::get('',[
		'uses' => 'LienheController@index',
		'as'  => 'admin.lienhe.index'
		]);

		Route::get('/del/{id}',[
		'uses' => 'LienheController@del',
		'as'  => 'admin.lienhe.del'
		]);

		
	});

	//Quản lý phân quyền
	Route::group(['prefix' => 'phan-quyen'], function () {
		Route::get('',[
		'uses' => 'PhanquyenController@index',
		'as'  => 'admin.phanquyen.index'
		]);

		Route::get('add',[
		'uses' => 'PhanquyenController@getadd',
		'as'  => 'admin.phanquyen.add'
		]);

		Route::post('add',[
		'uses' => 'PhanquyenController@postadd',
		'as'  => 'admin.phanquyen.add'
		]);

		Route::get('edit/{id}',[
		'uses' => 'PhanquyenController@getedit',
		'as'  => 'admin.phanquyen.edit'
		]);

		Route::post('edit/{id}',[
		'uses' => 'PhanquyenController@postedit',
		'as'  => 'admin.phanquyen.edit'
		]);

		Route::get('/del/{id}',[
		'uses' => 'PhanquyenController@del',
		'as'  => 'admin.phanquyen.del'
		]);

	});

	//Quản lý sản phẩm
	Route::group(['prefix' => 'san-pham'], function () {
		Route::get('',[
		'uses' => 'SanphamController@index',
		'as'  => 'admin.sanpham.index'
		]);

		Route::get('mo-ta/{id}',[
		'uses' => 'SanphamController@mota',
		'as'  => 'admin.sanpham.mota'
		]);

		Route::get('add',[
		'uses' => 'SanphamController@getadd',
		'as'  => 'admin.sanpham.add'
		]);

		Route::post('add',[
		'uses' => 'SanphamController@postadd',
		'as'  => 'admin.sanpham.add'
		]);

		Route::get('edit/{id}',[
		'uses' => 'SanphamController@getedit',
		'as'  => 'admin.sanpham.edit'
		]);

		Route::post('edit/{id}',[
		'uses' => 'SanphamController@postedit',
		'as'  => 'admin.sanpham.edit'
		]);

		Route::get('/del/{id}',[
		'uses' => 'SanphamController@del',
		'as'  => 'admin.sanpham.del'
		]);
	});

	//Quản lý loại sản phẩm
	Route::group(['prefix' => 'loai-san-pham'], function () {
		Route::get('',[
		'uses' => 'LoaisanphamController@index',
		'as'  => 'admin.loaisanpham.index'
		]);

		Route::get('add',[
		'uses' => 'LoaisanphamController@getadd',
		'as'  => 'admin.loaisanpham.add'
		]);

		Route::post('add',[
		'uses' => 'LoaisanphamController@postadd',
		'as'  => 'admin.loaisanpham.add'
		]);

		Route::get('edit/{id}',[
		'uses' => 'LoaisanphamController@getedit',
		'as'  => 'admin.loaisanpham.edit'
		]);

		Route::post('edit/{id}',[
		'uses' => 'LoaisanphamController@postedit',
		'as'  => 'admin.loaisanpham.edit'
		]);

		Route::get('/del/{id}',[
		'uses' => 'LoaisanphamController@del',
		'as'  => 'admin.loaisanpham.del'
		]);
	});

	//Quản lý thanh toan
	Route::group(['prefix' => 'thanh-toan'], function () {
		Route::get('',[
		'uses' => 'ThanhtoanController@index',
		'as'  => 'admin.thanhtoan.index'
		]);

		Route::get('add',[
		'uses' => 'ThanhtoanController@getadd',
		'as'  => 'admin.thanhtoan.add'
		]);

		Route::post('add',[
		'uses' => 'ThanhtoanController@postadd',
		'as'  => 'admin.thanhtoan.add'
		]);

		Route::get('edit/{id}',[
		'uses' => 'ThanhtoanController@getedit',
		'as'  => 'admin.thanhtoan.edit'
		]);

		Route::post('edit/{id}',[
		'uses' => 'ThanhtoanController@postedit',
		'as'  => 'admin.thanhtoan.edit'
		]);

		Route::get('/del/{id}',[
		'uses' => 'ThanhtoanController@del',
		'as'  => 'admin.thanhtoan.del'
		]);
	});

	//Quản lý users
	Route::group(['prefix' => 'nguoi-dung'], function () {
		Route::get('',[
		'uses' => 'UsersController@index',
		'as'  => 'admin.users.index'
		]);

		Route::get('add',[
		'uses' => 'UsersController@getadd',
		'as'  => 'admin.users.add'
		]);

		Route::post('add',[
		'uses' => 'UsersController@postadd',
		'as'  => 'admin.users.add'
		]);

		Route::get('edit/{id}',[
		'uses' => 'UsersController@getedit',
		'as'  => 'admin.users.edit'
		]);

		Route::post('edit/{id}',[
		'uses' => 'UsersController@postedit',
		'as'  => 'admin.users.edit'
		]);

		Route::get('del/{id}',[
        	'uses' => 'UsersController@del',
        	'as' => 'admin.users.del'
        ])->middleware('role1');
	});
});

//login
Route::group(['namespace' => 'Auth','prefix' => 'auth'], function () {
    Route::get('login',[
    'uses'=> 'AuthController@getLogin',
    'as' => 'public.auth.login'
    ]);

    Route::post('login',[
    'uses'=> 'AuthController@postLogin',
    'as' => 'public.auth.login'
    ]);

    Route::get('logout',[
    'uses'=> 'AuthController@logout',
    'as' => 'public.auth.logout'
    ]);
    
});

//tim kiem
Route::get('tim-kiem',[
	'uses' => 'IndexController@timkiem',
	'as' => 'public.sanpham.timkiem'
	]);

Route::get('tim-kiem1/{id}',[
	'uses' => 'IndexController@timkiem1',
	'as' => 'public.sanpham.timkiem1'
]);
//thong báo
Route::get('noaccess', function(){
    return view('errors.404');
});


//Đăng kí

Route::get('dang-ki',[
	'uses' => 'IndexController@getadd',
	'as'  => 'auth.dangki'
]);

Route::post('dang-ki',[
	'uses' => 'IndexController@postadd',
	'as'  => 'auth.dangki'
]);




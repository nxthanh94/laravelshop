<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\sanpham;
use App\hangsx;
use App\loaisp;
use App\phanhoi;
use App\User;
use Mail;

class IndexController extends RightController
{
    public function index()
    {
    	$arMoi = sanpham::where('id_loaisp','=','1')->orderBy('id','desc')->take(4)->get();
    	$arKmai = sanpham::where('id_loaisp','=','2')->orderBy('id','desc')->take(4)->get();
    	$arUthich = sanpham::where('id_loaisp','=','3')->orderBy('id','desc')->take(4)->get();

    	return view('index.index',[
    		'arMoi' => $arMoi,
    		'arKmai' => $arKmai,
            'arUthich' => $arUthich
    	]);
    }

    public function timkiem(Request $request){
        $tukhoa = $request->tukhoa;

       
        $arSanpham = sanpham::where('name','like',"%$tukhoa%")->
        orWhere('mota','like',"%$tukhoa%")->
        orWhere('day','like',"%$tukhoa%")->
        orWhere('vo','like',"%$tukhoa%")->
        orWhere('matkinh','like',"%$tukhoa%")->paginate(9);
       
        return  view('sanpham.timkiem',[
            'tukhoa' => $tukhoa,
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1,
            'arSanpham' => $arSanpham
        ]);

    }

    public function getadd(){
        return view('auth.dangki',[
        'arCat' => $this->_arCat,
        'arCat1' => $this->_arCat1,
        ]);
    }

    public function postadd(UserRequest $request)
    {
        $username = $request->username;
        $password = bcrypt(trim($request->password));
        $name = $request->name;
        $email = $request->email;
        $diachi = $request->diachi;
        $sdt = $request->sdt;
        $phanquyen = $request->phanquyen;
        $arUsers = array(
            'username' => $username,
            'password' => $password,
            'name'     => $name,
            'email' => $email,
            'diachi' => $diachi,
            'dienthoai' => $sdt,
            'id_phanquyen'     => $phanquyen,
            );
        $result = User::insert($arUsers);
        if($result){
            $data = ['hoten' => $request->name,
                    'password' => $request->password,
                    'username' => $request->username,
                    'dienthoai' => $request->sdt,
                    'email' => $request->email,
               
                ];
        Mail::send('lienhe.phanhoidk',$data,function($msg) use ($data){
                $msg->from('nxthanh941@gmail.com','ThanhWatches');
                $msg->to($data['email'],'Thanh')->subject('Đăng kí tài khoản tại ThanhWatches');
            });
        }

        return redirect()->route('public.sanpham.index');
    }

   


        
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sanpham;
use App\hangsx;
use App\hoadon;
use App\chitiethoadon;
use App\phanhoi;
use App\User;
use App\thanhtoan;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Input;


class SanphamController extends RightController
{
    public function index(){
    	$arItems = sanpham::orderBy('id','desc')->paginate(9);
    	$arItems1 = sanpham::orderBy('id','desc')->skip(3)->take(3)->get();
    	$arItems2 = sanpham::orderBy('id','desc')->skip(6)->take(3)->get();

    	return view('sanpham.index',[
    		'arItems' => $arItems,
    		'arItems1' => $arItems1,
    		'arItems2' => $arItems2,
    		'arCat' => $this->_arCat,
        	'arCat1' => $this->_arCat1
    	]);
    }

    public function detail($slug, $id){
        $arNews = sanpham::find($id);
        $id_hangsx = $arNews->id_hangsx;

        $arHangsx1 = hangsx::where('id','=',$id_hangsx)->first();
        $tenhsx = $arHangsx1['tenhsx'];

        $sPhamlienquan = sanpham::where('id_hangsx','=',$id_hangsx)->where('id','!=',$id)->take(3)->get();
        
    	return view('sanpham.detail',[
    		'arNews' => $arNews,
    		'tenhsx' => $tenhsx,
    		'sPhamlienquan' => $sPhamlienquan,
    		'arCat' => $this->_arCat,
        	'arCat1' => $this->_arCat1
    	]);
    }

    public function giohang(){
        $content  = Cart::content();
        return view('sanpham.giohang',[
            'content' => $content
        ]);
    }

    public function muahang($id, Request $request){
        if($request->ajax()) {
            $hinhanh = $request->img;
            $img= asset("storage/app/files/{$hinhanh}");
           Cart::add([
                'id'         => $request->id,
                'name'       => $request->name,
                'price'      => $request->price,
                'qty'        => $request->qty,
                'options' => ['img' => $img]
                
            ]);
           return Cart::count();
        }else{
            $arCart = sanpham::find($id);
            $hinhanh = $arCart->hinhanh;
            $img = asset("storage/app/files/{$hinhanh}");
            Cart::add([
                'id'         => $id,
                'name'       => $arCart->name,
                'price'      => $arCart->gia,
                'qty'        => 1,
                'options' => ['img' => $img]
                
            ]);
            return redirect()->route('public.sanpham.giohang');
        }
       
    }

    public function capnhatsanpham($slug,$id, Request $request){
       if($request->ajax()){
            $id = $request->id;
            $qty = $request->qty;
            Cart::update($id,$qty);
       }
    }
    

    public function xoasanpham($slug, Request $request){
        
        Cart::remove($slug);

        return redirect()->route('public.sanpham.giohang');
    }

    

    public function dangnhap(){
        return view('sanpham.dangnhap',[
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1
        ]);
    }
   


    public function getsetinfo(){
        return view('sanpham.setinfo',[
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1
        ]);
    }

     public function postsetinfo(Request $request){
        $thanhtoan = $request->thanhtoan;
        if($thanhtoan == 2){
            return redirect()->route('public.sanpham.setinfo');
        }else{
            return redirect()->route('auth.dangki');
        }
       
    }

    public function thongtinthanhtoan(Request $request){
        
        if(Auth::check() != "")
        {
            $id = Auth::user()->id;
            $arUser = User::find($id);

            $arThanhtoan = thanhtoan::all();
        }
        else
        {
            $arSetinfo = array(
            'name'          => $request->name,
            'email'         => $request->email,
            'dienthoai'     => $request->phone,
            'diachi'       => $request->diachi
          
            );
            $id_contact = phanhoi::insertGetId($arSetinfo);
            $arUser = phanhoi::where('id','=',$id_contact)->first();
            $arThanhtoan = thanhtoan::all();
        }
        


        return view('sanpham.thongtinthanhtoan',[
            'arThanhtoan' => $arThanhtoan,
            'arUser' => $arUser,
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1
        ]);
    }



    public function getxacnhanthanhtoan(Request $request){
        $content  = Cart::content();
        $name = $request->hoten;
        $diachi = $request->diachi;
        $thanhtoan = $request->thanhtoan;
        $email = $request->email;
        $sodienthoai = $request->phone;
        $thongtinthem = $request->thongtinthem;
        $array = thanhtoan::where('id','=',$thanhtoan)->first();
        $tentt = $array['loaithanhtoan'];
        $idtt = $array['id'];

        
        return view('sanpham.xacnhanthanhtoan',[
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1,
            'name' => $name,
            'diachi' => $diachi,
            'tentt' => $tentt,
            'thongtinthem' => $thongtinthem,
            'thanhtoan' => $thanhtoan,
            'content' => $content,
            'email' => $email,
            'sodienthoai' => $sodienthoai,
            'idtt' => $idtt,
        ]);
    }

    public function postxacnhanthanhtoan(Request $request){
        $content  = Cart::content();
        $name = $request->hoten;
        $diachi = $request->diachi;
        $thanhtoan = $request->thanhtoan;
        $email = $request->email;
        $sodienthoai = $request->phone;
        $thongtinthem = $request->thongtinthem;
        $array = thanhtoan::where('id','=',$thanhtoan)->first();
        $tentt = $array['loaithanhtoan'];
        $idtt = $array['id'];

        
        return view('sanpham.xacnhanthanhtoan',[
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1,
            'name' => $name,
            'diachi' => $diachi,
            'tentt' => $tentt,
            'thongtinthem' => $thongtinthem,
            'thanhtoan' => $thanhtoan,
            'content' => $content,
            'email' => $email,
            'sodienthoai' => $sodienthoai,
            'idtt' => $idtt,
        ]);
    }
    
    public function getthanhcong(){
        return view('sanpham.thanhcong',[
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1
        ]);
    }  

    public function postthanhcong(Request $request){
        $diachi = $request->diachi;
        $email = $request->email;
        $name = $request->hoten;
        $sodienthoai = $request->phone;
        $thanhtoan = $request->thanhtoan;
        $thongtinthem = $request->thongtinthem;
        $Cart = Cart::content();
        $total = Cart::subtotal(0,'','');

        if(Auth::check() == ""){
            $array = array(
                'id_users' => 4,
                'id_thanhtoan' => $thanhtoan,
                'tonggia' => $total,
                'diachi' => $diachi,
                'thongtinthem' => $thongtinthem,
                'email' => $email,
                'name' => $name,
                'sodienthoai' => $sodienthoai,
                'trangthai' => 0,
            );

            $hoadon = hoadon::insertGetId($array);

            //////////////////
            $count = Cart::content()->count();
            foreach ($Cart as $key => $value) {
                $id_sp = $value->id;
                $qty = $value->qty;
                $price = $value->price;
                $array = array(
                    'id_hoadon' => $hoadon,
                    'id_sp' => $id_sp,
                    'soluong' => $qty,
                );
            chitiethoadon::insertGetId($array);

            }
        }else{
            $id = Auth::user()->id;
            $array = array(
                'id_users' => $id,
                'id_thanhtoan' => $thanhtoan,
                'tonggia' => $total,
                'diachi' => $diachi,
                'thongtinthem' => $thongtinthem,
                'trangthai' => 0,
            );

            $hoadon = hoadon::insertGetId($array);

            //////////////////
            $count = Cart::content()->count();
            foreach ($Cart as $key => $value) {
                $id_sp = $value->id;
                $qty = $value->qty;
                $price = $value->price;
                $array = array(
                    'id_hoadon' => $hoadon,
                    'id_sp' => $id_sp,
                    'soluong' => $qty,
                );
            chitiethoadon::insertGetId($array);
        }
    }

        Cart::destroy();
        return view('sanpham.thanhcong',[
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1
        ]);

    }
       
    // public function thongtinthanhtoan(Request $request){
    //     $name = $request->hoten;
    //         echo $name;die();

    //     return view('public.sanpham.xacnhanthanhtoan',[
    //         'arCat' => $this->_arCat,
    //         'arCat1' => $this->_arCat1
    //     ]);
    // }

    public function sanphamtimkiem(Request $request){
        if($request->ajax()){
            $id = $request->id;
            $arTimkiem = sanpham::where('id_loaisp','=',$id)->orderBy('id','desc')->paginate(9);

            return view('sanpham.timkiem1',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arTimkiem' => $arTimkiem,
            ]);
        }
        else{
            echo "không tìm thấy";
        }

    }

    public function sanphamtimkiem1($id){
        $arTimkiem = sanpham::where('id_hangsx','=',$id)->orderBy('id','desc')->paginate(9);

        return view('sanpham.timkiem1',[
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1,
            'arTimkiem' => $arTimkiem,
        ]);
    }


   
}

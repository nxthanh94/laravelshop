<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\SanPhamRequest;
use App\Http\Controllers\Controller;
use App\sanpham;
use App\hangsx;
use App\loaisp;
use Illuminate\Support\Facades\Storage;

class SanphamController extends Controller
{
    public function index(){
    	$objSanpham = new sanpham;
    	$arItems = $objSanpham->getList();
    	return view('admin.sanpham.index',[
    		'arItems' => $arItems
    	]);
    }

    public function getadd(){
    	$arHangsx = hangsx::all();
    	$arLoaisp = loaisp::all();

    	return view('admin.sanpham.add',[
    		'arHangsx' => $arHangsx,
    		'arLoaisp' => $arLoaisp
    	]);
    }

    public function postAdd(SanPhamRequest $request){
     	$picName = $request->picture;

     	if($request->picture != ''){
     		$path = $request->file('picture')->store('files');
     		$tmp = explode('/',$path);
     		$picName = end($tmp);
     	}
    	$arSanpham = array(
            'name' 			=> $request->name,
            'id_hangsx' 		=> $request->hsx,
            'id_loaisp' 	=> $request->loaisp,
            'gia' 		=> $request->gia,
            'soluong' 		=> $request->soluong,
            'kieudang' 		=> $request->kieudang,
            'vo' 		=> $request->vo,
            'day' 		=> $request->day,
            'matkinh' 		=> $request->matkinh,
            'duongkinh' 		=> $request->duongkinh,
            'dochiunuoc' 		=> $request->dochiunuoc,
            'mota' 		=> $request->mota,
            'hinhanh' 		=> $picName
        );
    	sanpham::insert($arSanpham);

    	$request->session()->flash('msg','Thêm thành công');
    	return redirect()->route('admin.sanpham.index');
    }

    public function getedit($id){
    	$arHangsx = hangsx::all();
    	$arLoaisp = loaisp::all();
    	$arItems = sanpham::find($id);

    	return view('admin.sanpham.edit',[
    		'arHangsx' => $arHangsx,
    		'arLoaisp' => $arLoaisp,
    		'arItems' => $arItems
    	]);
    }

    public function postedit($id, SanPhamRequest $request){
    	$arItem   = sanpham::find($id);
    	//xu ly hiinh anh
    	$picNameOld = $arItem['hinhanh'];
    	$picNameNew = $request->picture;
    	if($picNameNew != ''){//co up hinh moi
    		//up hinh moi
    		$path = $request->file('picture')->store('files');
     		$tmp = explode('/',$path);
     		$picName = end($tmp);

    		//xoa hinh cu
    		if($picNameOld != ''){
    			Storage::delete("files/{$picNameOld}");
    		}
    	}else{
    		$picName = $picNameOld;
    	}

        $arItem->name = trim($request->name);
        $arItem->id_hangsx = $request->hsx;
        $arItem->id_loaisp = $request->loaisp;
        $arItem->gia = $request->gia;
        $arItem->hinhanh = $picName;
        $arItem->soluong = $request->soluong;
        $arItem->kieudang = $request->kieudang;
        $arItem->vo = $request->vo;
        $arItem->day = $request->day;
        $arItem->matkinh = $request->matkinh;
        $arItem->duongkinh = $request->duongkinh;
        $arItem->dochiunuoc = $request->dochiunuoc;
        $arItem->mota = $request->mota;

    	$arItem->update();

    	$request->session()->flash('msg','Sửa thành công');
    	return redirect()->route('admin.sanpham.index');
    
    }

    public function del($id, Request $request){
    	$objItem = sanpham::find($id);
    	$objItem->delete();
    	//Xoa hinh
    	$picName = $objItem['hinhanh'];
    	if($picName != ''){
    		Storage::delete("files/{$picName}");
    	}

    	$request->session()->flash('msg','Xóa thành công');
    	return redirect()->route('admin.sanpham.index');
    }

    public function mota($id){
        $arItem   = sanpham::find($id);
        return view('admin.sanpham.mota',[
            'arItem' => $arItem
        ]);
    }
}

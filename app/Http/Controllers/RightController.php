<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sanpham;

class RightController extends Controller
{
   	public $_arCat;
    public $_arCat1;
    public function __construct()
    {
    	$arCat = DB::table("hangsx")->get();
    	$arCat1 = DB::table("loaisp")->get();
        $this->_arCat = $arCat;
        $this->_arCat1 = $arCat1;
    }

  
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudendController extends Controller
{
    function index(){
      return view('index');
    }
    function shu(Request $request){
       $arry= $request->all();
       unset($arry['_token']);
       shuffle ($arry);

       $R = array_chunk($arry,2);

return view('shu',["data"=>$R]);

      }

}

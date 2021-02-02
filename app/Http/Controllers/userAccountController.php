<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class userAccountController extends Controller
{
 public static   function singIn($userName,$passcode){

    $re = DB::table('userinfo')
    ->where([['UserName', '=', $userName ],['Password', '=', $passcode ]])
        ->get();
     //->first()->UserName;
    if($re=="[]"){
        session(['userName' =>null]);
        return "Invalid Username";
    }else{
    
    session(['userName' => $re[0]->UserName]);
     return $re;
    }






    }
}

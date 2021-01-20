<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class userAccountController extends Controller
{
 public static   function singIn($userName,$passcode){

        $data=DB:: select('select * from userinfo UserName='.$userName.'and Password='.$passcode);


        return $data[0];





    }
}

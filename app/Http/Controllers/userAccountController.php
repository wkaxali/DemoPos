<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class userAccountController extends Controller
{
 public static function singIn($userName,$passcode){

    $re = DB::table('userinfo')
    ->where([['UserName', '=', $userName ],['Password', '=', $passcode ]])
        ->get();
     //->first()->UserName;
    if($re=="[]"){
      
        session(['userName' =>null]);
        session(['Designation' =>null]);
        return "Invalid Username";
    }else{
    
    session(['userName' => $re[0]->UserName]);
    session(['Designation' => $re[0]->Designation]);
      
        session(['userID' => $re[0]->UserID]);
     return $re;
    }
 }
    public static function addUsers(Request $request, $CO){
        $ata=json_decode($CO);
        $userName = $ata[0];
        $password = $ata[1];
        $designation = $ata[2];

        $re = DB::table('userinfo')
        ->insert([
          
          'UserName'=>$userName,
          'Password'=>$password,
          'Designation'=>$designation
          ]);

          return $userName;
        }
        
        public static function getUsers(){
            $data=DB:: select('select * from userinfo ');
            return $data;
          }







    
}

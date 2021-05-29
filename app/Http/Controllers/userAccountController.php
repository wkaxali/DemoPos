<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class userAccountController extends Controller
{
 public static function signIn($userName,$passcode){

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
    //session(['EmpID' => $re[0]->EmpID]);
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
    

  public static function editUsers(Request $request, $CO){
    $ata=json_decode($CO);
    $UserID = $ata[0];
    $UserName = $ata[1];
    $Password = $ata[2];
    $Designation = $ata[3];

    $re = DB::table('userinfo')
    ->where('UserID', $UserID)
    ->update([
      'UserName'=>$UserName,
      'Password'=>$Password,
      'Designation'=>$Designation
      ]);

      return $re;
  }
  public function signUp (Request $request, $data){

    $obj=json_decode($data);
    $EID=$obj[0];
    $contact=$obj[1];
    $password=$obj[2];
    // $rePassword=$obj[3];
    $Designation=$obj[3];


    $UserCheck = DB::table('userinfo')
    ->where([['UserName', '=', $contact]]);

    if($UserCheck->exists()){
        return "Already have user on this Contact";
    }else{
        $newUser=DB::table('userinfo')
        ->insertGetId([
        "EID"=>$EID,
        'UserName'=>$contact,
        'Password'=>$password,
        'Designation'=>$Designation,
        ]);
    
      return "User $newUser is Added";
    }
  }
    
}

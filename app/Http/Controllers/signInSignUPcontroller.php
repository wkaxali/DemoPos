<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class signInSignUPcontroller extends Controller
{
    public function InsertAdmin(Request $request, $CO)
    {
        $obj=json_decode($CO);
        $Username=$obj[0];
        $Userpaswd=$obj[1];
        $desigtn="Admin";
        

        $UID=DB::table('userinfo')->insertGetId(['UserName'=>$Username,
        'Password'=>$Userpaswd,
        'Designation'=>$desigtn
        ]);
        
        //return "Getting from controller".$obj[0];

       return self::signIn($Username,$Userpaswd);




     }
     public function signIn($Username,$Userpaswd){


        
    
    $user=DB:: select('select * from userinfo where UserName='.$Username.'and Password='.$Userpaswd);

   
        
        
        return $user;
       
        
         
        return "es";

     }
    
}


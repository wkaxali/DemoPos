<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CustomerViewController extends Controller
{
    public function customerinfo(Request $request, $CO){

        $obj=json_decode($CO);
        $Cname=$obj[0];
        $CusContact=$obj[1];
        $cusaddres=$obj[2];
        $CusIntr=$obj[3];
        $cusmet=$obj[4];
       self:: insertintblcustomeinformation($Cname,$CusContact,$cusaddres,$CusIntr,$cusmet);

        return "Getting from controller".$obj[0];
    }
    public function insertintblcustomeinformation(
        
        $CCustomerName,
        $CAddress,
        $CContect,
         $Cusint,
         $cusmt
        ){
        $result= DB::insert('insert into customeinformation (CustomerName,Address,
        Contect,Who meet,interested In)
        value(?,?,?,?,?)',
        [$CCustomerName, $CContect, $CAddress,$Cusint,$cusmt]);
        
        
        if ($result==1){

        print("escccc");



        }
    }

    public static function getCustomerNames(){
        $data=DB:: select('select * from customeinformation');
        
        $option='<option value=" "></option>';
    
    
        foreach ($data as $d){
          //print $option;
    
            $option=$option.'
            <option value= '.$d->CustomerID.'>'.$d->CustomerName.'</option>';
          
        }
        return $option;
      }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use DB;

class payController extends Controller
{

public static function getEmployeeName(){
    $data=DB:: select('select * from tblemployees');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->FirstName.'</option>';
      
    }
    return $option;
  }


  public static function getEmployeeCNIC(){
    $data=DB:: select('select * from tblemployees');
    
    $option='';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->CNIC.'</option>';
      
    }
    return $option;
  }

  public static function getEmployeeID(){
    $data=DB:: select('select * from tblemployees');
    
    $option='';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->EID.'</option>';
      
    }
    return $option;
  }

  public static function getEmployeeContact(){
    $data=DB:: select('select * from tblemployees');
    
    $option='';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->ContactNo.'</option>';
      
    }
    return $option;
  }

  public static function getEmpbyID(Request $request, $ID){
   
   // return $ID;
    $data=DB:: select('select * from vw_employeealowncspay where EID ='.$ID );

    
    return $data;
  }

}

  
  
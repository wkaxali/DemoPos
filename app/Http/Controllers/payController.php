<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use DB;

class payController extends Controller
{

public static function getEmployeeName(){
    $data=DB:: select('select * from tblemployees');
    
    $option='';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->FirstName.'</option>';
      
    }
    return $option;
  }


  public static function getEmployeeName(){
    $data=DB:: select('select * from tblemployees');
    
    $option='';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->FirstName.'</option>';
      
    }
    return $option;
  }

}

  
  
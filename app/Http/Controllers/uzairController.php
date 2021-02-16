<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class uzairController extends Controller
{
    function function(){
        $data=DB:: select('select * from tblaccounts');
        return $data;
      }


    function myfunction()
    {
        $record = DB::select('select * from productdefination');
        return $record;
    }




}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
class printDocuments extends Controller
{
    public static function getDocuments(){
        $results=DB::select('select * from  vw_customersale_invoice where Category=1' );
        return $results;

    }
    
}


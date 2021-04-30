<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
class printDocuments extends Controller
{
    public static function getDocuments(){
        $results=DB::select('select * from  tbl_invoice_assesories' );
        return $results;

    }
    
}


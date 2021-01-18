<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class getProducts extends Controller
{
    



    public function getAllProducts(){
        $results=DB::select('select * from  vw_stockdetails');
        
            
        return $results;

    }
}

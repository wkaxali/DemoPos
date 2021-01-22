<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class getProducts extends Controller
{
    



    public static function getAllProducts(){
        $results=DB::select('select * from  vw_stockdetails');
        
            
        return $results;

    }
    public static function getProductByCategory(Request $request,$CID){
        $results=DB::select('select * from  vw_stockdetails where Category='.$CID );
        
            
        return $results;

    }
    public static function getPartsAndServices(){
        $results=DB::select('select * from  vw_stockdetails where Category=21 or Category=22' );
        
            
        return $results;

    }
    
}

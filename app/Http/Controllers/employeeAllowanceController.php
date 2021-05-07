<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class employeeAllowanceController extends Controller
{
    public function addAllowance(Request $request, $CO){
        
        
        $AllowName=$CO;
   
        
        
        $CID=DB::table('tbl_allowancehead')->insertGetId([
            'AllowanceName'=>$AllowName,
 
            ]);
        return $CID;
    }
}

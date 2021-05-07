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



    public static function editAllowance(Request $request, $CO){
        $ata=json_decode($CO);
        $AID = $ata[0];
        $allowName = $ata[1];
       

        $re = DB::table('tbl_allowancehead')
        ->where('AllowanceID', $AID)
        ->update([
          'AllowanceName'=>$allowName ]);
          return $AID;
        }


        public function getAllowance(){
            $results=DB::select('select * from tbl_allowancehead');
            return $results;
        }
    
}

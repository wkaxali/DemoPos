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
        
        public static function getAllownceHeads(){
            $data=DB:: select('select * from tbl_allowancehead');       
            $option='<option value=""></option>';
            foreach ($data as $d){
    
                $option=$option.'
                <option value= '.$d->AllowanceID.'>'.$d->AllowanceName.'</option>';
              
            }
            return $option;
    
    
        }
}

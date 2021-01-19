<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LedgerPartiesController extends Controller
{
    public static function UpdatePartiesBalance($LID,$amount){

        // LID int(11) AI PK 
        // PartyName varchar(45) 
        // Category varchar(45) 
        // Balance float 
        // ContantNo varchar(45) 
        // Address varchar(100) 
        // Status varchar(45)
        // $OldBalance=DB::select('select Balance from tblledgerparties where LID='.$LID);
        // $currentBalance=floatval ($OldBalance)+floatval ($amount);
        DB::table('tblledgerparties')
        ->where('LID', $LID)
        ->update(['Balance' =>$amount
       
        ]);
        return 'update New Balance';


    }
    public static function getPartyBalance($LID){

       
        $re = DB::table('tblledgerparties')
            ->where('LID', '=', $LID)
             ->first()->Balance;

             return $re;




    }
    public static function getAllSuplierParties(){

        $results=DB::select('select * from  tblledgerparties where Category="Supplier"' );
        
        $sOp='<option value=" "></option>';
                                
                                
                            
                            
        $tableOfHtml="";
            foreach ($results as $ro){
    
    
               $tableOfHtml=$tableOfHtml." <option value=".$ro->LID.">".$ro->PartyName."</option>";
    
    
            }
        
          $endSelect="</select>";
          $allHtml=$sOp . $tableOfHtml . $endSelect;
          return $allHtml;   

    }
    public function getPartyDetail($SID){
        $results=DB::select('select * from tblledgerparties where LID= '.$SID);
       // mysql_insert_id()
        return $results;



    }
}

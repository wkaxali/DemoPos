<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class TransactionFlow extends Controller
{
    public static function addTransaction($InvoiceNo,$TType,$amount,$dateStamp,$UserID,$SBB,$SBA,$CBB,$CBA){

       
        // InvoiceNo bigint(20) 
        // TransectionCatogery varchar(50) 
        // Amount double 
        // DateStamp datetime 
        // ModifiedOn datetime 
        // UserID varchar(50) 
        // PattyCash double 
        // SBB varchar(50) 
        // SBA varchar(50) 
        // CBB varchar(50) 
        // CBA varchar(50)
        $dateNow= Carbon::now()->toDateTimeString();
        $CID=DB::table('tbltransactionflow')->insertGetId(['InvoiceNo'=> $InvoiceNo, 
        'TransectionCatogery' =>$TType,
        'Amount' =>$amount,
        'DateStamp' =>"$dateStamp",
        'ModifiedOn' =>$dateNow,
        'UserID' =>$UserID,
        'SBB' =>$SBB,
        'SBA' =>$SBA,
        'CBB' =>$CBB,
        'CBA' =>$CBA
           
          
           ]);

    }

    public static function UpdateCaT($PID,$TTname,$amount,$ttype,$dateNow){


        $CID=DB::table('tbladditionalcostandprofits')->insertGetId(['PID'=> $PID, 
        'CPName' =>$TTname,
        'Amount' =>$amount,
        'TType' =>$ttype,
        'DateStamp'=>$dateNow
           
          
           ]);
           return $CID;
    }
    public static function getChargesOrComissions($PID,$TTname,$ttype){


        $amount = DB::table('tbladditionalcostandprofits')
            ->where([['PID', '=', $PID],
            ['CPName', '=', $TTname],
            ['TType', '=', $ttype]]         
            
            )
             ->get();

        


        if($amount->isEmpty()){
           
            return 0;

        }else{
          
            return $amount[0]->Amount;
        }
        
    }

}

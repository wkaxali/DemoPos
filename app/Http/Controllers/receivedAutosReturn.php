<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use DB;
class receivedAutosReturn extends Controller
{
    public static function autoReturn($PID){
            
          
        $dateNow = Carbon::now()->toDateString();
        $LID=globalVarriablesController::selfLedgerID();
        $oldBalance= LedgerPartiesController::getPartyBalance($LID);

        $autoData = DB::table('instock')
        ->where('ProductSerial', '=', $PID)
        ->get();
        $oldPrice=floatval($autoData[0]->TotalCost);
        $FJW=1;
        $oldBalance= LedgerPartiesController::getPartyBalance($FJW);
        $currentBalance=floatval($oldBalance)-floatval($oldPrice);
        LedgerPartiesController::UpdatePartiesBalance($FJW,$currentBalance);

        DB::table('instock')
        ->where('ProductSerial', $PID)
        ->update(['Remarks'=>"Returned on ".$dateNow,
        'Status'=>'Returned'
        ]);

        $InvoiceNo = DB::table('tblpurchaseoorderdetaile')
        ->where('ProductSerial', $PID)
        ->first()->SID;

        DB::table('tblpurchaseoorderdetaile')
        ->where('ProductSerial', $PID)
        ->update([
            'DilevedStatus'=>"Returned"
        ]);

        TransactionFlow::addTransaction($InvoiceNo,"Credit",'Vehicle Return',$oldPrice,$dateNow,
        NULL,$oldBalance,$currentBalance,NULL,null,1,NULL,NULL,2,NULL,NULL,Null);
    
    
        return $PID;

    }
}

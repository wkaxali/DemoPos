<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class receivedAutosReturn extends Controller
{
    public static function autoReturn(){
            
          $PID=$oneProduct[0];
          $color=$oneProduct[1];
          $chasisNumber= $oneProduct[2];
          $EngineNumber=$oneProduct[3];
         $TransportCharges =$oneProduct[4];
         $Remarks =$oneProduct[5];
          $status=$oneProduct[6];
          $dateNow = Carbon::now()->toDateString();
       //$dateNow =  Carbon::createFromFormat('Y-m-d', $dateRaw)->format('d-F-Y');
 
      $LID=globalVarriablesController::selfLedgerID();
      $oldBalance= LedgerPartiesController::getPartyBalance($LID);

      // $autoData = DB::table('tbltransactionflow')
      // ->where('InvoiceNo', '=', $InvoiceNumber)
      // ->get();
      //     return $autoData->Amount;
 
      $paidVia=$AID;
      $CID= AdditionalTaxesAndCommissionsController::AddTaxOrComminssion ( "Transportation Charges",
      $TransportCharges,NULL,"COST",$PID,NULL,NULL,$dateNow);
      TransactionFlow::addTransaction($InvoiceNumber,"Debit",'Transportation Charges',$TransportCharges,$dateNow,
      "1",null,null,NULL,null,$LID,NULL,NULL,NULL,$paidVia,$CID,Null);

      $oldBalance= LedgerPartiesController::getPartyBalance($LID);
      $currentBalance=floatval($oldBalance)-floatval($TransportCharges);
      LedgerPartiesController::UpdatePartiesBalance($LID,$currentBalance);

      $AID=$paidVia;//This needs o be changed in production
      $OldAccBalance=accountsController::getAccountBalance($AID);
      $newAccountBalance=floatval($OldAccBalance)-floatval($TransportCharges);
      accountsController::UpdateNewBalance($AID,$newAccountBalance);
      $autoData = DB::table('instock')
      ->where('ProductSerial', '=', $PID)
      ->get();
      $oldPrice=floatval($autoData[0]->TotalCost);

      $FJW=1;
      $oldBalance= LedgerPartiesController::getPartyBalance($FJW);
      $currentBalance=floatval($oldBalance)-floatval($oldPrice);
      LedgerPartiesController::UpdatePartiesBalance($FJW,$currentBalance);

      TransactionFlow::addTransaction($InvoiceNumber,"Credit",'Vehicle Return',$oldPrice,$dateNow,
      NULL,NULL,null,NULL,null,1,NULL,NULL,2,NULL,NULL,Null);
      
      
      DB::table('productdefination')
      ->where('ProductSerial', $PID)
      ->update(['EngineNumber' =>$EngineNumber,
      'ChasisNumber' =>$chasisNumber,
      'Remarks' =>$Remarks,
      'color' =>$color
      ]);

      DB::table('instock')
      ->where('ProductSerial', $PID)
      ->update(['Remarks'=>"Returned on ".$dateNow,
      'TotalCost' =>$oldPrice,
      'Status'=>'Returned'
      ]);

      DB::table('tblpurchaseoorderdetaile')
      ->where('ProductSerial', $PID)
      ->update(['DilevedStatus'=>"Returned"
      ]);
 

  
    
         //->format('Y-m-d h:iA');
        // $d= Carbon::createFromFormat('dd/mm/YYYY HH:MM:SS', $dateNow);
 
    return $AID;

    }
}

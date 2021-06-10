<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class deletePaymentController extends Controller
{
    public static function deletePayment($TID){

        $transaction = DB::table('tbltransactionflow')
            ->where('TransactionID', '=', $TID);
             

        $amount = $transaction->first()->Amount;
        $AID = $transaction->first()->PaidVia;

        $ledgerID=globalVarriablesController::selfLedgerID();
        $oldSelfBalance= LedgerPartiesController::getPartyBalance($ledgerID);
        $newSelfBalance = floatval($oldSelfBalance) + floatval($amount);

        $oldAccBalance=accountsController::getAccountBalance($AID);
        $newAccountBalance = floatval($oldAccBalance) + floatval($amount);
        $PartyLID = $transaction->first()->PaidTo;
        if($PartyLID!=NULL){
            $oldPartyBalance= LedgerPartiesController::getPartyBalance($PartyLID);
            $newPartyBalance = floatval($oldSelfBalance) + floatval($amount);
            LedgerPartiesController::UpdatePartiesBalance($PartyLID, $newPartyBalance);
            LedgerPartiesController::UpdatePartiesBalance($ledgerID, $newSelfBalance);
        }
        
        accountsController::UpdateNewBalance($AID,$newAccountBalance);
        
        
        $deleteTransaction = DB::delete("delete from tbltransactionflow where TransactionID=".$TID);

        return "Pay number $TID is deleted";
    }
}

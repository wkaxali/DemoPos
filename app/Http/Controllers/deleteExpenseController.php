<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class deleteExpenseController extends Controller
{
    public static function deleteExpense($EID){

        $expenseFlow = DB::table('tblexpanseflow')
            ->where('ExpanseID', '=', $EID);
             
        $expenseTransaction = DB::table('tbltransactionflow')
            ->where('EID', '=', $EID);

        $amount = $expenseFlow->first()->Amount;
        $AID = $expenseTransaction->first()->PaidVia;

        $LID=globalVarriablesController::selfLedgerID();
        $oldAccBalance=accountsController::getAccountBalance($AID);
        $oldSelfBalance= LedgerPartiesController::getPartyBalance($LID);
        $newAccountBalance = floatval($oldAccBalance) + floatval($amount);
        $newSelfBalance = floatval($oldSelfBalance) + floatval($amount);

        LedgerPartiesController::UpdatePartiesBalance($LID, $newSelfBalance);
        accountsController::UpdateNewBalance($AID,$newAccountBalance);
        
        $deleteExpense = DB::delete("delete from tblexpanseflow where ExpanseID=".$EID);
        $deleteTransaction = DB::delete("delete from tbltransactionflow where EID=".$EID);

        return "Expense number $EID is deleted";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deleteExpenseController extends Controller
{
    public static function deleteExpense($EID){
        $expense = DB::select("select * from tblexpanseflow where ExpanseID =".$EID);
        $expenseTransaction = DB::select("select * from tbltransactionflow where ExpanseID =".$EID);

        $amount = $expense->Amount;
        $AID = $expenseTransaction->PaidVia;

        $oldAccBalance=accountsController::getAccountBalance($AID);
        $oldSelfBalance= LedgerPartiesController::getPartyBalance(2);
        $newAccountBalance = floatval($oldAccBalance) + floatval($amount);
        $newSelfBalance = floatval($oldSelfBalance) + floatval($amount);

        LedgerPartiesController::UpdatePartiesBalance(2, $newSelfBalance);
        accountsController::UpdateNewBalance($AID,$newAccountBalance);
        
        $deleteExpense = DB::delete("delete from tblexpanseflow where ExpanseID=".$EID);
        $deleteTransaction = DB::delete("delete from tbltransactionflow where ExpanseID=".$EID);
    }
}

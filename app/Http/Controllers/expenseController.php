<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use DB;

class expenseController extends Controller
{
    public static function insertExpense(Request $request, $CO){

        $ata=json_decode($CO);
        foreach ($ata as $obj){
        $date=$obj[0];
        $amount=$obj[1];
        $expenseName=$obj[2];
        $expenseID=$obj[3];
        $paidTo=$obj[4];
        $paidBy=$obj[5];
        $remarks=$obj[6];
        $id=DB::table('tbltransactionflow')->insertGetId([
        'DateStamp'=>$date,
        'Amount'=>$amount,
        'TransactionCatogery'=>"Payment",
        'EID'=>$expenseID,
        'PaidTo'=>$paidTo,
        'PaidBy'=>$paidBy,
        'TransactionType'=>"Credit"
        ]);

        $oldSelfBalance = LedgerPartiesController::getPartyBalance(2);
        $newBalance = $oldSelfBalance - $amount;
        LedgerPartiesController::UpdatePartiesBalance(2, $newBalance);
        $balanceForParty=LedgerPartiesController::getPartyBalance($paidTo);
        $newBalanceOfParty=$balanceForParty-$amount;
        LedgerPartiesController::UpdatePartiesBalance($paidTo, $newBalanceOfParty);

        $oldAccountBalance = accountsController::getAccountBalance($paidBy);
        $newAccountBalance = $oldAccountBalance - $amount;
        accountsController::UpdateNewBalance($paidBy, $newAccountBalance);
        
        }
        return $id;
}

public static function getPartyNames(){
    $data=DB:: select('select * from tblledgerparties');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->LID.'>'.$d->LID.') '.$d->PartyName.'</option>';
      
    }
    return $option;
  }

  public static function getAccounts(){
    $data=DB:: select('select * from tblaccounts');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->AID.'>'.$d->AID.') '.$d->AccountName.'</option>';
      
    }
    return $option;
  }

  public static function getExpenseHeads(){
    $data=DB:: select('select * from tblexpenseheads');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->ID.'>'.$d->ID.') '.$d->ExpenseHead.'</option>';
      
    }
    return $option;
  }


}

  
  
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
        $LID=2;
        $amount=$obj[1];
        $expenseName=$obj[2];
        $expenseID=$obj[3];
        $paidVia=$obj[4];
        $remarks=$obj[5];
        
        $id=DB::table('tbltransactionflow')->insertGetId([
        'DateStamp'=>$date,
        'Amount'=>$amount,
        'TransactionCatogery'=>"Expense",
        'EID'=>$expenseID,
        
        'PaidVia'=>$paidVia,
        'TransactionType'=>"Debit"
        ]);

        DB::table('tblexpanseflow')->insertGetId([
          
          'ExpanseHeadID'=>$expenseID,
          // 'ExpanseHeadID'=>$amount,
          'Remarks'=>"$remarks",
          'DateStamp'=>$date,
          
          'Amount'=>$amount,
          ]);

        $oldSelfBalance = LedgerPartiesController::getPartyBalance($LID);
        $newBalance = $oldSelfBalance - $amount;
        LedgerPartiesController::UpdatePartiesBalance($LID, $newBalance);
        //$balanceForParty=LedgerPartiesController::getPartyBalance($paidTo);
        //$newBalanceOfParty=$balanceForParty-$amount;
        //LedgerPartiesController::UpdatePartiesBalance($paidTo, $newBalanceOfParty);

        $oldAccountBalance = accountsController::getAccountBalance($paidVia);
        $newAccountBalance = $oldAccountBalance - $amount;
        accountsController::UpdateNewBalance($paidVia, $newAccountBalance);
        
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
    $data=DB:: select('select * from tblexpenseheads where ExpenseHead <> "Payment"');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->ID.'>'.$d->ID.') '.$d->ExpenseHead.'</option>';
      
    }
    return $option;
  }


  function viewExpense(){
    $data=DB:: select('select * from vw_expensetransactionflow');
    return $data;
  }

  public static function addExpenseHead($CO){
    $ata=json_decode($CO);
    $expenseHead=$ata[0];
    $remarks=$ata[1];
    $ex=DB::table('tblexpenseheads')->insertGetId([
      'ExpenseHead'=>$expenseHead,
      'Remarks'=>$remarks,
      
      ]);
    return $ex;
  }
  
  public function getExpenses(){
    $results=DB::select('select * from tblexpanseflow');
   // mysql_insert_id()
    return $results;

}

    // deleteExpense

}
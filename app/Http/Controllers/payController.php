<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use DB;

class payController extends Controller
{

  public static function insertPayment(Request $request, $CO){

    $ata=json_decode($CO);
        foreach ($ata as $obj){
        $date=$obj[0];
        $LID=2;
        $amount=$obj[1];
        $expenseName=$obj[2];
        $expenseID=$obj[3];
        $paidTo=$obj[4];
        $paidVia=$obj[5];
        $remarks=$obj[6];
        $id=DB::table('tbltransactionflow')->insertGetId([
        'DateStamp'=>$date,
        'Amount'=>$amount,
        'TransactionCatogery'=>"Payment",
        'EID'=>$expenseID,
        'PaidTo'=>$paidTo,
        'PaidVia'=>$paidVia,
        'TransactionType'=>"Credit"
        ]);

    $oldSelfBalance = LedgerPartiesController::getPartyBalance($LID);
    $newBalance = $oldSelfBalance - $amount;
    LedgerPartiesController::UpdatePartiesBalance($LID, $newBalance);
    $balanceForParty=LedgerPartiesController::getPartyBalance($paidTo);
    $newBalanceOfParty=$balanceForParty-$amount;
    LedgerPartiesController::UpdatePartiesBalance($paidTo, $newBalanceOfParty);

    $oldAccountBalance = accountsController::getAccountBalance($paidVia);
    $newAccountBalance = $oldAccountBalance - $amount;
    accountsController::UpdateNewBalance($paidVia, $newAccountBalance);
    
    }
    return $id;
}

public static function getEmployeeName(){
    $data=DB:: select('select * from tblemployees');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->FirstName.'</option>';
      
    }
    return $option;
  }


  public static function getEmployeeCNIC(){
    $data=DB:: select('select * from tblemployees');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->CNIC.'</option>';
      
    }
    return $option;
  }

  public static function getEmployeeID(){
    $data=DB:: select('select * from tblemployees');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->EID.'</option>';
      
    }
    return $option;
  }

  public static function getEmployeeContact(){
    $data=DB:: select('select * from tblemployees');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->ContactNo.'</option>';
      
    }
    return $option;
  }

  public static function getEmpbyID(Request $request, $ID){
   
   // return $ID;
    $data=DB:: select('select * from vw_employeealowncspay where EID ='.$ID );

    
    return $data;
  }

}

  
  
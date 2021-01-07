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
        'TransactionCatogery'=>"Expense",
        'EID'=>$expenseID,
        'PaidTo'=>$paidTo,
        'PaidBy'=>$paidBy,
        'TransactionType'=>"Credit"
        ]);
        }
        return $id;
}

public static function getExpenseHeads(){
    $data=DB:: select('select * from tblexpenseheads');
    
    $option='';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->ID.'>'.$d->ExpenseHead.'</option>';
      
    }
    return $option;
  }
}

  
  
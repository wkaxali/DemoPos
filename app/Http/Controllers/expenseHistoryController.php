<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class expenseHistoryController extends Controller
{
    public static function getPurchasesHistory(){
        $data=DB:: select('select * from vw_purchase_transactions where TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order"');
        $totalpurchaseAmount=0;
        $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalpurchaseAmount += floatval($d->TotalAmount);
            $remainingAmount += floatval($d->AmountPaid);
            $invoiceBalance += floatval($d->Balance);
          }
        return [$data, $totalpurchaseAmount, $remainingAmount, $invoiceBalance];
    }
}

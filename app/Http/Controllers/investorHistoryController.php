<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class investorHistoryController extends Controller
{
    public static function investorPaymentHistory(){
        $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo IS NOT NULL and PaidTo <>0');
        $totalSaleAmount=0;
        $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalSaleAmount += floatval($d->Amount);
            $remainingAmount += floatval($d->AmountPaid);
            $invoiceBalance += floatval($d->RemainingBalance);
          }
          return [$data, $totalSaleAmount, $remainingAmount, $invoiceBalance];
    }

    public static function filterInvestorPaymentHistory($partyID){
        $data=0;
        if($partyID=="All"){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo IS NOT NULL and PaidTo <> 0');
        
        }
        else if($partyID!="All"){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo IS NOT NULL and PaidTo ='.$partyID);
        
        }

        $totalSaleAmount=0;
        $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalSaleAmount += floatval($d->Amount);
            $remainingAmount += floatval($d->AmountPaid);
            $invoiceBalance += floatval($d->RemainingBalance);
        }
        return [$data, $totalSaleAmount, $remainingAmount, $invoiceBalance];
    }

    public static function filterInvestorDateData($date1,$date2,$partyID){
        $data=0;
        if($partyID=="All"){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo IS NOT NULL and PaidTo <> 0 and DateStamp between "'.$date1.'"and"'.$date2.'"');
        
        }
        else if($partyID!="All"){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo='.$partyID.' and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }
        $totalSaleAmount=0;
        $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalSaleAmount += floatval($d->Amount);
            $remainingAmount += floatval($d->AmountPaid);
            $invoiceBalance += floatval($d->RemainingBalance);
        }
        return [$data, $totalSaleAmount, $remainingAmount, $invoiceBalance];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class partyPaymentHistory extends Controller
{
    public static function getPartyPaymentHistory(){
        $data=DB:: select('select * from vw_transaction_flow where PaidTo IS NOT NULL and PaidTo <>0');
        $totalSaleAmount=0;
        // $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalSaleAmount += floatval($d->Amount);
             
            $invoiceBalance += floatval($d->PartyBalance);
          }
        return [$data, $totalSaleAmount,  $invoiceBalance];
    }

    public static function filterPartyPaymentHistory($partyID){
        $data=0;
        if($partyID=="All"){
            $data=DB:: select('select * from vw_transaction_flow where PaidTo IS NOT NULL and PaidTo <> 0');
        
        }
        else if($partyID!="All"){
            $data=DB:: select('select * from vw_transaction_flow where PaidTo IS NOT NULL and PaidTo ='.$partyID);
        
        }

        $totalSaleAmount=0;
        // $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalSaleAmount += floatval($d->Amount);
            // $remainingAmount += floatval($d->AmountPaid);
            $invoiceBalance += floatval($d->PartyBalance);
          }
        return [$data, $totalSaleAmount,  $invoiceBalance];
    }

    public static function filterPartyPaymentDateData($date1,$date2,$partyID){
        $data=0;
        if($partyID=="All"){
            $data=DB:: select('select * from vw_transaction_flow where PaidTo IS NOT NULL and PaidTo <> 0 and DateStamp between "'.$date1.'"and"'.$date2.'"');
        
        }
        else if($partyID!="All"){
            $data=DB:: select('select * from vw_transaction_flow where PaidTo='.$partyID.' and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }
        $totalSaleAmount=0;
        // $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalSaleAmount += floatval($d->Amount);
            // $remainingAmount += floatval($d->AmountPaid);
            $invoiceBalance += floatval($d->PartyBalance);
          }
        return [$data, $totalSaleAmount,  $invoiceBalance];
    }
}

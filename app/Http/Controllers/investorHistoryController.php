<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class investorHistoryController extends Controller
{
    public static function investorPaymentHistory(){
        $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo IS NOT NULL and PaidTo <>0');
        return $data;
    }

    public static function filterInvestorPaymentHistory($partyID){
        $data=0;
        if($partyID=="All"){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo IS NOT NULL and PaidTo <> 0');
        
        }
        else if($partyID!="All"){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo IS NOT NULL and PaidTo ='.$partyID);
        
        }

        return $data;
    }

    public static function filterInvestorDateData($date1,$date2,$partyID){
        $data=0;
        if($partyID=="All"){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo IS NOT NULL and PaidTo <> 0 and DateStamp between "'.$date1.'"and"'.$date2.'"');
        
        }
        else if($partyID!="All"){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo='.$partyID.' and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }
        return $data;
    }
}

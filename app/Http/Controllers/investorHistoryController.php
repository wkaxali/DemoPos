<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class investorHistoryController extends Controller
{
    public static function investorPaymentHistory(){
        $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo IS NOT NULL and PaidTo <>0 and TransactionCatogery <> "Amount Transfer"');
        return $data;
    }

    public static function filterInvestorPaymentHistory($partyID){
        $data=0;
        if($partyID=="All"){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo IS NOT NULL and PaidTo <> 0 and TransactionCatogery <> "Amount Transfer"');
        
        }
        else if($partyID!="All"){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and  and TransactionCatogery <> "Amount Transfer" and PaidTo IS NOT NULL and PaidTo ='.$partyID);
        
        }

        return $data;
    }

    public static function filterInvestorDateData($date1,$date2,$partyID){
        $data=0;
        if($partyID=="All"){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo IS NOT NULL and PaidTo <> 0  and TransactionCatogery <> "Amount Transfer" and DateStamp between "'.$date1.'"and"'.$date2.'"');
        
        }
        else if($partyID!="All"){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo='.$partyID.'  and TransactionCatogery <> "Amount Transfer" and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }
        return $data;
    }
}

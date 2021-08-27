<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class partyPaymentHistory extends Controller
{
    public static function getPartyPaymentHistory(){
        $data=DB:: select('select * from vw_transaction_flow where PaidTo IS NOT NULL and PaidTo <>0 and TransactionCatogery <> "Amount Transfer" and TransactionCatogery <> "Customer Paid to Company"');
        return $data;
    }

    public static function filterPartyPaymentHistory($partyID){
        $data=0;
        if($partyID=="All"){
            $data=DB:: select('select * from vw_transaction_flow where PaidTo IS NOT NULL and PaidTo <> 0 and TransactionCatogery <> "Amount Transfer  and TransactionCatogery <> "Customer Paid to Company"');
        
        }
        else if($partyID!="All"){
            $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery <> "Amount Transfer"  and TransactionCatogery <> "Customer Paid to Company" and PaidTo ='.$partyID);
        
        }

        return $data;
    }

    public static function filterPartyPaymentDateData($date1,$date2,$partyID){
        $data=0;
        if($partyID=="All"){
            $data=DB:: select('select * from vw_transaction_flow where PaidTo IS NOT NULL and PaidTo <> 0  and TransactionCatogery <> "Amount Transfer"  and TransactionCatogery <> "Customer Paid to Company" and DateStamp between "'.$date1.'"and"'.$date2.'"');
        
        }
        else if($partyID!="All"){
            $data=DB:: select('select * from vw_transaction_flow where PaidTo='.$partyID.' and TransactionCatogery <> "Amount Transfer"  and TransactionCatogery <> "Customer Paid to Company" and DateStamp between "'.$date1 .'" and "'.$date2.'"');
        
        }
        return $data;
    }
}

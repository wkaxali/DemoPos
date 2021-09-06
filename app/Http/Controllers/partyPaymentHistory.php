<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class partyPaymentHistory extends Controller
{
    public static function getPartyPaymentHistory(){
        $data=DB:: select('select * from vw_all_transactions where (Category = "Supplier" or Category = "Investor") and TransactionCatogery <> "Amount Transfer"');
        return $data;
    }
    public static function filterPartyPaymentHistory($partyID){
        $data=0;
        if($partyID=="All"){
            $data=DB:: select('select * from vw_all_transactions where (Category = "Supplier" or Category = "Investor") and TransactionCatogery <> "Amount Transfer"');
        
        }
        else if($partyID!="All"){
            $data=DB:: select('select * from vw_all_transactions where TransactionCatogery <> "Amount Transfer" and PaidTo ='.$partyID);
        
        }

        return $data;
    }

    public static function filterPartyPaymentDateData($date1,$date2,$partyID){
        $data=0;
        if($partyID=="All"){
            $data=DB:: select('select * from vw_all_transactions where (Category = "Supplier" or Category = "Investor")  and TransactionCatogery <> "Amount Transfer" and DateStamp between "'.$date1.'"and"'.$date2.'"');
        
        }
        else if($partyID!="All"){
            $data=DB:: select('select * from vw_all_transactions where PaidTo='.$partyID.' and TransactionCatogery <> "Amount Transfer" and DateStamp between "'.$date1 .'" and "'.$date2.'"');
        
        }
        return $data;
    }
}

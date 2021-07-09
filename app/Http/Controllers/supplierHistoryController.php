<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class supplierHistoryController extends Controller
{
    public static function getSupplierHistory(){
        $data=DB:: select('select * from vw_transaction_flow where Category="Supplier"');
       
        return $data ;
    }

    public static function filterSupplierData($sup){
        $data=0;
        if($sup=="All"){
            $data=DB:: select('select * from vw_transaction_flow where Category="Supplier"');
        
        }
        else if($sup!="All"){
            $data=DB:: select('select * from vw_transaction_flow where Category="Supplier" and PartyName ="'.$sup.'"');
        
        }

        return $data ;
    }

    public static function filterSupplierDateData($date1,$date2,$sup){
        $data=0;
        if($sup=="All"){
            $data=DB:: select('select * from vw_transaction_flow where Category="Supplier" and DateStamp between "'.$date1.'"and"'.$date2.'"');
        
        }
        else if($sup!="All"){
            $data=DB:: select('select * from vw_transaction_flow where Category="Supplier" and PartyName="'.$sup.'" and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }
        
        return $data ;
    }
}

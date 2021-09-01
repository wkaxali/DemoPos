<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class purchaseHistoryController extends Controller
{
    public static function getPurchasesHistory(){
        $data=DB:: select('select * from vw_purchase_transactions where TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order" or TransactionCatogery="Customer Paid to Company"');
        
        return $data;
    }

    public static function filterPurchaseData($catID, $partyID){
        $data=0;
        if($catID=="All" AND $partyID=="All"){
            $data=DB:: select('select * from vw_purchase_transactions where TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order" or TransactionCatogery="Booking Order" or TransactionCatogery="Customer Paid to Company');
        
        }else if($catID=="All" AND $partyID!="All"){
            
            $data=DB:: select('select * from vw_purchase_transactions where (TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order" or TransactionCatogery="Booking Order" or TransactionCatogery="Customer Paid to Company) and PaidTo='.$partyID);
           // return $data;
        }else if($catID!="All" AND $partyID=="All"){
            $data=DB:: select('select * from vw_purchase_transactions where TransactionCatogery="'.$catID.'"');
        
        }else if($catID!="All" AND $partyID!="All"){
            $data=DB:: select('select * from vw_purchase_transactions where TransactionCatogery="'.$catID.'" and PaidTo='.$partyID);
        
        }
        
        return $data;
    }



    public static function filterPurchaseDateData($date1,$date2,$catID, $partyID){
        $data=0;
        if($catID=="All" AND $partyID=="All"){
            $data=DB:: select('select * from vw_purchase_transactions where (TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order" or TransactionCatogery="Booking Order" or TransactionCatogery="Customer Paid to Company) and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }else if($catID=="All" AND $partyID!="All"){
            
            $data=DB:: select('select * from vw_purchase_transactions where (TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order" or TransactionCatogery="Booking Order" or TransactionCatogery="Customer Paid to Company) and DateStamp between "'.$date1 .'"and"'.$date2.'" and PaidTo='.$partyID);
           // return $data;
        }else if($catID!="All" AND $partyID=="All"){
            $data=DB:: select('select * from vw_purchase_transactions where TransactionCatogery="'.$catID.'" and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }else if($catID!="All" AND $partyID!="All"){
            $data=DB:: select('select * from vw_purchase_transactions where TransactionCatogery="'.$catID.'" and  DateStamp between "'.$date1 .'"and"'.$date2.'" and PaidTo='.$partyID);
        
        }
        
        return $data;
    }

    public static function purchaseStockHistory(){
        $data=DB:: select('select * from vw_purchase_transactions where TransactionCatogery="Stock Purchased"');
        return $data;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class purchaseHistoryController extends Controller
{
    public static function getPurchasesHistory(){
        $data=DB:: select('select * from vw_all_transactions where TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order"');
        $PurhaseAmountAfterDiscount=0;
        $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalpurchaseAmount += floatval($d->PurchaseTotalAmount);
            $remainingAmount += floatval($d->PurchaseAmountPaid);
            $invoiceBalance += floatval($d->PurchaseRemainingBalance);
          }
        return [$data, $totalpurchaseAmount, $remainingAmount, $invoiceBalance];
    }

    public static function filterPurchaseData($catID, $partyID){
        $data=0;
        if($catID=="All" AND $partyID=="All"){
            $data=DB:: select('select * from vw_all_transactions where TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order"');
        
        }else if($catID=="All" AND $partyID!="All"){
            
            $data=DB:: select('select * from vw_all_transactions where (TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order") and PaidTo='.$partyID);
           // return $data;
        }else if($catID!="All" AND $partyID=="All"){
            $data=DB:: select('select * from vw_all_transactions where TransactionCatogery="'.$catID.'"');
        
        }else if($catID!="All" AND $partyID!="All"){
            $data=DB:: select('select * from vw_all_transactions where TransactionCatogery="'.$catID.'" and PaidTo='.$partyID);
        
        }
        $totalSaleAmount=0;
        $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalSaleAmount += floatval($d->PurchaseTotalAmount);
            $remainingAmount += floatval($d->PurchaseAmountPaid);
            $invoiceBalance += floatval($d->PurchaseRemainingBalance);
          }
        return [$data, $totalSaleAmount, $remainingAmount, $invoiceBalance];
    }



    public static function filterPurchaseDateData($date1,$date2,$catID, $partyID){
        $data=0;
        if($catID=="All" AND $partyID=="All"){
            $data=DB:: select('select * from vw_all_transactions where (TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order") and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }else if($catID=="All" AND $partyID!="All"){
            
            $data=DB:: select('select * from vw_all_transactions where (TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order") and DateStamp between "'.$date1 .'"and"'.$date2.'" and PaidTo='.$partyID);
           // return $data;
        }else if($catID!="All" AND $partyID=="All"){
            $data=DB:: select('select * from vw_all_transactions where TransactionCatogery="'.$catID.'" and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }else if($catID!="All" AND $partyID!="All"){
            $data=DB:: select('select * from vw_all_transactions where TransactionCatogery="'.$catID.'" and  DateStamp between "'.$date1 .'"and"'.$date2.'" and PaidTo='.$partyID);
        
        }
        $totalSaleAmount=0;
        $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalSaleAmount += floatval($d->PurchaseTotalAmount);
            $remainingAmount += floatval($d->PurchaseAmountPaid);
            $invoiceBalance += floatval($d->PurchaseRemainingBalance);
          }
        return [$data, $totalSaleAmount, $remainingAmount, $invoiceBalance];
    }

    public static function purchaseStockHistory(){
        $data=DB:: select('select * from vw_all_transactions where TransactionCatogery="Stock Purchased"');
        return $data;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class salesHistoryController extends Controller
{
    public static function getSalesHistory(){
        $data=DB:: select('select * from vw_transactionflow_sales where TransactionCatogery="Stock and Service" or TransactionCatogery="Sales"');
        $PurchaseTotalAmount=0;
        $PurchaseAmountPaid=0;
        $PurchaseRemainingBalance=0;
        foreach($data as $d){
            $PurchaseTotalAmount += floatval($d->PurchaseTotalAmount);
            $PurchaseAmountPaid += floatval($d->PurchaseAmountPaid);
            $PurchaseRemainingBalance += floatval($d->PurchaseRemainingBalance);
          }
        return [$data, $PurchaseTotalAmount, $PurchaseAmountPaid, $PurchaseRemainingBalance];
    }

    public static function filterSalesHistory($catID, $customerID){
        $data=0;
        if($catID=="All" AND $customerID=="All"){
            $data=DB:: select('select * from vw_transactionflow_sales where TransactionCatogery="Stock and Service" or TransactionCatogery="Sales"');
        
        }else if($catID=="All" AND $customerID!="All"){
            
            $data=DB:: select('select * from vw_transactionflow_sales where (TransactionCatogery="Stock and Service" or TransactionCatogery="Sales") and CustomerID='.$customerID);
           
        }else if($catID!="All" AND $customerID=="All"){
            $data=DB:: select('select * from vw_transactionflow_sales where TransactionCatogery="'.$catID.'"');
        
        }else if($catID!="All" AND $customerID!="All"){
            $data=DB:: select('select * from vw_transactionflow_sales where TransactionCatogery="'.$catID.'" and CustomerID='.$customerID);
        
        }
        $PurchaseTotalAmount=0;
        $PurchaseAmountPaid=0;
        $PurchaseRemainingBalance=0;
        foreach($data as $d){
            $PurchaseTotalAmount += floatval($d->PurchaseTotalAmount);
            $PurchaseAmountPaid += floatval($d->PurchaseAmountPaid);
            $PurchaseRemainingBalance += floatval($d->PurchaseRemainingBalance);
          }
        return [$data, $PurchaseTotalAmount, $PurchaseAmountPaid, $PurchaseRemainingBalance];
    }

    public static function filterSalesDateData($date1,$date2,$catID, $customerID){
        $data=0;
        if($catID=="All" AND $customerID=="All"){
            $data=DB:: select('select * from vw_transactionflow_sales where (TransactionCatogery="Stock and Service" or TransactionCatogery="Sales") and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }else if($catID=="All" AND $customerID!="All"){
            
            $data=DB:: select('select * from vw_transactionflow_sales where (TransactionCatogery="Stock and Service" or TransactionCatogery="Sales") and DateStamp between "'.$date1 .'" and "'.$date2.'" and CustomerID='.$customerID);
           
        }else if($catID!="All" AND $customerID=="All"){
            $data=DB:: select('select * from vw_transactionflow_sales where TransactionCatogery="'.$catID.'" and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }else if($catID!="All" AND $customerID!="All"){
            $data=DB:: select('select * from vw_transactionflow_sales where TransactionCatogery="'.$catID.'" and  DateStamp between "'.$date1 .'"and"'.$date2.'" and CustomerID='.$customerID);
        
        }
        $PurchaseTotalAmount=0;
        $PurchaseAmountPaid=0;
        $PurchaseRemainingBalance=0;
        foreach($data as $d){
            $PurchaseTotalAmount += floatval($d->PurchaseTotalAmount);
            $PurchaseAmountPaid += floatval($d->PurchaseAmountPaid);
            $PurchaseRemainingBalance += floatval($d->PurchaseRemainingBalance);
          }
        return [$data, $PurchaseTotalAmount, $PurchaseAmountPaid, $PurchaseRemainingBalance];
    }
    
    public static function saleStockHistory(){
        $data=DB:: select('select * from vw_transactionflow_sales where TransactionCatogery="Stock and Service"');
        return $data;
    }
}

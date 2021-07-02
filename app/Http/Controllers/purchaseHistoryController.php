<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class purchaseHistoryController extends Controller
{
    public static function getPurchasesHistory(){
        $data=DB:: select('select * from vw_purchase_transactions where TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order"');
        $totalpurchaseAmount=0;
        $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalpurchaseAmount += floatval($d->TotalAmount);
            $remainingAmount += floatval($d->AmountPaid);
            $invoiceBalance += floatval($d->Balance);
          }
        return [$data, $totalpurchaseAmount, $remainingAmount, $invoiceBalance];
    }

    public static function filterSalesHistory($catID, $customerID){
        $data=0;
        if($catID=="All" AND $customerID=="All"){
            $data=DB:: select('select * from vw_customersale_invoice where TransactionCatogery="Stock and Service" or TransactionCatogery="Sales"');
        
        }else if($catID=="All" AND $customerID!="All"){
            
            $data=DB:: select('select * from vw_customersale_invoice where (TransactionCatogery="Stock and Service" or TransactionCatogery="Sales") and CustomerID='.$customerID);
           // return $data;
        }else if($catID!="All" AND $customerID=="All"){
            $data=DB:: select('select * from vw_customersale_invoice where TransactionCatogery="'.$catID.'"');
        
        }else if($catID!="All" AND $customerID!="All"){
            $data=DB:: select('select * from vw_customersale_invoice where TransactionCatogery="'.$catID.'" and CustomerID='.$customerID);
        
        }
        $totalSaleAmount=0;
        $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalSaleAmount += floatval($d->TotalAmount);
            $remainingAmount += floatval($d->AmountPaid);
            $invoiceBalance += floatval($d->Balance);
          }
        return [$data, $totalSaleAmount, $remainingAmount, $invoiceBalance];
    }
}

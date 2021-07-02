<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class purchaseHistoryController extends Controller
{
    public static function getSalesHistory(){
        $data=DB:: select('select * from vw_customersale_invoice where TransactionCatogery="Stock and Service" or TransactionCatogery="Sales"');
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

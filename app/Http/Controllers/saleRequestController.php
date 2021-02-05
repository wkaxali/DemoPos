<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class saleRequestController extends Controller
{
    public function getInvoiceSaleRequest($InvoiceNo){
        
        $re = DB::table('vw_customersale_invoice')
        ->where('InvoiceNumber', '=', $InvoiceNo)
         ->first();
        // $product = collect([1,2,3,4]);
        // session(['invoiceDetails'=>$product]);
        session(['customerName' => $re->CustomerName]);
        session(['CNIC' => $re->CNIC]);
        session(['address' => $re->Address]);
        // session(['fatherName' => $fatherName]);
        // session(['CNIC' => $CNIC]);
        // session(['address' => $address]);
        session(['engineNo' => $re->EngineNumber]);
        session(['chassisNo' => $re->ChasisNumber]);
        // session(['Amount' => $AmountAfterDiscount]);
        // session(['total' => $amp]);
        // session(['invoiceDate' => $dateNow]);
        // session(['description' => $description]);
        session(['color' => $re->color]);
        // session(['invoiceNo' => $invoiceNumber]);
        session(['productName' => $re->ProductName]);
        session(['price' => $re->PerUnitSalePrice]);
        // session(['quantity' => '1']);
        // session(['city' => $city]);
        // session(['referenceNumber' => 'FMM-GDP-000'.$invoiceNumber]);
        // session(['amountPaid' => $amp]);
        // session(['balance' => $rmb]);
        // session(['totalCost' => $totalCost]);
        // session(['receivedBy' => $receivedBy]);
        // session(['receiptNumber' => 'FMM-10-20-00'.$invoiceNumber]);
        // session(['tax' => $AmountAfterDiscount]);
        session(['contact' => $re->Contect]);
        
        //return $results;

    }

}

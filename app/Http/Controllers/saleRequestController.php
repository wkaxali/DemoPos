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
        session(['customerName' => $re->CustomerID]);
        session(['CNIC' => $re->TotalAmount]);
        
        // session(['fatherName' => $fatherName]);
        // session(['CNIC' => $CNIC]);
        // session(['address' => $address]);
        // session(['engineNo' => $engineNo]);
        // session(['chassisNo' => $chassisNo]);
        // session(['Amount' => $AmountAfterDiscount]);
        // session(['total' => $amp]);
        // session(['invoiceDate' => $dateNow]);
        // session(['description' => $description]);
        // session(['color' => $color]);
        // session(['invoiceNo' => $invoiceNumber]);
        // session(['productName' => $productName]);
        // session(['price' => $tot]);
        // session(['quantity' => '1']);
        // session(['city' => $city]);
        // session(['referenceNumber' => 'FMM-GDP-000'.$invoiceNumber]);
        // session(['amountPaid' => $amp]);
        // session(['balance' => $rmb]);
        // session(['totalCost' => $totalCost]);
        // session(['receivedBy' => $receivedBy]);
        // session(['receiptNumber' => 'FMM-10-20-00'.$invoiceNumber]);
        // session(['tax' => $AmountAfterDiscount]);
        // session(['contact' => $contact]);
        
        //return $results;

    }

}

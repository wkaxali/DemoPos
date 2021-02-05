<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;

use NumberToWords\NumberToWords;
//https://github.com/kwn/number-to-words

class saleRequestController extends Controller
{
    public function saveQuoations($dateNow, $invoiceNumber, $city, $receivedBy){    
        DB::table('tbl_print_docs')->insertGetId([
            'invoiceDate' => $dateNow,
            'invoiceNo' => $invoiceNumber,
            'city' => $city,
            'receivedBy' => $receivedBy,
           ]);
        }


    public function getInvoiceSaleRequest($InvoiceNo){
        $dateNow= Carbon::now()->toDateString();//->format('Y-m-d h:iA');
        $re = DB::table('vw_customersale_invoice')
        ->where('InvoiceNumber', '=', $InvoiceNo)
         ->first();

        session(['invoiceNo' => $InvoiceNo]);
        session(['customerID' => $re->CustomerID]);
        session(['itemNo' => $re->ProductSerial]);
        session(['quantity' => $re->Quantity]);
        session(['unitPrice' => $re->PerUnitSalePrice]);
        session(['productName' => $re->ProductName]);
        session(['price' => $re->PerUnitSalePrice]);
        session(['contact' => $re->Contect]);
        session(['customerName' => $re->CustomerName]);
        session(['CNIC' => $re->CNIC]);
        session(['address' => $re->Address]);
        session(['engineNo' => $re->EngineNumber]);
        session(['chassisNo' => $re->ChasisNumber]);
        session(['color' => $re->color]);
        session(['fatherName' => $re->FatherName]);
        session(['total' => $re->AmountPaid]);
        session(['referenceNumber' => 'FMM-GDP-'.$InvoiceNo]);
        session(['amountPaid' => $re->AmountPaid]);
        session(['description' => $re->description]);
        
        session(['balance' => $re->Balance]);
        session(['totalCost' => $re->TotalCost]);
        session(['tax' => $re->VAT]);
        session(['endTotal' => $re->NetTotal]);
        $numberToWords = new NumberToWords();
        $numberTransformer = $numberToWords->getNumberTransformer('en');
        $a= $numberTransformer->toWords($re->AmountPaid);
        session(['amountInWords' => $a]);

        session(['receiptNumber' => 'FMM-'.$dateNow.'-'.$InvoiceNo]);
        session(['invoiceDate' => $dateNow]);
        //session(['vehRegNo' => '']);
        //session(['distanceTraveled' => '']);
        session(['Amount' =>'']);
        session(['receivedBy' => '']);
        session(['tax' => '0']);
        session(['total' => '']);
        session(['S&H' => '-']);
        session(['others' => '-']);
        session(['city' => '']);
        session(['province' => '']);
        
        
        //return $results;

    }
}

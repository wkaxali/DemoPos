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


    public static function getInvoiceSaleRequest($InvoiceNo){
        $dateNow= Carbon::now()->toDateString();//->format('Y-m-d h:iA');
        $re = DB::table('vw_customersale_invoice')
        ->where('InvoiceNumber', '=', $InvoiceNo)
         ->first();

        session(['invoiceNo' => $InvoiceNo]);
        session(['customerID' => $re->CustomerID]);
        session(['itemNo' => $re->ProductSerial]);
        session(['quantity' => $re->Quantity]);
        session(['unitPrice' => number_format($re->PerUnitSalePrice)]);
        session(['productName' => $re->ProductName]);
        session(['price' => number_format($re->PerUnitSalePrice)]);
        session(['contact' => $re->Contect]);
        session(['customerName' => $re->CustomerName]);
        session(['CNIC' => $re->CNIC]);
        session(['address' => $re->Address]);
        session(['engineNo' => $re->EngineNumber]);
        session(['chassisNo' => $re->ChasisNumber]);
        session(['color' => $re->color]);
        session(['fatherName' => $re->FatherName]);
        session(['invoiceDate' => $re->DateStamp]);
        
        session(['referenceNumber' => 'FMM-GDP-'.$InvoiceNo]);
        session(['amountPaid' => number_format($re->AmountPaid)]);
        session(['description' => $re->ProductName]);
        
        session(['balance' => number_format($re->Balance)]);
        session(['totalCost' => number_format($re->TotalCost)]);
        session(['tax' => number_format($re->VAT)]);
        session(['endTotal' => number_format($re->NetTotal)]);
        $numberToWords = new NumberToWords();
        $numberTransformer = $numberToWords->getNumberTransformer('en');
        $a= $numberTransformer->toWords($re->AmountPaid);
        session(['amountInWords' => ucwords($a)]);

        session(['receiptNumber' => 'FMM-'.$dateNow.'-'.$InvoiceNo]);
        
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

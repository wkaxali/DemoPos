<?php

use NumberToWords\NumberToWords;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use NumberToWords\NumberToWords;
//https://github.com/kwn/number-to-words

use DB;

class quotationController extends Controller
{
    public function saveQuoation($CID){    
        DB::table('tbl_print_docs')->insertGetId([
            'customerName' => $customerName,
            'fatherName' => $fatherName,
            'CNIC' => $CNIC,
            'address' => $address,
            'engineNo' => $engineNo,
            'chassisNo' => $chassisNo,
            'Amount' => $AmountAfterDiscount,
            'total' => $amp,
            'invoiceDate' => $dateNow,
            'description' => $description,
            'color' => $color,
            'invoiceNo' => $invoiceNumber,
            'productName' => $productName,
            'price' => $tot,
            'quantity' => '1',
            'city' => $city,
            'referenceNumber' => 'FMM-GDP-000'.$invoiceNumber,
            'amountPaid' => $amp,
            'balance' => $rmb,
            //'totalCost' => $totalCost,
            'receivedBy' => $receivedBy,
            'receiptNumber' => 'FMM-10-20-00'.$invoiceNumber,
            'tax' => $AmountAfterDiscount
           ]);
        }


        public function createQuotation(Request $request,$data){
     
            $Array=json_decode($data);
            $customerName = $Array[0];
            $fatherName = $Array[1];
            $CNIC = $Array[2];
            $city = $Array[3];
            $address = $Array[4];
            $contact = $Array[5];
            $description = $Array[6];
            $color = $Array[7];
            $unitPrice = $Array[8];
            $quantity = $Array[9];
            $totalPrice = $Array[10];
            $model = $Array[11];
            $date = Carbon::now()->toDateString();

            $numberToWords = new NumberToWords();
            $numberTransformer = $numberToWords->getNumberTransformer('en');
            $a= $numberTransformer->toWords($totalPrice);
            //there will query that will store information to database

            session(['amountInWords' => $a]);
            session(['customerName' => $customerName]);
            session(['fatherName' => $fatherName]);
            session(['CNIC' => $CNIC]);
            session(['address' => $address]);
            session(['Amount' => $unitPrice]);
            session(['total' => $totalPrice]);
            session(['invoiceDate' => $date]);
            session(['description' => $description]);
            session(['color' => $color]);
            session(['productName' => $model]);
            session(['quantity' => $quantity]);
            session(['city' => $city]);
            
            return 'for '.$description.' ';
        
            
            }
}

<?php

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
}

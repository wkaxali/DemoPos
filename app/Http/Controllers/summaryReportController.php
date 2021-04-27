<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class summaryReportController extends Controller
{
  
    function foo(){
        $this->$n=90;
    }

    public static function soldUnits(Request $request,$CO){
        // $obj=json_decode($CO);
        // $date1=$obj[0];
        // $date2=$obj[1];

        $date1='"2020-01-24 13:18:16"';
        $date2='"2021-05-24 13:18:16"';

        $data=DB:: select('SELECT ProductSerial,ProductName,count(*) as UnitsSolds FROM vw_customersale_invoice
        where DateStamp between '.$date1.' and '.$date2.'
        group by ProductSerial');

        // select("ProductSerial,ProductName", DB::raw("count(*) as UnitsSolds"))

        //                 ->groupBy('status')

        //                 ->get();

        return $data;
    }

    public static function transactions(Request $request,$CO){
        $obj=json_decode($CO);
        $date1=$obj[0];
        $date2=$obj[1];

        $date1='2020-01-24 13:18:16';
        $date2='2021-05-24 13:18:16';

        $data=DB:: select('SELECT DateStamp,TransactionCatogery,sum(Amount) as TotalAmount FROM fmm.tbltransactionflow 
        where DateStamp between '.$date1.' and '.$date2.'
       group by
        TransactionCatogery');
        return $data;
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class dashBoardDisplayData extends Controller
{
    public static function transactions(){
        $pieChartData=[['Transaction Category', 'Amount']];
        $data=DB:: select('SELECT TransactionCatogery, SUM(Amount) AS Amount
        FROM tbltransactionflow where TransactionCatogery != "null" group by TransactionCatogery');
        foreach($data as $d){
            array_push($pieChartData, [$d->TransactionCatogery, $d->Amount]);
        }

        return $pieChartData;
    }

    public static function autoStock(){
        
        $data=DB:: select('SELECT SUM(UnitsBooked) AS UnitsBooked, SUM(UnitsSold) AS UnitsSold, SUM(InStock) AS InStock
        FROM vw_auto_status');

        $UnitsBooked = floatval($data[0]->UnitsBooked);
        $UnitsSold = floatval($data[0]->UnitsSold);
        $InStock = floatval($data[0]->InStock);

        $pieChartData=[
            ['Status', 'Units'],
            ['UnitsSold',$UnitsSold],
            ['InStock', $InStock],
            ['UnitsBooked', $UnitsBooked]
        ];

        return $pieChartData;
}

    public static function getMonthlySales(){
        $date = Carbon::now()->toDateString();
            $thismonth =  Carbon::createFromFormat('Y-m-d', $date)->format('m');
        $data=DB:: select('SELECT
        COUNT(InvoiceNumber) AS TotalSales, SUM(TotalAmount) AS Amount FROM vw_customersale_invoice where Category = 1
        AND month(DateStamp)= '.$thismonth);
        return $data;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class dashBoardDisplayData extends Controller
{
    public static function getPieChartData(){
        $pieChartData=[['Transaction Category', 'Amount']];
        $data=DB:: select('SELECT TransactionCatogery, SUM(Amount) AS Amount
        FROM tbltransactionflow where TransactionCatogery != "null" group by TransactionCatogery');
        foreach($data as $d){
            array_push($pieChartData, [$d->TransactionCatogery, $d->Amount]);
        }

        return $pieChartData;
    }

    public static function getMonthlySales(){
        $date = Carbon::now()->toDateString();
            $thismonth =  Carbon::createFromFormat('Y-m-d', $date)->format('m');
        $data=DB:: select('SELECT
        COUNT(InvoiceNumber) AS TotalSales, SUM(TotalAmount) AS Amount 
        FROM vw_customersale_invoice where Category = 1
        AND month(DateStamp)= '.$thismonth);
        return $data;
    }

    public static function getMonthlyExpenses(){
        $date = Carbon::now()->toDateString();
        $thismonth =  Carbon::createFromFormat('Y-m-d', $date)->format('m');
         $data=DB:: select('SELECT
        COUNT(TransactionID) AS TotalSales, SUM(Amount) AS TotalAmount 
        FROM tbltransactionflow where TransactionCatogery = Expense
        AND month(DateStamp)= '.$thismonth);

         return $data;

    }

}

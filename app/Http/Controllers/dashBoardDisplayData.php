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
        FROM tbltransactionflow where TransactionCatogery = "Expense" AND month(DateStamp)= '.$thismonth);

         return $data;

    }

    public static function getTransactions(){

        $barGrapghData = [['Transaction Category', 'Amount']];

        $TData = DB::select('SELECT
        TransactionCatogery,
        sum(Amount) as Amount
        FROM tbltransactionflow
        group by TransactionCatogery');

        foreach($TData as $obj){
            array_push($barGrapghData, [$obj->TransactionCatogery, $obj->Amount]);
        }
        return $barGrapghData;
    }

    public static function employeeProgress(){
        $data = [];
        $date = Carbon::now()->toDateString();
        $month=Carbon::createFromFormat('Y-m-d', $date)->format('m');
        $year=Carbon::createFromFormat('Y-m-d', $date)->format('Y');
        $pay=DB::select('select * from vw_employeepay where SaleTarget<>0');
        foreach($pay as $d){
            $cm=DB::select('select * from vw_employee_sale_commission where month(date) ='.$month.' AND EID ='.$d->EID.' AND year(date) ='.$year);
            $No=0;
            $progress = 0;
            foreach($cm as $e){
                $No=$No+1;
                $progress = ($No/intval($d->SaleTarget))*100;
            }

            array_push($data, [$d->FirstName.' '.$d->LastName, $progress]);
        }
    
        return $data;
    }
}

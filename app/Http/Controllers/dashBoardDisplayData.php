<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class dashBoardDisplayData extends Controller
{
    public static function getPieChartData(){
        $pieChartData=[['Transaction Category', 'Amount']];
        $data=DB:: select('SELECT TransactionCatogery, SUM(Amount) AS Amount
        FROM tbltransactionflow where TransactionCatogery != "null"  group by TransactionCatogery');
        foreach($data as $d){
            array_push($pieChartData, [$d->TransactionCatogery, $d->Amount]);
        }

        return $pieChartData;
    }
}

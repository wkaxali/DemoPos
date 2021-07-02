<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class expenseHistoryController extends Controller
{
    public static function getExpenseHistory(){
        $data=DB:: select('select * from vw_expenses ');
        $totalAmount=0;
       
        foreach($data as $d){
            $totalAmount += floatval($d->Amount);
            
          }
        return [$data, $totalAmount ];
    }

    public static function filterExpenseData($catID){
         
        $data=DB:: select('select * from vw_expenses where ExpenseHead='.$catID);
        
        $totalAmount=0;
         
        foreach($data as $d){
            $totalAmount += floatval($d->Amount);
           
          }
        return [$data, $totalAmount ];
    }


}

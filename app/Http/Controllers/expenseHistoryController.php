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
         
       
        if($catID=="All" ){
            $data=DB:: select('select * from vw_expenses');
        }else {
            
            $data=DB:: select('select * from vw_expenses where ID='.$catID);
        }
        $totalAmount=0;
         
        foreach($data as $d){
            $totalAmount += floatval($d->Amount);
           
          }
        return [$data, $totalAmount ];
    }


    public static function filterExpenseDateData($date1,$date2,$catID ){
        $data=0;
        if($catID=="All" ){
            $data=DB:: select('select * from vw_expenses where  DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }  else if($catID!="All" ){
            $data=DB:: select('select * from vw_expenses where ID="'.$catID.'" and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }
        $totalAmount=0;
         
        foreach($data as $d){
            $totalAmount += floatval($d->Amount);
           
          }
        return [$data, $totalAmount ];
    }

    public static function getExpenseHeads(){
        $data=DB:: select('select * from tblexpenseheads where ExpenseHead <> "Payment"');
        
        $option='<option value="All">ALL</option>';
    
    
        foreach ($data as $d){
          //print $option;
    
            $option=$option.'
            <option value= '.$d->ID.'>'.$d->ID.') '.$d->ExpenseHead.'</option>';
          
        }
        return $option;
      }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class accountHistoryController extends Controller
{
     
        public static function getAccountsHistory(){
            $data=DB:: select('select * from vw_transaction_flow');
            $sum=0;
                    foreach($data as $d){
                        if($d->TransactionType=="Credit"){
                            $sum+= $d->Amount;
                        }else{
                            $sum-= $d->Amount;
                        }
                        }
                      return [$data, $sum];
        }
    
        public static function filterAccountData($AID ){
            $data=0;
            if($AID=="All" ){
                $data=DB:: select('select * from vw_transaction_flow');
            }else {
                
                $data=DB:: select('select * from vw_transaction_flow where AID='.$AID);
            }

            $sum=0;
            foreach($data as $d){
                if($d->TransactionType=="Credit"){
                    $sum+= $d->Amount;
                }else{
                    $sum-= $d->Amount;
                }
                }
              return [$data, $sum];
        }
        
        public static function filterAccountHistoryData($date1,$date2,$AID ){
            $data=0;
            if($AID=="All" ){
                $data=DB:: select('select * from vw_transaction_flow where  DateStamp between "'.$date1 .'"and"'.$date2.'"');
            
            }  else if($AID!="All" ){
                $data=DB:: select('select * from vw_transaction_flow where AID="'.$AID.'" and DateStamp between "'.$date1 .'"and"'.$date2.'"');
            
            }
            $sum=0;
                    foreach($data as $d){
                        if($d->TransactionType=="Credit"){
                            $sum+= $d->Amount;
                        }else{
                            $sum-= $d->Amount;
                        }
                        }
                      return [$data, $sum];
       
        }
    }
    
 

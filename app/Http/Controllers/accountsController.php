<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class accountsController extends Controller
{
    public static function getAccountHeads(){
        $data=DB:: select('select * from tblaccounts');
    
        $option='';
    
    
        foreach ($data as $d){
          //print $option;
    
            $option=$option.'
            <option value= '.$d->AID.'>'.$d->AccountName.'   #    '.$d->AccountNumber.'</option>';
          
        }
        return $option;


    }
    public static function getAccountBalance($AID){

       
        $re = DB::table('tblaccounts')
            ->where('AID', '=', $AID)
             ->first()->Balance;

             return $re;




    }
    public static function UpdateNewBalance($AID,$amount){

        
        DB::table('tblaccounts')
        ->where('AID', $AID)
        ->update(['Balance' =>$amount
       
        ]);
        return 'update New Balance';


    }
}

<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class accountsController extends Controller
{
    public static function getAccountHeads(){
        $data=DB:: select('select * from tblaccounts');
    
        $option='<option value=""></option>';
    
    
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
     public function addAccount(Request $request, $CO){
        
        $obj=json_decode($CO);
        $AccountName=$obj[0];
        $AccountNumber=$obj[1];
        $Balance=$obj[2];
      
        
        $CID=DB::table('tblaccounts')->insertGetId([
            'AccountName'=>$AccountName,
            'AccountNumber'=>$AccountNumber,
            'Balance'=>$Balance
            
            ]);
        return $CID." ID Account added";
    }

    public static function editAccounts(Request $request, $CO){
        $ata=json_decode($CO);
        $AID = $ata[0];
        $accName = $ata[1];
        $accNumber = $ata[2];
        $Balance = $ata[3];
       

        $re = DB::table('tblaccounts')
        ->where('AID', $AID)
        ->update([    
          'AccountName'=>$accName,
          'AccountNumber'=>$accNumber,
          'Balance'=>$Balance,
          ]);

          return $AID;

        }
          public  function getAccountsData(){ 
        $data = DB::select('select * from tblaccounts');
        return $data;
            }

        public static function showAccounts(){
            $data=DB:: select('select * from tblaccounts');
            $table='<table>';
            foreach ($data as $d){
                $table=$table.'
                    <tr>
                        <th>'.$d->AccountName.'('.$d->AccountNumber.'):</th>
                    </tr>
                    <tr>
                        <td>Balance: '.$d->Balance.'</td>
                    </tr>';
                    $total =
            
            $table=$table.'
                    <tr>
                        <th>Total Balance</th>
                    </tr>
                    <tr>
                        <td>8788</td>
                    </tr>
                </table>';
            return $table;
        }
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class accounts extends Controller
{
    
    public function showAccounts(){
        $results=DB::select('select * from tblaccounts');
        return $results;
    }


    public static function updateAccounts(Request $request, $CO){
        $ata=json_decode($CO);
        $CID = $ata[0];
        $customerName = $ata[1];
        $contact = $ata[2];
        $balance = $ata[3];

        $re = DB::table('tblaccounts')
        ->where('AID', $CID)
        ->update([
          'AccountName'=>$customerName,
          'AccountNumber'=>$contact,
      
          'Balance'=>$balance,
          ]);

          return $CID;
        }


  


public function AddAccounts(Request $request, $CO){
    
    $ata=json_decode($CO);
        $CID = $ata[0];
        $customerName = $ata[1];
        $contact = $ata[2];
        $balance = $ata[3];

        $CID=DB::table('tblaccounts')->insertGetId([
          'AccountName'=>$customerName,
          'AccountNumber'=>$contact,
      
          'Balance'=>$balance,
          ]);

          return $CID;
        }
}
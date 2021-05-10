<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class employeeAllowanceController extends Controller
{
    public function addAllowanceHead(Request $request, $CO){
        
        
        $AllowName=$CO;
   
        
        
        $CID=DB::table('tbl_allowancehead')->insertGetId([
            'AllowanceName'=>$AllowName,
 
            ]);
        return $CID;
    }



    public static function editAllowance(Request $request, $CO){
        $ata=json_decode($CO);
        $AID = $ata[0];
        $allowName = $ata[1];
       

        $re = DB::table('tbl_allowancehead')
        ->where('AllowanceID', $AID)
        ->update([
          'AllowanceName'=>$allowName ]);
          return $AID;
        }


        public function getAllowance(){
            $results=DB::select('select * from tbl_allowancehead');
            return $results;
        }
        
        public static function getAllownceHeads(){
            $data=DB:: select('select * from tbl_allowancehead');       
            $option='<option value=""></option>';
            foreach ($data as $d){
    
                $option=$option.'
                <option value= '.$d->AllowanceID.'>'.$d->AllowanceName.'</option>';
              
            }
            return $option;
    
    
        }

        
        public static function addAllowances(Request $request, $CO){

            $ata=json_decode($CO);
              
                foreach ($ata as $obj){
                  $LID=globalVarriablesController::selfLedgerID();
                  $EID=$obj[0];
                  //$empName=$obj[1];
                  $amount=$obj[2];
                  $allowanceName=$obj[3];
                  $allowanceHeadID=$obj[4];
   
                $id=DB::table('tblalownces')->insertGetId([
               
                'Amount'=>$amount,
                'EID'=>$EID,
                'AlownceHeadID'=>$allowanceHeadID
                ]); 

                $basicPay = DB::table('tblemployeepay')
                ->where('EID', '=', $EID)
                    ->first()->BasicPay;

                $allowanceTableData = DB::select('select * from tblalownces where EID ='.$EID);
                $totalAllowances = 0;
                foreach($allowanceTableData as $d){
                        $totalAllowances = $totalAllowances + ($d->Amount);
                }

                $totalPay = $basicPay + $totalAllowances;
                        if ( $totalPay==NULL){
                $up = DB::table('tblemployeepay')
                ->where('EID', $EID)
                ->update([
                  'TotalPay'=>$totalPay,
                  'Alownces'=>$totalAllowances
                  ]);
                
                        }
            //     if($PT=="Party"){
            //       $re = DB::table('tbltransactionflow')
            //         ->where('TransactionID', $id)
            //         ->update([
            //           'PaidTo'=>$paidTo,
            //       ]);
            //     }
            //     if($PT=="Employee"){
            //       $re = DB::table('tbltransactionflow')
            //         ->where('TransactionID', $id)
            //         ->update([
            //           'EmpID'=>$paidTo,
            //       ]);
            //     }
        
            // $oldSelfBalance = LedgerPartiesController::getPartyBalance($LID);
            // $newBalance = $oldSelfBalance - $amount;
            // LedgerPartiesController::UpdatePartiesBalance($LID, $newBalance);
            // if($PT=="Party"){
            //   $balanceForParty=LedgerPartiesController::getPartyBalance($paidTo);
            //   $newBalanceOfParty=$balanceForParty-$amount;
            //   LedgerPartiesController::UpdatePartiesBalance($paidTo, $newBalanceOfParty);
            // }
            // $oldAccountBalance = accountsController::getAccountBalance($paidVia);
            // $newAccountBalance = $oldAccountBalance - $amount;
            // accountsController::UpdateNewBalance($paidVia, $newAccountBalance);
            
             }
             return $id;
            
        }
}

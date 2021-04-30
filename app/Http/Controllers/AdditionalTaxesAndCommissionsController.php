<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UpdateStocksController;
use App\Http\Controllers\TransactionFlow;
use App\Http\Controllers\LedgerPartiesController;

class AdditionalTaxesAndCommissionsController extends Controller
{
    public static function AddTaxOrComminssion ( $CPName,$amount,$Remarks,$TTYPE,$PID,$CPercent,$POA,
    $dateHere){
        $CID=DB::table('tbladditionalcostandprofits')->insertGetId(['PID'=> $PID, 
        'CPName' =>$CPName,
        'Amount' =>$amount,
        'TType' =>$TTYPE,
        'DateStamp'=>$dateHere,
        'Remarks'=>$Remarks,
        'CPercent'=>$CPercent,
        'percentOfAmount'=>$POA,
        'LID'=>2
        ]);
       
        // TransactionFlow:: addTransaction(NULL,"Credit",$CPName,$amount,$dateHere,
        // "1",NULL,NULL,NULL,NULL,NULL,"0",NULL,NULL,NULL,$CID);

       
return $CID;

      
        

    }
    public function AddTaxOrCommissionNegative(Request $request,$data){

        // $(tr).find('td:eq(0)').text(),//head
        // $(tr).find('td:eq(1)').text(), //Amount
        // $(tr).find('td:eq(2)').text(), //Remarks
        // $(tr).find('td:eq(4)').text() //ComID
        $dateNow= Carbon::now()->toDateTimeString();
        $Array=json_decode($data);
        $PID=$Array[0];
        $AID=$Array[1];
        $totCostHere=0;
        
        foreach($Array[2] as $item){
            $amp=$item[1];
       self:: AddTaxOrComminssion ( $item[0],$item[1],$item[2],"Cost",$PID,NULL,NULL,
    $dateNow);
        $oldSelfBalance= LedgerPartiesController::getPartyBalance(2);
        $selfBalance=$oldSelfBalance-$item[1];
        LedgerPartiesController::UpdatePartiesBalance(2, $selfBalance);
        $totCostHere=floatval($totCostHere)+floatval($item[1]);
         TransactionFlow:: addTransaction(NULL,"Debit",$item[0],$item[1],$dateNow,
        "1",$oldSelfBalance,$selfBalance,NULL,NULL,"2","0","2",NULL,"5",null);
        $OldAccBalance=accountsController::getAccountBalance($AID);
        $newAccountBalance=floatval($OldAccBalance)-floatval($amp);
       
        accountsController::UpdateNewBalance($AID,$newAccountBalance);

        // public static function addTransaction($InvoiceNo,$TType,$Tcate,$amount,$dateStamp,
        // $UserID,$SBB,$SBA,$CBB,$CBA,$LID,$pattyCash,$paidBy,$paidTo,$paidVia,$CID)
       
    
        
   



        }
        $oldCost=UpdateStocksController::getTotalCost($PID);
        $newCost=floatval($totCostHere)+floatval($oldCost);
        UpdateStocksController::setTotalCost($PID,$newCost);


        return "Cost";

    }
    public function AddTaxOrCommissionPositive(Request $request,$data){

        
        $dateNow= Carbon::now()->toDateTimeString();
        $Array=json_decode($data);
        $PID=$Array[0];
        $TotalSaleAmount=0;
        $AID=$Array[1];;
        foreach($Array[2] as $item){
            $amp=$item[1];
       self:: AddTaxOrComminssion ( $item[0],$item[1],$item[2],"Profit",$PID,NULL,NULL,
    $dateNow);
        $oldSelfBalance= LedgerPartiesController::getPartyBalance(2);
        $selfBalance=$oldSelfBalance+$item[1];
        LedgerPartiesController::UpdatePartiesBalance(2, $selfBalance);
        $TotalSaleAmount=floatval($TotalSaleAmount)+floatval($item[1]);
         TransactionFlow:: addTransaction(NULL,"Credit",$item[0],$item[1],$dateNow,
        "1",$oldSelfBalance,$selfBalance,NULL,NULL,"2","0","2",NULL,"5",null);
        $OldAccBalance=accountsController::getAccountBalance($AID);
        $newAccountBalance=floatval($OldAccBalance)+floatval($amp);
       
        accountsController::UpdateNewBalance($AID,$newAccountBalance);

        // public static function addTransaction($InvoiceNo,$TType,$Tcate,$amount,$dateStamp,
        // $UserID,$SBB,$SBA,$CBB,$CBA,$LID,$pattyCash,$paidBy,$paidTo,$paidVia,$CID)
       
    
        
   



        }
        $oldCost=UpdateStocksController::getTotalSoldPrice($PID);
        $newCost=floatval($TotalSaleAmount)+floatval($oldCost);
        UpdateStocksController::setTotalSaleAmount($PID,$newCost);


        return 'Hola';

    }

    public static function getComissionHeads(){
        $data=DB:: select('select * from tbl_comissionheads');
        
        $option='<option value=" "></option>';
    
    
        foreach ($data as $d){
          //print $option;
    
            $option=$option.'
            <option value= '.$d->ComissionID.'>'.$d->ComissionName.'</option>';
          
        }
        return $option;
      }

      public static function getComission($PID){
        $data=DB:: select('select * from tbladditionalcostandprofits where PID ='.$PID);
        return $data;
      }
}

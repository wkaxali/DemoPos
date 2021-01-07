<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UpdateStocksController;
use App\Http\Controllers\TransactionFlow;

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
        'percentOfAmount'=>$POA
        ]);
       
        TransactionFlow:: addTransaction(NULL,"Credit",$CPName,$amount,$dateHere,
        "1",NULL,NULL,NULL,NULL,NULL,"0",NULL,NULL,NULL,$CID);

       
return $CID;

      
        

    }
    public function AddTaxOrCommission(Request $request,$data){

        // $(tr).find('td:eq(0)').text(),//head
        // $(tr).find('td:eq(1)').text(), //Amount
        // $(tr).find('td:eq(2)').text(), //Remarks
        // $(tr).find('td:eq(4)').text() //ComID
        $dateNow= Carbon::now()->toDateTimeString();
        $Array=json_decode($data);
        $PID=$Array[0];
        foreach($Array[1] as $item){

       self:: AddTaxOrComminssion ( $item[0],$item[1],$item[2],"Cost",$PID,NULL,NULL,
    $dateNow);


    $oldCost=UpdateStocksController::



        }
        return "HOLA";

    }
}

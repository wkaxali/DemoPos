<?php

namespace App\Http\Controllers;
use App\Http\Controllers\TransactionFlow;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class UpdateStocksController extends Controller
{
    function updateStockDetails(Request $request,$data){
       
        
         $Array=json_decode($data);
    foreach($Array as $oneProduct){
         $PID=$oneProduct[0];
         $chasisNumber= $oneProduct[1];
         $EngineNumber=$oneProduct[2];
        $TransportCharges =$oneProduct[3];
         $status=$oneProduct[4];
         $dateNow= Carbon::now()->toDateTimeString();
         $CID=DB::table('tbladditionalcostandprofits')->insertGetId(['PID'=> $ProductSerial, 
         'CPName' =>"Transportation Charges",
         'Amount' =>$TransportCharges,
         'TType' =>"Cost",
         'DateStamp'=>$dateNow
            
           
            ]);
            TransactionFlow::addTransaction($InvoiceNo,$TType,$amount,$dateStamp,$UserID,$SBB,$SBA,$CBB,$CBA);





          DB::table('productdefination')
            ->where('ProductSerial', $PID)
            ->update(['EngineNumber' =>$EngineNumber,
            'ChasisNumber' =>$chasisNumber
         
            ]);




         }
          
         //->format('Y-m-d h:iA');
        // $d= Carbon::createFromFormat('dd/mm/YYYY HH:MM:SS', $dateNow);
 
        return $EngineNumber;
       




    }
}

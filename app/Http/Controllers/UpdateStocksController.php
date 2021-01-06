<?php

namespace App\Http\Controllers;
use App\Http\Controllers\TransactionFlow;
use Illuminate\Http\Request;
use App\Http\Controllers\AdditionalTaxesAndCommissionsController;
use DB;
use Carbon\Carbon;

class UpdateStocksController extends Controller
{
    function updateStockDetails(Request $request,$data){
       
        
         $Array=json_decode($data);
         $InvoiceNumber=$Array[1];
    foreach($Array[0] as $oneProduct){
      if($oneProduct[4]==1){
         $PID=$oneProduct[0];
         $chasisNumber= $oneProduct[1];
         $EngineNumber=$oneProduct[2];
        $TransportCharges =$oneProduct[3];
         $status=$oneProduct[4];
         $dateNow= Carbon::now()->toDateTimeString();
        
   //here from controller of taxes
   // $CID=DB::table('tbladditionalcostandprofits')->insertGetId(['PID'=> $PID, 
        // 'CPName' =>"Transportation Charges",
        // 'Amount' =>$TransportCharges,
        // 'TType' =>"Cost",
        // 'DateStamp'=>$dateNow
           
          
        //    ]);

       $CID= AdditionalTaxesAndCommissionsController::AddTaxOrComminssion ( "Transportation Charges",
        $TransportCharges,NULL,"COST",$PID,NULL,NULL,$dateNow);
            TransactionFlow::addTransaction($InvoiceNumber,"Credit",'Transportation Charges',$TransportCharges,$dateNow,
            "1",null,null,NULL,null,NULL,NULL,NULL,NULL,NULL,$CID);
           
            $OldPrice = DB::table('instock')
            ->where('ProductSerial', '=', $PID)
             ->get();
            $CurrentPrice=floatval($OldPrice[0]->TotalCost)+floatval($TransportCharges);
            
           



          DB::table('productdefination')
            ->where('ProductSerial', $PID)
            ->update(['EngineNumber' =>$EngineNumber,
            'ChasisNumber' =>$chasisNumber
            
         
            ]);
            DB::table('instock')
            ->where('ProductSerial', $PID)
            ->update(['Remarks'=>"Delivered on ".$dateNow,
            'TotalCost' =>$CurrentPrice,
            'Status'=>'Available'
            
         
            ]);
            DB::table('tblpurchaseoorderdetaile')
            ->where('ProductSerial', $PID)
            ->update(['DilevedStatus'=>"Received"
            
         
            ]);




         }//if condition
        }
          
         //->format('Y-m-d h:iA');
        // $d= Carbon::createFromFormat('dd/mm/YYYY HH:MM:SS', $dateNow);
 
        return "Updated";
       




    }
    public function getAllProducts(){
      $results=DB::select('select * from  vw_stockdetails');
      
          
      return $results;

  }
  public function getAllAvailableProducts(){
    $results=DB::select('select * from  vw_stockdetails where StatusInStock="Available"');
    
        
    return $results;

}
public static function UpdateStockStatus($PID,$Status){

  DB::table('instock')
  ->where('ProductSerial', $PID)
  ->update([
  
  'Status'=>$Status
  

  ]);
}
}
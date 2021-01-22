<?php

namespace App\Http\Controllers;
use App\Http\Controllers\TransactionFlow;
use Illuminate\Http\Request;
use App\Http\Controllers\AdditionalTaxesAndCommissionsController;
use DB;
use Carbon\Carbon;
use App\Http\Controllers\accountsController;
class UpdateStocksController extends Controller
{
    function updateStockDetails(Request $request,$data){
       
        
         $Array=json_decode($data);
         $InvoiceNumber=$Array[1];
         $AID=$Array[2];
    foreach($Array[0] as $oneProduct){
      if($oneProduct[4]==1){
         $PID=$oneProduct[0];
         $chasisNumber= $oneProduct[1];
         $EngineNumber=$oneProduct[2];
        $TransportCharges =$oneProduct[3];
         $status=$oneProduct[4];
         $dateNow= Carbon::now()->toDateTimeString();
        
   


      $LID=2;
      $oldBalance= LedgerPartiesController::getPartyBalance($LID);
      $currentBalance=floatval($oldBalance)-floatval($TransportCharges);
      LedgerPartiesController::UpdatePartiesBalance($LID,$currentBalance);

            $paidVia=$AID;
       $CID= AdditionalTaxesAndCommissionsController::AddTaxOrComminssion ( "Transportation Charges",
        $TransportCharges,NULL,"COST",$PID,NULL,NULL,$dateNow);
            TransactionFlow::addTransaction($InvoiceNumber,"Credit",'Transportation Charges',$TransportCharges,$dateNow,
            "1",null,null,NULL,null,NULL,NULL,NULL,NULL,$paidVia,$CID);
            $AID=$paidVia;//This needs o be changed in production
            $OldAccBalance=accountsController::getAccountBalance($AID);
            $newAccountBalance=floatval($OldAccBalance)-floatval($TransportCharges);
            accountsController::UpdateNewBalance($AID,$newAccountBalance);
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
  public function getAllAutos($PC){
    $results=DB::select('select * from  vw_stockdetails where Category='.$PC.' and  StatusInStock<>"Pending"');
    
        
    return $results;

}
  public function getAllAvailableProducts(){
    $results=DB::select('select * from  vw_stockdetails where StatusInStock="Available"');
    
        
    return $results;

}
public function viewSoldStock(){
  $results=DB::select('select * from  vw_stockdetails where StatusInStock="Sold"');
  
      
  return $results;

}
public static function UpdateStockStatus($PID,$Status){

  DB::table('instock')
  ->where('ProductSerial', $PID)
  ->update([
  
  'Status'=>$Status
  

  ]);

}

public static function getTotalCost($PID){

  $OldPrice = DB::table('instock')
            ->where('ProductSerial', '=', $PID)
             ->get();

             return $OldPrice[0]->TotalCost;
}
public static function getTotalSoldPrice($PID){

  $OldPrice = DB::table('instock')
            ->where('ProductSerial', '=', $PID)
             ->get();

             return $OldPrice[0]->TotalSaleAmount;
}
public static function setTotalCost($PID,$amount){

  DB::table('instock')
  ->where('ProductSerial', $PID)
  ->update(['TotalCost'=>$amount
  

  ]);
  return "Cost Updated";

}
<<<<<<< HEAD

public function UpdateInStock(Request $request,$CO){
  $obj = json_decode($CO);

  $PID=$obj[0];
  $productName=$obj[1];
  $company=$obj[2];
  $salePrice=$obj[3];
  $purchasePrice=$obj[4];
  $stockIn=$obj[5];
  $engineNumber=$obj[6];
  $chasisNumber=$obj[7];
  
  self:: instock($PID, $productName, $company, $salePrice, $purchasePrice, $stockIn, $engineNumber, $chasisNumber);

  return $obj;
 //return "Getting from controller".$obj[0];

}

  public function instock( $PID, $productName, $company, $salePrice, $purchasePrice, $stockIn, $engineNumber, $chasisNumber)
  {
    $update_productdefination = "UPDATE productdefination SET 
    ProductName = $productName, 
    Company = $company, 
    EngineNumber = $engineNumber,
    ChasisNumber = $chasisNumber
    WHERE ProductSerial=".$PID;

    $update_instock = "UPDATE instock SET 
    StockIn = $stockIn, 
    TotalSaleAmount = $salePrice, 
    TotalCost = $purchasePrice
    WHERE StockID=".$PID;

    DB::update($update_instock);
    //DB::update($update_productdefination);
  }
=======
public static function setTotalSaleAmount($PID,$amount){

  DB::table('instock')
  ->where('ProductSerial', $PID)
  ->update(['TotalSaleAmount'=>$amount
  

  ]);
  return "Cost Updated";

}
public static function updateStock($PID,$qty){

  DB::table('instock')
  ->where('ProductSerial', $PID)
  ->update(['StockIn'=>$qty
  

  ]);
  return "Stock Update";

}
public static function getCurrentStock($PID){

  $re = DB::table('instock')
            ->where('ProductSerial', '=', $PID)
             ->get();

             return $re[0]->StockIn;
}


>>>>>>> a017343c8ec35fed1f6aea2a7f7b5b75b1981bd6


}

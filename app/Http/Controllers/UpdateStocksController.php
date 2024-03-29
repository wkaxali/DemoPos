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
      if($oneProduct[5]==1){
         $PID=$oneProduct[0];
         $color=$oneProduct[1];
         $chasisNumber= $oneProduct[2];
         $EngineNumber=$oneProduct[3];
        $TransportCharges =$oneProduct[4];
         $status=$oneProduct[5];
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
            'ChasisNumber' =>$chasisNumber,
            'color' =>$color
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
 
        return ".";
       




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
    $results=DB::select('select * from  vw_stockdetails where Status = "Available"');
    
        
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
public static function setTotalSaleAmount($PID,$amount){

  DB::table('instock')
  ->where('ProductSerial', $PID)
  ->update(['TotalSaleAmount'=>$amount
  

  ]);
  return "Sale Amount Updated";

}
public static function updateStock($PID,$stkIn){

  DB::table('instock')
  ->where('ProductSerial', $PID)
  ->update(['StockIn'=>$stkIn
  

  ]);
  return "Sale Amount Updated";

}
public function UpdateInStock(Request $request,$CO){
  $obj = json_decode($CO);

  $PID=$obj[0];
  $productName=$obj[1];
  $company=$obj[2];
  $salePrice=$obj[3];
  $purchasePrice=$obj[4];
  $stockIn=$obj[5];
  $color=$obj[6];
  $engineNumber=$obj[7];
  $chasisNumber=$obj[8];
  $status=$obj[5];
  
  self :: updateProducts($PID, $company, $engineNumber, $chasisNumber, $productName, $stockIn, $color, $salePrice, $purchasePrice, $status);
  return $obj;
 //return "Getting from controller".$obj[0];

}


  public function getInvoiceStock($InvoiceNo){
    $results=DB::select('select * from vw_suppliersale_invoice where InvoiceNumber= '.$InvoiceNo);
   // mysql_insert_id()
    return $results;

}

public static function updateProducts($PID, $company, $engineNumber, $chasisNumber, $productName, $stockIn, $color, $salePrice, $purchasePrice, $status){

  DB::table('productdefination')
  ->where('ProductSerial', $PID)
  ->update([
    'Company'=>$company,
    'color'=>$color,
    'EngineNumber'=>$engineNumber,
    'ChasisNumber'=>$chasisNumber,
    'ProductName'=>$productName
    ]);

  DB::table('instock')
  ->where('StockID', $PID)
  ->update([
    'StockIn'=>$stockIn,
    // 'Status'=>$status,
    'PerUnitSalePrice'=>$salePrice,
    'PerUnitPurchasePrice'=>$purchasePrice
    ]);
}
public static function getCurrentStock($PID){

  $re = DB::table('instock')
            ->where('ProductSerial', '=', $PID)
             ->get();

             return $re[0]->StockIn;
}

}

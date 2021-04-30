<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

use App\Http\Controllers\salesFlow;
use App\Http\Controllers\UpdateStocksController;


use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LedgerPartiesController;
use App\Http\Controllers\accountsController;

use PDF;
use NumberToWords\NumberToWords;


class saleInvoiceEditController extends Controller
{
    public function UpdateSaleInvoice(Request $request,$data,$InvoiceID){
        $Array=json_decode($data);
        $tot=$Array[1];
        $OverAllDiscount= $Array[2];
        $AmountAfterDiscount=$Array[3];
        $tax =$Array[4];
        $netTotal=$Array[5];
        $AP=$Array[6];
        $RBI=$Array[7];
         $CID=$Array[8];
         $CLB=$Array[9];

         $CCB=$Array[10];
         $AID=$Array[11];
         $ProductsInTable=$Array[0];
         ////getAllInvoiceDetails
         $oldSalesDetails=salesFlow::getAllInvoiceDetails($InvoiceID);
         foreach($oldSalesDetails as $product){
         $qty=$product->Quantity;
         $PID=$product->ProductSerial;
         $oldStock= UpdateStocksController::getCurrentStock($PID);
         $newStock= floatval($oldStock)+floatval($qty);
         UpdateStocksController::updateStock($PID,$newStock);
 
         }
        
        
        
        $amount = DB::table('tblsaleinvoice')
            ->where('InvoiceNumber', '=', $InvoiceID)
             ->first()->AmountPaid;
        $OldCID = DB::table('tblsaleinvoice')
            ->where('InvoiceNumber', '=', $InvoiceID)
             ->first()->CustomerID;
        $OldRmb = DB::table('tblsaleinvoice')
             ->where('InvoiceNumber', '=', $InvoiceID)
              ->first()->Balance;

       
       //Old customer balance Update


       $oldCustomerBalance=CustomerController::getCustomerBalance($OldCID);
       
       
       $currentCustomerBalance=floatval($oldCustomerBalance)-floatval($OldRmb);
       CustomerController::UpdateCustomerBalance($OldCID,$currentCustomerBalance);


       
       
       // Account is changed
       $OldAID = DB::table('tbltransactionflow')
       ->where([['InvoiceNo', '=', $InvoiceID],['TransactionCatogery', '=', 'Stock and Service']])
        ->first()->PaidVia;

       $OldAccBalance=accountsController::getAccountBalance($OldAID);
       $newAccountBalance=floatval($OldAccBalance)-floatval($amount);
       
       accountsController::UpdateNewBalance($OldAID ,$newAccountBalance);
       
       
       
       
       
       
       
             //Party Balance
        $SelfBalance = LedgerPartiesController::getPartyBalance(2);

        $newSelfBalance =floatval($SelfBalance) - floatval($amount);
      

        LedgerPartiesController::UpdatePartiesBalance(2, $newSelfBalance);
      //  _____________________________________________________
      //  _____________________________________________________
      //  __________________________________________Old Values Deleted___________



         self::deleteInTnblSaleInvoiceDetails($InvoiceID);
     

//+++++++++++++++++++++++++++++++++++++++++++++++++++//
       
        //_________________//
        $dateNow= Carbon::now()->toDateString();
   
     self::insertInDetailedOrder($Array[0],$InvoiceID,$dateNow);
    


     
      self::updateintblSaleInvoice($InvoiceID,$tot,$OverAllDiscount,$tax,$netTotal,$AP,$RBI,$CID,$AID);
      $oldCustomerBalance=CustomerController::getCustomerBalance($CID);
      $currentCustomerBalance=floatval($oldCustomerBalance)+floatval($RBI);
    //  //Customer Balance
      CustomerController::UpdateCustomerBalance($CID,$currentCustomerBalance);
    //  //Parties Balance
     $oldSelfBalance= LedgerPartiesController::getPartyBalance(2);
     $newSelfBalance=floatval($oldSelfBalance)+floatval($AP);
     LedgerPartiesController::UpdatePartiesBalance(2, $newSelfBalance);
    //  //Accounts Balance
      $OldAccBalance=accountsController::getAccountBalance($AID);
        $newAccountBalance=floatval($OldAccBalance)+floatval($AP);
       
       accountsController::UpdateNewBalance($AID,$newAccountBalance);

     //TransactioFlow Edit
 
   
     }
     public function insertInDetailedOrder($OrderDetails,$InvoiceID,$date){
        foreach ($OrderDetails as $row){
  
        $DSID=DB::table('tblsaledetailedinvoice')->insertGetId(['InvoiceNumber'=>$InvoiceID,
        'ProductSerial'=>$row[0],
        'SalePrice'=>$row[1],
        'Quantity'=>$row[2],
        'DiscountOffered'=>$row[3],
        'DateStamp'=>$date,
        
        'TotalAmount'=>0,
        'NetAmount'=>$row[4],
        
        'Activity'=>"Sales",
        'RentedDays'=>0
  
        ]);
       $oldStock= UpdateStocksController::getCurrentStock($row[0]);
      $newStock= floatval($oldStock)-floatval($row[2]);
      UpdateStocksController::updateStock($row[0],$newStock);
  
        }
        return $InvoiceID;
        
  
      }
      
    


     public function deleteInTnblSaleInvoiceDetails($IID){

    
    
        $Deleted = DB:: delete("delete from tblsaledetailedinvoice where InvoiceNumber=".$IID); 
         
         print($Deleted);
    
    
    
     }

    


    public function updateintblSaleInvoice($InvoiceID,$tot,$OverAllDiscount,$tax,$netTotal,$AP,$RBI,$CID,$AID){

        
        DB::table('tblsaleinvoice')
        ->where('InvoiceNumber', $InvoiceID)
        ->update([
          'TotalAmount'=>$tot,
          'Discount'=>$OverAllDiscount,
          'VAT'=>$tax,
          'NetTotal'=>$netTotal,
          'AmountPaid'=>$AP,
          'Balance'=>$RBI,
          'CustomerID'=>$CID
          
          ]);
          //Balance before this transaction and ater this transaction will be edited there
          DB::table('tbltransactionflow')
          ->where([['InvoiceNo', '=', $InvoiceID],['TransactionCatogery', '=', 'Stock and Service']])
          ->orwhere(['TransactionCatogery', '=', 'Sales'])
          ->update([
            'Amount'=>$tot,
            'PaidTo'=>$CID,
            'PaidVia'=>$AID
            
            ]);
          
      }

public function updateBalnce($AP,$RBI){

    $oldSelfBalance = LedgerPartiesController::getPartyBalance(2);
    $newBalance = $oldSelfBalance + $AP;
    $newCumstomerBalance =$cumstomerBalance - $AP;

    LedgerPartiesController::UpdatePartiesBalance(2, $newBalance);
    
    DB::table('customeinformation')
    ->where('CustomerID', $CID)
    ->update([
        'Balance'=>$newCumstomerBalance
        ]);
    
      }

}

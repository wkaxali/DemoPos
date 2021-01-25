<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use db;
use Carbon\Carbon;

use App\Http\Controllers\salesFlow;
use App\Http\Controllers\UpdateStocksController;

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
        
        //Restoring Balance 
        
        $amount = DB::table('tbltransactionflow')
            ->where('InvoiceNo', '=', $InvoiceID)
             ->first()->Amount;

        $cumstomerBalance = DB::table('customeinformation')
            ->where('CustomerID', '=', $CID)
             ->first()->Balance;
        //return $amount;
        $SelfBalance = LedgerPartiesController::getPartyBalance(2);

        $newSelfBalance = $SelfBalance - $amount;
        $newCumstomerBalance =$cumstomerBalance - $amount;

        LedgerPartiesController::UpdatePartiesBalance(2, $newSelfBalance);
        DB::table('customeinformation')
        ->where('CustomerID', $CID)
        ->update([
          'Balance'=>$newCumstomerBalance
          ]);


         self::deleteInTnblSaleInvoiceDetails($InvoiceID);
     

//+++++++++++++++++++++++++++++++++++++++++++++++++++//
       
        //_________________//
        $dateNow= Carbon::now()->toDateTimeString();
   
     self::insertInDetailedOrder($Array[0],$InvoiceID,$dateNow);
    


     
     self::updateintblSaleInvoice($InvoiceID,$tot,$OverAllDiscount,$tax,$netTotal,$AP,$RBI);
     
 
       
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
        return $DSID;
        
  
      }
    


     public function deleteInTnblSaleInvoiceDetails($IID){

    
    
        $Deleted = DB:: delete("delete from tblsaledetailedinvoice where InvoiceNumber=".$IID); 
         
         print($Deleted);
    
    
    
     }

     public function insertinrecipetblraw($Rpid,$Rrawid,$Runit,$Rquantity,$remarks,$REcost){

       
        
   $result= DB::insert('insert into tblrecipetoraw (PID, RAWID, Unit, Quantity, Remarks, ECost ) values (?, ?,?,?,?,?)', [$Rpid,$Rrawid,$Runit,$Rquantity,$remarks, $REcost]);
    

    if($result==1){

        print('nextone');




            }
    }


    public function updateintblSaleInvoice($InvoiceID,$tot,$OverAllDiscount,$tax,$netTotal,$AP,$RBI){

        
        DB::table('tblsaleinvoice')
        ->where('InvoiceNumber', $InvoiceID)
        ->update([
          'TotalAmount'=>$tot,
          'Discount'=>$OverAllDiscount,
          'VAT'=>$tax,
          'NetTotal'=>$netTotal,
          'AmountPaid'=>$AP,
          'Balance'=>$RBI,
          
          ]);
          
      }

public function updateBalnce($AP,$RBI){

    $oldSelfBalance = LedgerPartiesController::getPartyBalance(2);
    $newBalance = $oldSelfBalance + $AP;
    $newCumstomerBalance =$cumstomerBalance - $AP;

    LedgerPartiesController::UpdatePartiesBalance(2, $newBalance);
    LedgerPartiesController::UpdatePartiesBalance(2, $newSelfBalance);
    DB::table('customeinformation')
    ->where('CustomerID', $CID)
    ->update([
        'Balance'=>$newCumstomerBalance
        ]);
    
      }

}

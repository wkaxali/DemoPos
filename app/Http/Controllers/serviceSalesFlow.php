<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LedgerPartiesController;
use App\Http\Controllers\accountsController;
use App\Http\Controllers\UpdateStocksController;
use DB;


class serviceSalesFlow extends Controller
{
    public function SalesFlow(Request $request,$data){

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
         
       //  return $CLB;
         $dateNow= Carbon::now()->toDateTimeString();//->format('Y-m-d h:iA');
       // $d= Carbon::createFromFormat('dd/mm/YYYY HH:MM:SS', $dateNow);
         //return $dateNow;
        
          //tot,discount,gross,tax,netTotal,amp,rmb,CID,CLB,CCB
        //insert into sales order
        $invoiceNumber=DB::table('tblsaleinvoice')->insertGetId(['CustomerID'=>$CID,
        'TotalAmount'=>$tot,
        'Discount'=>$OverAllDiscount,
        'DateStamp'=>$dateNow,
        'VAT'=>$tax,
        'NetTotal'=>$netTotal,
        'AmountPaid'=>$AP,
        'Balance'=>$RBI,
        'BillStatus'=>"CLEAR",
        'HoldStatus'=>'0',
        'CustomerBalanceBeforeInvoiceBill'=>$CLB,
        'CustomerBalanceAfterInvoiceBill'=>$CCB,
        'CashPaidBack'=>NULL,
        'CashNote'=>NULL,
        'Remarks'=>NULL,
        'dliveryDate'=>NULL,
        'returnDate' =>NULL
        
        ]);

        $totlpaid=$AP;
        self::insertInDetailedOrder($Array[0],$invoiceNumber,$dateNow);
      $LID=2;
       $oldSelfBalance=LedgerPartiesController::getPartyBalance(2);
       $oldCustomerBalance=CustomerController::getCustomerBalance($CID);
       $paidVia=$AID;
       
       $currentCustomerBalance=floatval($oldCustomerBalance)+floatval($RBI);
       CustomerController::UpdateCustomerBalance($CID,$currentCustomerBalance);
       $selfBalance=floatval($oldSelfBalance)-floatval($totlpaid);
       LedgerPartiesController::UpdatePartiesBalance(2,$selfBalance);
       TransactionFlow::addTransaction($invoiceNumber,"Credit","Stock and Service",
       $totlpaid,$dateNow,"1",$oldCustomerBalance,$currentCustomerBalance,$oldSelfBalance,$selfBalance,$LID,"0",NULL,$CID,$paidVia,NULL);
       $OldAccBalance=accountsController::getAccountBalance($AID);
       $newAccountBalance=floatval($OldAccBalance)-floatval($totlpaid);
       
       accountsController::UpdateNewBalance($AID,$newAccountBalance);

       $invoiceDetails=self::getAllInvoiceDetails($invoiceNumber);
       
       
         foreach($invoiceDetails as $product){
         $qty=$product->Quantity;
         $contact=$product->ProductSerial;
         $customerName=$product->ProductSerial;
         $PID=$product->ProductSerial;
         $productName=$product->ProductName;
         $unitPrice=$product->PerUnitSalePrice;
         
       session(['invoiceDate' => $dateNow]);
       session(['invoiceNo' => $invoiceNumber]);
       session(['customerID' => $CID]);
       session(['customerName' => $customerName]);
       session(['city' => '']);
       session(['province' => '']);
       session(['contact' => $contact]);
       session(['model' => '']);
       session(['vehRegNo' => '']);
       session(['distanceTraveled' => '']);
       session(['itemNo' => $PID]);
       session(['description' => $productName]);
       session(['quantity' => $qty]);
       session(['CNIC' => '']);
       session(['unitPrice' => $unitPrice]);
       session(['tax' => '0']);
       session(['total' => '']);
       session(['subTotal' => $tot]);
       session(['taxable' => '-']);
       session(['taxRate' => '17%']);
       session(['taxAmount' => $tax]);
       session(['S&H' => '-']);
       session(['others' => '-']);
       session(['endTotal' => $netTotal]);

       DB::table('tbl_print_docs')->insertGetId([
       'invoiceDate' => $dateNow,
       'invoiceNo' => $invoiceNumber,
       'customerID' => $CID,
       'customerName' => $customerName,
       'city' => '',
       'province' => '',
       'contact' => $contact,
       'model' => '',
       'vehRegNo' => '',
       'distanceTraveled' => '',
       'itemNo' => $PID,
       'description' => $productName,
       'quantity' => $qty,
       'CNIC' => '',
       'price' => $unitPrice,
       'tax' => '0',
       'total' => $tot,
       'subTotal' => $tot,
       'taxable' => '-',
       'taxRate' => '17%',
       
       'S&H' => '-',
       'others' => '-',
       'endTotal' => $netTotal
      ]);
      }
       
     
    }
        //insert into order details
        //inster in transaction Flow
        //update customer balance
        //frf())
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
    public function apiCheck()
    {
      $obj = (object) [
        'aString' => 'some string',
        'anArray' => [ 1, 2, 3 ]
    ];
    
    return json_encode($obj);
      # code...
    }
    public function addInTransactionFlowForSales($invoiceNumber,$dateNow,$AP,$userID,$pattyCash,$CLB,$CCB){

      // [TransactionID]
      
      $TID=DB::table('tblTransactionFlow')->insertGetId(['InvoiceNo'=>$invoiceNumber,
      'TransactionCatogery'=>"Sales",
      'Amount'=>$AP,
      'DateStamp'=>$dateNow,
      'UserID'=>$userID,
      'PattyCash'=>$pattyCash,
      
      'SBB'=>NULL,
      'SBA'=>NULL,
      'CBB'=>$CLB,
      'CBA'=>$CCB
      
      
      
      
      
      
      ]);



    }


    public function getInvoiceNewID(){
      $IID=DB::table('tblsaleinvoice')->max("InvoiceNumber");
     return $IID+1;
     
    }
    

    public function UpdateRecipe(Request $request,$RecipeTable,$MenuID,$Ecost,$salePrice){
        
      print($MenuID);

      self::deleteintblrecipetoraw($MenuID);
   $obj = json_decode($RecipeTable);
   foreach ($obj as $row){
      
          $RMID=$row[0];
          $RMName=$row[1];
          $qty=$row[2];
          $unit=$row[3];
          $unitCost=$row[4];
          $TotalCostOfThisItem=$row[5];

      // print("RMID".$RMID);
      // print("    Name".$RMName);
      // print("    Qty".$qty);
      // print("   unt".$unit);
      // print("   unit cost".$unitCost);
      // print("   Cost Total cost".$unitCost);
      

    self::insertinrecipetblraw($MenuID,$RMID,$unit,$qty," ",$TotalCostOfThisItem);


   }
   self::updateIntblMenuproductsForSaleAndPurchase($MenuID,$Ecost,$salePrice);
   return 0;

     
   }



   public function deleteintblrecipetoraw($MenuID){

  
  
      $Deleted = DB:: delete("delete from tblrecipetoraw where PID=".$MenuID); 
       
       print($Deleted);
  
  
  
   }
   public function getAllInvoiceDetails($InvoiceNo){
    $results=DB::select('select * from vw_customersale_invoice where InvoiceNumber= '.$InvoiceNo);
   
    return $results;

}

   public function insertinrecipetblraw($Rpid,$Rrawid,$Runit,$Rquantity,$remarks,$REcost){

     
      
 $result= DB::insert('insert into tblrecipetoraw (PID, RAWID, Unit, Quantity, Remarks, ECost ) values (?, ?,?,?,?,?)', [$Rpid,$Rrawid,$Runit,$Rquantity,$remarks, $REcost]);
  

  if($result==1){

      print('nextone');




          }
  }


  public function updateIntblMenuproductsForSaleAndPurchase($PID,$ERCost,$SalePrice){

      
  
  
      $qr="UPDATE   tblmenuproducts SET   SalePrice='".$SalePrice."', RecipeCost ='".$ERCost."' WHERE  PID =".$PID;
      $affected = DB::update($qr);
  print("Number of Rows Affacted".$affected);
  
  } 


}

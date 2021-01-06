<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UpdateStocksController;
use App\Http\Controllers\TransactionFlow;
use App\Http\Controllers\LedgerPartiesController;
use DB;


class salesFlow extends Controller
{
    public function SalesFlow(Request $request,$data){
     // order = [pid,totwT,discount,netTotal,amp,rmb,CID];
        $Array=json_decode($data);
        $pid=$Array[0];
        $tot=$Array[1];
        $OverAllDiscount= $Array[2];
        $AmountAfterDiscount=$Array[3];
       $amp =$Array[4];
        $rmb=$Array[5];
       $CID=$Array[6];
         
         $dateNow= Carbon::now()->toDateTimeString();//->format('Y-m-d h:iA');
       // $d= Carbon::createFromFormat('dd/mm/YYYY HH:MM:SS', $dateNow);
         //return $dateNow;
        
          //tot,discount,gross,tax,netTotal,amp,rmb,CID,CLB,CCB
        //insert into sales order
        if( $rmb>0){
          $invoiceStatus="Not Cleared";

        }
        else{
          $invoiceStatus="CLEARED";
        }
        $invoiceNumber=DB::table('tblsaleinvoice')->insertGetId(['CustomerID'=>$CID,
        'TotalAmount'=>$tot,
        'Discount'=>$OverAllDiscount,
        'DateStamp'=>$dateNow,
        'VAT'=>NULL,
        'NetTotal'=>$AmountAfterDiscount,
        'AmountPaid'=>$amp,
        'Balance'=>$rmb,
        'BillStatus'=>$invoiceStatus,
        'HoldStatus'=>'0',
        'CustomerBalanceBeforeInvoiceBill'=>NULL,
        'CustomerBalanceAfterInvoiceBill'=>NULL,
        'CashPaidBack'=>NULL,
        'CashNote'=>NULL,
        'Remarks'=>NULL,
        'dliveryDate'=>NULL,
        'returnDate' =>NULL
        
        ]);
        $TransactionMode='2';
        $detailedOrder=array($pid,$tot,"1",$OverAllDiscount,$AmountAfterDiscount,$tot);
       // return  $detailedOrder[1];
        self::insertInDetailedOrder($detailedOrder,$invoiceNumber,$dateNow);
       // TransactionFlow::addInTransactionFlowForSales("1",$invoiceNumber,$dateNow,$amp,"1",NULL,NULL,NULL);
        $LID=2;
        $paidVia="CASH";
        TransactionFlow::addTransaction($invoiceNumber,"Debit","Sales",
        $amp,$dateNow,"1",NULL,NULL,NULL,NULL,$LID,"0",$CID,"MM",$paidVia,NULL);
        if($TransactionMode='2'){
          $LID=1;
          $paidVia="CASH";
          $oldBalance= LedgerPartiesController::getPartyBalance($LID);
          $currentBalance=floatval ($oldBalance)-floatval ($amp);
          TransactionFlow::addTransaction($invoiceNumber,"Credit","Customer Paid to Company",
          $amp,$dateNow,"1", $oldBalance,$currentBalance,NULL,NULL,$LID,"0",$CID,"FJW",$paidVia,NULL);
         
        
         LedgerPartiesController::UpdatePartiesBalance($LID, $currentBalance);
          
        }
        UpdateStocksController::UpdateStockStatus($PID,"Sold");

       return $invoiceNumber;
    }
    public function insertInDetailedOrder($row,$InvoiceID,$date){
     
       

      $DSID=DB::table('tblsaledetailedinvoice')->insertGetId(['InvoiceNumber'=>$InvoiceID,
      'ProductSerial'=>$row[0],
      'SalePrice'=>$row[1],
      'Quantity'=>$row[2],
      'DiscountOffered'=>$row[3],
      'DateStamp'=>$date,
      
      'TotalAmount'=>$row[5],
      'NetAmount'=>$row[4],
      
      'Activity'=>"Sales",
      'RentedDays'=>0

      ]);
      
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
   


    public function getInvoiceNewID(){
      $IID=DB::table('tblsaleinvoice')->max("InvoiceNumber");
     return $IID+1;
     


    }
    
}

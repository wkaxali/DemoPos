<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UpdateStocksController;
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
        $invoiceNumber=DB::table('tblsaleinvoice')->insertGetId(['CustomerID'=>$CID,
        'TotalAmount'=>$tot,
        'Discount'=>$OverAllDiscount,
        'DateStamp'=>$dateNow,
        'VAT'=>NULL,
        'NetTotal'=>$tot,
        'AmountPaid'=>$amp,
        'Balance'=>$rmb,
        'BillStatus'=>"CLEAR",
        'HoldStatus'=>'0',
        'CustomerBalanceBeforeInvoiceBill'=>NULL,
        'CustomerBalanceAfterInvoiceBill'=>NULL,
        'CashPaidBack'=>NULL,
        'CashNote'=>NULL,
        'Remarks'=>NULL,
        'dliveryDate'=>NULL,
        'returnDate' =>NULL
        
        ]);

        $detailedOrder=array($pid,$tot,"1",$OverAllDiscount,$AmountAfterDiscount);
       // return  $detailedOrder[1];
        self::insertInDetailedOrder($detailedOrder,$invoiceNumber,$dateNow);
        self::addInTransactionFlowForSales($invoiceNumber,$dateNow,$amp,"1",NULL,NULL,NULL);
       return $invoiceNumber;
    }
    public function insertInDetailedOrder($row,$InvoiceID,$date){
     
       

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
      'TransectionCatogery'=>"Sales",
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
    
}

<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use NumberToWords\NumberToWords;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UpdateStocksController;
use App\Http\Controllers\TransactionFlow;
use App\Http\Controllers\LedgerPartiesController;
use App\Http\Controllers\accountsController;
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
      $TransactionMode=$Array[7];
      $AID=$Array[8];
      $customerName =$Array[9];
      $CNIC=$Array[10];
      $address=$Array[11];
      $contact=$Array[12];
      $fatherName=$Array[13];
      $engineNo=$Array[14];
      $chassisNo=$Array[15];
      $color=$Array[16];
      $description=$Array[17];
      $productName=$Array[18];
      $city=$Array[18];
      
       //return $TransactionMode;
         
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
       // $TransactionMode='2';
        $detailedOrder=array($pid,$tot,"1",$OverAllDiscount,$AmountAfterDiscount,$tot);
       // return  $detailedOrder[1];
        self::insertInDetailedOrder($detailedOrder,$invoiceNumber,$dateNow);
       // TransactionFlow::addInTransactionFlowForSales("1",$invoiceNumber,$dateNow,$amp,"1",NULL,NULL,NULL);
       $oldSelfBalance= LedgerPartiesController::getPartyBalance(2);
        $oldCompanyBalance= LedgerPartiesController::getPartyBalance(1); 
       $LID=2;
        $paidVia=$AID;
        $selfBalance=$oldSelfBalance+$amp;
        TransactionFlow::addTransaction($invoiceNumber,"Debit","Sales",
        $amp,$dateNow,"1",$oldSelfBalance,$selfBalance,NULL,NULL,$LID,"0",$CID,"0",$paidVia,NULL);
       
        LedgerPartiesController::UpdatePartiesBalance(2, $selfBalance);
        $OldAccBalance=accountsController::getAccountBalance($AID);
        $newAccountBalance=floatval($OldAccBalance)+floatval($amp);
        
        accountsController::UpdateNewBalance($AID,$newAccountBalance);
        if($TransactionMode==2){
          $LID=2;
          $paidVia=$AID;
          $oldBalance= LedgerPartiesController::getPartyBalance($LID);
          $currentBalance=floatval ($oldBalance)-floatval ($amp);
          TransactionFlow::addTransaction($invoiceNumber,"Credit","Customer Paid to Company",
          $amp,$dateNow,"2", $oldBalance,$currentBalance,NULL,NULL,$LID,"0",$CID,"1",$paidVia,NULL);
          $oldSelfBalance= LedgerPartiesController::getPartyBalance(2);
          $companyBalance=$oldCompanyBalance-$amp;
        $selfBalance=$oldSelfBalance-$amp;
        LedgerPartiesController::UpdatePartiesBalance(1, $companyBalance);
        LedgerPartiesController::UpdatePartiesBalance(2, $selfBalance);
        $OldAccBalance=accountsController::getAccountBalance($AID);
        $newAccountBalance=floatval($OldAccBalance)-floatval($amp);
       // accountsController::getAccountBalance($AID);
        accountsController::UpdateNewBalance($AID,$newAccountBalance);
         
          
        }
        


        UpdateStocksController::UpdateStockStatus($pid,"Sold");

        session(['customerName' => $customerName]);
        session(['fatherName' => $fatherName]);
        session(['CNIC' => $CNIC]);
        session(['address' => $address]);
        session(['engineNo' => $engineNo]);
        session(['chassisNo' => $chassisNo]);
        session(['Amount' => $tot]);
        session(['total' => $amp]);
        session(['invoiceDate' => $dateNow]);
        session(['invoiceNo' => $fatherName]);
        session(['description' => $description]);
        session(['color' => $color]);
        session(['invoiceNo' => $invoiceNumber]);
        session(['productName' => $productName]);
        session(['price' => $tot]);
        session(['quantity' => '1']);
        session(['city' => $city]);
        session(['referenceNumber' => 'FMM-GDP-000'.$invoiceNumber]);
        session(['amountPaid' => $productName]);
        session(['balance' => $tot]);
        session(['receivedBy' => $tot]);

        $numberToWords = new NumberToWords();
        $numberTransformer = $numberToWords->getNumberTransformer('en');
        $a= $numberTransformer->toWords($amp);
        session(['amountInWords' => $a]);
        return $a;
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
  public static function getAllInvoiceDetails($InvoiceNo){
      $results=DB::select('select * from vw_customersale_invoice where InvoiceNumber= '.$InvoiceNo);
      return $results;

  }
    
}

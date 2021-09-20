<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TransactionFlow;
use App\Http\Controllers\LedgerPartiesController;
use Carbon\Carbon;
use App\Http\Controllers\accountsController;
use App\Http\Controllers\UpdateStocksController;
use DB;
use PDF;
class OrderFlowController extends Controller
{
    public function OrderFlow(Request $request,$data){
       // var Order=[mainTotal,totlpaid,totRemaining,orderDetails];

        $Array=json_decode($data);
        $mainTotal=$Array[0];
        $totlpaid= $Array[1];
        $totRemaining=$Array[2];
       $orderDetails =$Array[3];
       $AID=$Array[4];
       
       
         
    $dateNow = Carbon::now()->toDateString();
    //$dateNow =  Carbon::createFromFormat('Y-m-d', $dateRaw)->format('d-F-Y');
       // $d= Carbon::createFromFormat('dd/mm/YYYY HH:MM:SS', $dateNow);


      
       
        $invoiceNumber=DB::table('tblpurchaseorder')->insertGetId(['SupplierID'=>'1',
        'TotalAmount'=>$mainTotal,
        'Discount'=>'0',
        'DateStamp'=>$dateNow,
        'VAT'=>'0',
        'NetTotal'=>$mainTotal,
        'AmountPaid'=>$totlpaid,
        'Balance'=>$totRemaining,
        'BillStatus'=>"Pending",
        'HoldStatus'=>'0',
        'SupplierBalanceBeforeInvoiceBill'=>NULL,
        'SupplierBalanceAfterInvoiceBill'=>NULL,
        'CashPaidBack'=>NULL,
        'CashNote'=>NULL,
        'Remarks'=>NULL,
        'dliveryDate'=>NULL,
        'returnDate' =>NULL,
        'VATRate'=>NULL
        
        ]);

        
      self::insertInDetailedPurchaseOrder($orderDetails,$invoiceNumber,$dateNow);
      $LID=globalVarriablesController::selfLedgerID();
      $oldSelfBalance=LedgerPartiesController::getPartyBalance($LID);
      $oldCompanyBalance=LedgerPartiesController::getPartyBalance(1);
      $paidVia=$AID;
     
      $currentCompanyBalance=floatval($oldCompanyBalance)+floatval($totRemaining);
      LedgerPartiesController::UpdatePartiesBalance(1,$currentCompanyBalance);
      TransactionFlow::addTransaction($invoiceNumber,"Debit","Booking Order",
      $totlpaid,$dateNow,"1",$oldCompanyBalance,$currentCompanyBalance,NULL,NULL,$LID,"0",NULL,'1',$paidVia,NULL,Null);
      $OldAccBalance=accountsController::getAccountBalance($AID);
      $newAccountBalance=floatval($OldAccBalance)-floatval($totlpaid);
      
      accountsController::UpdateNewBalance($AID,$newAccountBalance);
      $selfBalance=floatval($oldSelfBalance)-floatval($totlpaid);
      LedgerPartiesController::UpdatePartiesBalance($LID,$selfBalance);
     // $companyBalance=floatval($oldCompanyBalance)+floatval($totlpaid);
   
    
        return "Your order ".$invoiceNumber;
    }


    public function placeStock(Request $request,$data){
      // var Order=[mainTotal,totlpaid,totRemaining,orderDetails];

       $Array=json_decode($data);
       $mainTotal=$Array[0];
      
      $OrderDetails =$Array[1];
      $AID=$Array[2];
      foreach ($OrderDetails as $row){
        // $(tr).find('td:eq(0)').text(), //AutoCategory
    // $(tr).find('td:eq(2)').text(), //Price
    // $(tr).find('td:eq(3)').text(), //qty
   
    $autoCategory=$row[0];
    $purchasePrice=$row[1];
    $invoicePrice=$row[2];
    $description=$row[3];
    $qty=$row[4];
    $Total=$row[5];
    $engine=$row[6];
    $chasis=$row[7];
    $color=$row[8];
        
   $dateNow = Carbon::now()->toDateString();
   
       $invoiceNumber=DB::table('displaystock')->insertGetId([ 
        'autoname'=>$autoCategory,
       'bookingprice'=>$purchasePrice,
       'Invoicepice'=>$invoicePrice,
       'date'=>$dateNow,
       'qty'=>$qty,
       'enginenumber'=>$engine,
       'chasisnumber'=>$chasis,
       'colour'=>$color,
       'total'=>$mainTotal,
        
       
       ]);
 
      }
   
       return "Your order ".$invoiceNumber;
   }

    function getOrderID(){

        $IID=DB::table('tblpurchaseorder')->max("InvoiceNumber");
        return $IID+1;
    }
    function abc(){


      $IID=DB::select('select * from tbltransactionflow');
      return $IID;
  }

    function addProductOnlyForAutos($Pname,$Pcateg,$Psubcat,$Pbarcode,$UnitPurchasePrice,$OrderID,$description,$INP){

           
        $ProductSerial=DB::table('productdefination')->insertGetId(['ProductName'=> $Pname, 
        'Category'=>$Pcateg,
        'subCategory'=>$Psubcat ,
        'Company'=>'Forland', 
       'Year'=>'2021'
        ]);
        DB::table('productdefination')
            ->where('ProductSerial', $ProductSerial)
            ->update([
              'ProductID' =>$ProductSerial,
              'description' =>$description,
              'Barcode' =>'*'.$ProductSerial.'*'
            ]);
          
            $SID=DB::table('instock')->insertGetId(['ProductSerial'=> $ProductSerial, 
            'StockIn'=>'1',
            'PerUnitPurchasePrice'=> $UnitPurchasePrice,
             
            'PerUnitSalePrice'=>$INP,
            'ExpairyDate'=>NULL,
            'TotalCost'=>$UnitPurchasePrice,
            'TotalSaleAmount'=>$UnitPurchasePrice,
            'Remarks'=>'Pending In Order No:  '.$OrderID,
            'Status'=>'Pending'
           
            ]);
        return $ProductSerial;
  
        
      }

    public function insertInDetailedPurchaseOrder($OrderDetails,$InvoiceID,$date){
        
        
        
        
        foreach ($OrderDetails as $row){
            // $(tr).find('td:eq(0)').text(), //AutoCategory
        // $(tr).find('td:eq(2)').text(), //Price
        // $(tr).find('td:eq(3)').text(), //qty
       
        $autoCategory=$row[0];
        $purchasePrice=$row[1];
        $qty=$row[2];
        $amountTot=$row[3];
        $AmountPaid=$row[4];
        $remAmount=$row[5];
        $Pname=$row[6];
        $description=$row[7];
        $invoicePrice=$row[8];
        for($i=0;$i<$qty;$i++){
        // $(tr).find('td:eq(4)').text(), //totamount
        // $(tr).find('td:eq(5)').text(), //Paid
        // $(tr).find('td:eq(6)').text() //remAmount
       $productSerial= self::addProductOnlyForAutos($Pname,"1",NULL,NULL,$purchasePrice,$InvoiceID,$description,$invoicePrice);
       print ($productSerial);
      
  
        $DSID=DB::table('tblpurchaseoorderdetaile')->insertGetId(['InvoiceNumber'=>$InvoiceID,
            
        'ProductSerial'=>$productSerial,
        'PurchasePricePerUnit'=>$purchasePrice,
        'ProductCategory'=>$autoCategory,
        'DiscountOffered'=>'0',
        'DateStamp'=>$date,
        
        'TotalAmount'=>$amountTot,
        'NetAmount'=>$amountTot,
        
        'Activity'=>"Place Order",
        'OrderedQuantiy'=>'1',
        
        
        'RetailPricePerUnit'=>$purchasePrice,
        'DilevedStatus'=>'Pending',
        'AmountPaid'=>$AmountPaid,
        
        'Balance'=>$remAmount,
        'DeliveredQuantity'=>0
  
        ]);
        }
        }
        return $DSID;
        
  
      }



      /////
      public function insertInDetailedPurchaseOrderForSP($OrderDetails,$InvoiceID,$date){
        
        
        
        
        foreach ($OrderDetails as $row){
        
        $pid=$row[0];
        $purchasePrice=$row[1];
        $qty=$row[2];
        
        $dis=$row[3];
        $totamount=$row[4];
        
   
  
        $DSID=DB::table('tblpurchaseoorderdetaile')->insertGetId(['InvoiceNumber'=>$InvoiceID,
            
        'ProductSerial'=>$pid,
        'PurchasePricePerUnit'=>$purchasePrice,
        
        'DiscountOffered'=>$dis,
        'DateStamp'=>$date,
        
        'TotalAmount'=>$totamount,
        'NetAmount'=>$totamount,
        
        'Activity'=>"Purchased Stock",
        'OrderedQuantiy'=>$qty,
        
        
        'RetailPricePerUnit'=>$purchasePrice,
        'DilevedStatus'=>'Delivered',
        'AmountPaid'=>$totamount,
        
        'Balance'=>"0",
        'DeliveredQuantity'=>$qty
  
        ]);


        $oldStock= UpdateStocksController::getCurrentStock($pid);
    $newStock= floatval($oldStock)+floatval($qty);
    UpdateStocksController::updateStock($pid,$newStock);
       // }
        }
        return $DSID;
        
  
      }
      /////
      public function addInTransactionFlowForPurchase($invoiceNumber,$dateNow,$AP,$userID,$pattyCash,$CLB,$CCB){

        // [TransactionID]
        
        $TID=DB::table('tblTransactionFlow')->insertGetId(['InvoiceNo'=>$invoiceNumber,
        'TransectionCatogery'=>"Booking Order",
        'Amount'=>$AP,
        'DateStamp'=>$dateNow,
        'UserID'=>$userID,
        'PattyCash'=>$pattyCash,
        'TransactionType'=>"Debit",
        
        'SBB'=>NULL,
        'SBA'=>NULL,
        'CBB'=>$CLB,
        'CBA'=>$CCB
        
        
        
        
        
        
        ]);
        
      }

      
      // and DilevedStatus = "Pending" 

      function getBookedOrders($oid){
        $data=DB:: select('select * from vw_purchaseorderdetails where Category= "1" and InvoiceNumber='.$oid);
        
        $table='<thead>
        <tr>
            <th>Id</th>
            <th>Model</th>
            <th>Price</th>
            <th>QTY</th>
            <th>Total</th>
            <th>Paid</th>
            <th>Remain</th>
            <th>Delete</th>
            </th>
        </tr>
    </thead>';
        foreach($data as $ro) {
        $table=$table.'
          
            <tr>
            
            <td  >'.$ro->InvoiceNumber.'</td>
            <td>'.$ro->ProductName.'</td>
            <td> '.$ro->PurchasePricePerUnit.'</td>
            <td> '.$ro->OrderedQuantiy.'</td>
            <td> '.$ro->TotalAmount.'</td>
            <td> '.$ro->AmountPaid.'</td>
            <td> '.$ro->Balance.'</td>
            <td> <button  calss="" onclick="deleteRow(this)">X</button> </td>
      
             
          
                
        </tr>';
      }
        return $table;
      }

      function getboHistory(){
        $data=DB:: select('select * from vw_purchaseorderdetails where DilevedStatus = "Pending"');
        return $data;
      }



      function getPendingOrders(){
        $data=DB:: select('select * from vw_purchaseorderdetails where DilevedStatus = "Pending"');
        return $data;
      }


      function spareParts(){
        $data=DB:: select('select * from vw_stockdetails where Category = 2');
        return $data;
      }

      function viewStock(){
        $data=DB:: select('select * from vw_stockdetails where Category = 1');
        return $data;
      }

      function viewAllStock(){
        $data=DB:: select('select * from vw_stockdetails');
        return $data;
      }

      function viewCustomer(){
        $data=DB:: select('select * from customeinformation');
        return $data;
      }
      
      function transactionHistory(){
        $data=DB:: select('select * from vw_transaction_flow');
        $sum=0;
        $crediSum=0;
        $debitSum=0;
        foreach($data as $d){
          if($d->TransactionType=="Credit"){
            $sum+=$d->Amount;
            $crediSum+=$d->Amount;
          }else{
            $sum-=$d->Amount;
            $debitSum+=$d->Amount;
        }
          }
        return [$data, $sum, $crediSum, $debitSum];
      }
         
      function transactionHistoryforExpance(){
        $data=DB:: select('select * from tbltransactionflow where TransactionType=Credit');
        return $data;
      }
      
      function companyLedger(){
        $data=DB:: select('select * from vw_purchase_transactions where paidTo = 1');
        return $data;
      }

      function scratchFunc(){
        $data=DB:: select('select CustomerName, Contect, Address, Balance, CNIC from customeinformation');
        $table='
        <table id="myTable" class=" table-striped" style="width: 100%; text-align: center;">
          <thead>
              <tr>
                  <th id ="Cusname">Name</th>
                  <th id="CusCont">Contact</th>
                  <th id ="Cusaddr">Address</th>
                  <th id="CusIntrs">Interested In</th>
                  <th id ="CusMeet"> Who Meet</th>

              </tr>
          </thead>
          <tbody>';
 

        foreach ($data as $d){
          //print $option;

            $table=$table.'
           
       
            <tr>
            <td>'.$d->CustomerName.'</td>
            <td>'.$d->Contect.'</td>
            <td>'.$d->Address.'</td>
            <td>'.$d->Balance.'</td>
            <td>'.$d->CNIC.'</td>
            </tr>';
      
        }
        return $table.'<table>';
      }

      function getTransaction(){
      
        $data=DB:: select('select * from companyinfo');
        $i=1;
        $table="
        <table>
        <tr>
        <td>Increment</td>
        <td>Transaction ID</td>
        <td>Invoice Number</td>
        <td>Transection Catogery</td> </tr>";
 

        foreach ($data as $d){
          //print $option;

            $table=$table.'
           
       
            <tr>
            <td>'.$i.'</td>
            <td>'.$d->CompanyName.'</td>
            <td>'.$d->StoreName.'</td>
            <td>'.$d->Address.'</td>
            
     
        </tr>';
        
        $i++;
        }
        return $table.'<table>';
        
        
    }
    
    ////
    
    //// 
      function getOrderItem($OID){
        $results=DB::select('select * from vw_purchaseorderdetails where InvoiceNumber='.$OID);
        $table="";
        $i=1;
        $option='<option value=" "></option>';
  
        foreach ($results as $ro){
        $charges= TransactionFlow::getChargesOrComissions($ro->ProductID,"Transportation Charges","Cost");

          //return $charges;

          if( $ro->DilevedStatus!="Pending"){
                $option=$ro->DilevedStatus;
          }
          else{
            $option='<select
             id="category"
            tabindex="null"><option value=1 >Received</option><option value=2 selected>Pending</option><option value=3>Returned</option></select></td>';

          }
          if($charges==0){
          $tc=' value='.$charges;
          }
          else{
            $tc=' value='.$charges.' readonly ="true"';
          }
          if($ro->ChasisNumber==""){
            $CHN=' value='.$ro->ChasisNumber;
            }
            else{
              $CHN=' value='.$ro->ChasisNumber.' readonly ="true"';
            }
            if($ro->EngineNumber==""){
              $EN=' value='.$ro->EngineNumber;
              }
              else{
                $EN=' value='.$ro->EngineNumber.' readonly ="true"';
              }
            if($ro->Color==""){
              $color=' value='.$ro->Color;
              }
              else{
                $color=' value='.$ro->Color.' readonly ="true"';
              }
              if($ro->Remarks==""){
                $Remarks=' value='.$ro->Remarks;
                }
                else{
                  $Remarks=' value='.$ro->Remarks.' readonly ="true"';
                }
          //print $option;

            $table=$table.'
            <tr>
            <td>'.$i.'</td>
            <td style="display:none">'.$ro->ProductID.'</td>
            <td>'.$ro->ProductName.'</td>
            <td><input type="text" '.$color.'></td>
            <td><input type="text" '.$CHN.'></td>
            <td><input type="text" '.$EN.'></td>
            
            <td><input type="text"'.$tc.'></td>
            <td><input type="text" '.$Remarks.'></td>
            <td> 
                    '.$option.'</td>
                 

                
        </tr>';
        $i++;
        $option="";
        }
        return $table;




      }


      public function PurchaseOrderWithStockUpdate(Request $request,$data){
       //myRow2 = [myTrows, tot, discount, gross, tax, netTotal, amp, rmb, SID, SLB, SCB];
 
         $Array=json_decode($data);
         $mainTotal=$Array[1];
         $discount=$Array[2];
         $vat=$Array[4];
         $netTotal=$Array[5];
         $totlpaid= $Array[6];
         $totRemaining=$Array[7];
        $orderDetails =$Array[0];
        //$pid=$orderDetails[0];
        $SID=$Array[8];
        $SLB=$Array[9];
        $SCB=$Array[10];
        $AID=$Array[11];
        
         
          
          
    $dateNow = Carbon::now()->toDateString();
    //$dateNow =  Carbon::createFromFormat('Y-m-d', $dateRaw)->format('d-F-Y');
        // $d= Carbon::createFromFormat('dd/mm/YYYY HH:MM:SS', $dateNow);
 
 
       
        
         $invoiceNumber=DB::table('tblpurchaseorder')->insertGetId(['SupplierID'=>$SID,
         'TotalAmount'=>$mainTotal,
         'Discount'=>$discount,
         'DateStamp'=>$dateNow,
         'VAT'=>$vat,
         'NetTotal'=>$netTotal,
         'AmountPaid'=>$totlpaid,
         'Balance'=>$totRemaining,
         'BillStatus'=>"Pending",
         'HoldStatus'=>'0',
         'SupplierBalanceBeforeInvoiceBill'=>$SLB,
         'SupplierBalanceAfterInvoiceBill'=>$SCB,
         'CashPaidBack'=>NULL,
         'CashNote'=>NULL,
         'Remarks'=>NULL,
         'dliveryDate'=>NULL,
         'returnDate' =>NULL,
         'VATRate'=>NULL
         
         ]);
 
         
       self::insertInDetailedPurchaseOrderForSP($orderDetails,$invoiceNumber,$dateNow);
       $LID=globalVarriablesController::selfLedgerID();
       $oldSelfBalance=LedgerPartiesController::getPartyBalance($LID);
       $oldCompanyBalance=LedgerPartiesController::getPartyBalance($SID);
       $paidVia=$AID;
     
       $currentCompanyBalance=floatval($oldCompanyBalance)+floatval($totRemaining);
       LedgerPartiesController::UpdatePartiesBalance($SID,$currentCompanyBalance);
       $selfBalance=floatval($oldSelfBalance)-floatval($totlpaid);
       LedgerPartiesController::UpdatePartiesBalance($LID,$selfBalance);
       TransactionFlow::addTransaction($invoiceNumber,"Debit","Stock Purchased",
       $totlpaid,$dateNow,"1",$oldCompanyBalance,$currentCompanyBalance,$oldSelfBalance,$selfBalance,$LID,"0",NULL,$SID,$paidVia,NULL,Null);
       $OldAccBalance=accountsController::getAccountBalance($AID);
       $newAccountBalance=floatval($OldAccBalance)-floatval($totlpaid);
       
       accountsController::UpdateNewBalance($AID,$newAccountBalance);
       
      // $companyBalance=floatval($oldCompanyBalance)+floatval($totlpaid);
    
     
         return "Your order ".$invoiceNumber;
     }

     public static function printStockData(){ 
       
        
      $table='<h1 align="center">All Stock</h1>
      <br><br><br>
  
      <table  align="center" cellpadding = "1" cellspacing = "0"  border="1" style="font-size:22.2px margin-left:49px;"><thead></thead>
        <tbody>
            <tr>
                <th align="center"><b>Product ID</b></th>
                <th align="center"> <b>Company</b></th>
                <th align="center"> <b>Product Name</b></th>
                <th align="center"><b>Invoice Price</b></th>
                <th align="center"><b>Unit Purchase Price</b></th>
                <th align="center"><b>Stock</b></th>
                <th align="center"><b>Enigne Number</b></th>
                <th align="center"><b>Chasis Number</b></th>
                <th align="center"><b>Status</b></th>
            </tr>
      
          ';
 
        $data=DB::select('select * from vw_stockdetails');
      foreach ($data as $d){
        
          $table=$table.'
          
          <tr>
          <td align="center">'.$d->ProductSerial.'</td>
         
          <td align="center">'.$d->Company.'</td>
          <td align="center">'.$d->ProductName.'</td>
          <td align="center">'.$d->PerUnitSalePrice.'</td>
          
          <td align="center">'.$d->PerUnitPurchasePrice.'</td>
          <td align="center">'.$d->StockIn.'</td>
          <td align="center">'.$d->EngineNumber.'</td>
          <td align="center">'.$d->ChasisNumber.'</td>
          <td align="center">'.$d->Status.'</td>
          </tr>
          
      

           ';}
           return $table;
   }



   function getbookingDetails($invoiceNo){
    $data=DB:: select('select * from vw_purchaseorderdetails where InvoiceNumber='.$invoiceNo);
    $partyName=DB:: select('select PartyName from vw_transactionflow_sales where InvoiceNo='.$invoiceNo);
    
      session(['invoiceDate' => $data[0]->DatePurchase]);
      session(['InvoiceNo' => $data[0]->InvoiceNumber]);
      session(['InStockStatus' => $data[0]->InStockStatus]);
      session(['ProductName' => $data[0]->ProductName]);
      session(['Color' => $data[0]->Color]);
      session(['EngineNumber' => $data[0]->EngineNumber]);
      session(['ChasisNumber' => $data[0]->ChasisNumber]);
      session(['PurchaseTotalAmount' => $data[0]->TotalAmount]);
      session(['PurchaseAmountPaid' => $data[0]->AmountPaid]);
      session(['PurchaseRemainingBalance' => $data[0]->Balance]);
     

      
$newHTML='<table border="0" cellpadding="2" >
<thead>
<tr>


<th align="center"><br><h1>FORLAND MODREN MOTORS</h1></th>
</tr>
</thead>

<tbody>
<tr>
<br>
<td>

  <br>

</td>

</tr>

<tr>
<td width="50%"><h4>
'.$partyName[0]->PartyName.' (PVT)</h4> 
</td>

<td width="50%">
<h4 align="right">Date: '.session()->get("invoiceDate").'</h4>
</td>
</tr>

<tr>

<td width="100%" border="0" align="center" ><h4>Booking Order Details</h4></td>
</tr>
</tbody>

</table>
<br>
<br>
<br>
<br>
<table border="0" cellpadding="9" >

<tbody>
<tr >
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1" align="left" >Invoice No.</td>
<td width="55%" border="1" align="center">'.session()->get("InvoiceNo").'</td>

</tr>
<tr >
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1" align="left" > Stock Status</td>
<td width="55%" border="1" align="center">'.session()->get("InStockStatus").'</td>

</tr>
<tr >
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1" align="left" >Product Name</td>
<td width="55%" border="1" align="center">'.session()->get("ProductName").'</td>

</tr><tr >
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1" align="left" > Color</td>
<td width="55%" border="1" align="center">'.session()->get("Color").'</td>

</tr><tr >
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1" align="left" > Engine Number</td>
<td width="55%" border="1" align="center">'.session()->get("EngineNumber").'</td>

</tr><tr >
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1" align="left" >Chasis Number</td>
<td width="55%" border="1" align="center">'.session()->get("ChasisNumber").'</td>

</tr>
<tr>
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1">Purchase Amount</td>
<td width="55%" align="center" border="1">'.session()->get("PurchaseTotalAmount").'</td>

</tr>
<tr>

<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1"> Amount Paid</td>
<td width="55%" align="center" border="1">'.session()->get("PurchaseAmountPaid").'</td>

</tr>
<tr>
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1"> Balance</td>
<td width="55%" align="center" border="1">'.session()->get("PurchaseRemainingBalance").'</td>



</tr>
 
 

<tr>
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1">Payment Detail</td>
<td width="55%" align="center" border="1">Payment Details Attached</td>



</tr>



</tbody>
</table>
<br>



<br><br> <br>
<br>
<table border="0">

<tr>

<td width="90%" align="right">
_______________________</td>




</tr>
<tr>


<td width="83%" align="right"> Sign & Stamp
</td>



</tr>

</table>

'; // $html= $htmldata;


PDF::SetTitle('Request for Invoice');
PDF::AddPage();
PDF::writeHTML($newHTML, true, false, true, false, '');

PDF::Output('invoiceRequest.pdf');



  }


  
  
  function getPurchasedStockDetails($invoiceNo){
    $data=DB:: select('select * from vw_purchaseorderdetails where InvoiceNumber='.$invoiceNo);
    $partyName=DB:: select('select PartyName from vw_transactionflow_sales where InvoiceNo='.$invoiceNo);
    
    session(['invoiceDate' => $data[0]->DatePurchase]);
    session(['InvoiceNo' => $data[0]->InvoiceNumber]);
    
    session(['ProductName' => $data[0]->ProductName]);
    session(['Company' => $data[0]->Company]);
    session(['Color' => $data[0]->Color]);
 
    session(['PurchaseTotalAmount' => $data[0]->TotalAmount]);
    session(['PurchaseAmountPaid' => $data[0]->AmountPaid]);
    session(['PurchaseRemainingBalance' => $data[0]->Balance]);
   

    
$newHTML='<table border="0" cellpadding="2" >
<thead>
<tr>


<th align="center"><br><h1>FORLAND MODREN MOTORS</h1></th>
</tr>
</thead>

<tbody>
<tr>
<br>
<td>

<br>

</td>

</tr>

<tr>
<td width="50%"><h4> 
'.$partyName[0]->PartyName.'  (PVT)</h4> 
</td>

<td width="50%">
<h4 align="right">Date: '.session()->get("invoiceDate").'</h4>
</td>
</tr>

<tr>

<td width="100%" border="0" align="center" ><h4>Purchased Stock Details</h4></td>
</tr>
</tbody>

</table>
<br>
<br>
<br>
<br>
<table border="0" cellpadding="9" >

<tbody>
<tr >
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1" align="left" >Invoice No.</td>
<td width="55%" border="1" align="center">'.session()->get("InvoiceNo").'</td>

</tr>
 
<tr >
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1" align="left" >Product Name</td>
<td width="55%" border="1" align="center">'.session()->get("ProductName").'</td>

</tr><tr >
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1" align="left" > Color</td>
<td width="55%" border="1" align="center">'.session()->get("Color").'</td>

</tr><tr >
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1" align="left" >Company</td>
<td width="55%" border="1" align="center">'.session()->get("Company").'</td>

</tr> 
<tr>
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1">Purchase Amount</td>
<td width="55%" align="center" border="1">'.session()->get("PurchaseTotalAmount").'</td>

</tr>
<tr>

<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1"> Amount Paid</td>
<td width="55%" align="center" border="1">'.session()->get("PurchaseAmountPaid").'</td>

</tr>
<tr>
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1"> Balance</td>
<td width="55%" align="center" border="1">'.session()->get("PurchaseRemainingBalance").'</td>



</tr>
 

<tr>
<td width="8%" border="0" align="left" ></td>

<td width="30%" border="1">Payment Detail</td>
<td width="55%" align="center" border="1">Payment Details Attached</td>



</tr>



</tbody>
</table>
<br>



<br><br> <br>
<br>
<table border="0">

<tr>

<td width="90%" align="right">
_______________________</td>




</tr>
<tr>


<td width="83%" align="right"> Sign & Stamp
</td>



</tr>

</table>

'; // $html= $htmldata;


PDF::SetTitle('Request for Invoice');
PDF::AddPage();
PDF::writeHTML($newHTML, true, false, true, false, '');

PDF::Output('invoiceRequest.pdf');



  }


}

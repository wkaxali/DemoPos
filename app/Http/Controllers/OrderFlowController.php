<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TransactionFlow;
use App\Http\Controllers\LedgerPartiesController;
use Carbon\Carbon;
use DB;
class OrderFlowController extends Controller
{
    public function OrderFlow(Request $request,$data){
       // var Order=[mainTotal,totlpaid,totRemaining,orderDetails];

        $Array=json_decode($data);
        $mainTotal=$Array[0];
        $totlpaid= $Array[1];
        $totRemaining=$Array[2];
       $orderDetails =$Array[3];
       
        
         
         $dateNow= Carbon::now()->toDateTimeString();//->format('Y-m-d h:iA');
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
      $LID=1;
      $oldBalance= LedgerPartiesController::getPartyBalance($LID);

      $currentBalance=floatval($oldBalance)+floatval($totRemaining);
      LedgerPartiesController::UpdatePartiesBalance($LID,$currentBalance);
      TransactionFlow::addTransaction($invoiceNumber,"Cedit","Booking Order",
      $totlpaid,$dateNow,"1",$oldBalance,$currentBalance,NULL,NULL,$LID,"0",NULL,"FWJ","CASH",NULL);
      



     
       
        
        return "Your order ".$invoiceNumber;
    }

    function getOrderID(){

      $IID=DB::table('tblpurchaseorder')->max("InvoiceNumber");
      return $IID+1;
  }

    function addProductOnlyForAutos($Pname,$Pcateg,$Psubcat,$Pbarcode,$UnitPurchasePrice,$OrderID){

           
        $ProductSerial=DB::table('productdefination')->insertGetId(['ProductName'=> $Pname, 
        'Category'=>$Pcateg,
        'subCategory'=>$Psubcat ,
        'Company'=>'Forland', 
       'Year'=>'2021'
        ]);
        DB::table('productdefination')
            ->where('ProductSerial', $ProductSerial)
            ->update(['ProductID' =>$ProductSerial,
            'Barcode' =>'*'.$ProductSerial.'*'
         
            ]);
          
            $SID=DB::table('instock')->insertGetId(['ProductSerial'=> $ProductSerial, 
            'StockIn'=>'1',
            'PerUnitPurchasePrice'=> $UnitPurchasePrice,
             
            'PerUnitSalePrice'=>$UnitPurchasePrice,
            'ExpairyDate'=>NULL,
            'TotalCost'=>$UnitPurchasePrice,
            'TotalSaleAmount'=>$UnitPurchasePrice,
            'Remarks'=>'Pending In Order No:  '.$OrderID,
            'Status'=>'Pending'
           
            ]);
        return $ProductSerial;
  
        
      }

    public function insertInDetailedPurchaseOrder($OrderDetails,$InvoiceID,$date){
        // SID bigint(20) 
        // InvoiceNumber bigint(20) 
        // ProductSerial varchar(50) 
        // ProductCategory varchar(50) 
        // DiscountOffered float 
        // DateStamp datetime(4) 
        // TotalAmount float 
        // NetAmount float 
        // Activity varchar(50) 
        // OrderedQuantiy varchar(50) 
        // PurchasePricePerUnit varchar(50) 
        // RetailPricePerUnit varchar(50) 
        // DilevedStatus varchar(50) 
        // DeliveredQuantity varchar(50)
        //------------------------------------------------------
        
        
        
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
        for($i=0;$i<$qty;$i++){
        // $(tr).find('td:eq(4)').text(), //totamount
        // $(tr).find('td:eq(5)').text(), //Paid
        // $(tr).find('td:eq(6)').text() //remAmount
       $productSerial= self::addProductOnlyForAutos($Pname,"21",NULL,NULL,$purchasePrice,$InvoiceID);
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
      public function addInTransactionFlowForPurchase($invoiceNumber,$dateNow,$AP,$userID,$pattyCash,$CLB,$CCB){

        // [TransactionID]
        
        $TID=DB::table('tblTransactionFlow')->insertGetId(['InvoiceNo'=>$invoiceNumber,
        'TransectionCatogery'=>"Booking Order",
        'Amount'=>$AP,
        'DateStamp'=>$dateNow,
        'UserID'=>$userID,
        'PattyCash'=>$pattyCash,
        'TransactionType'=>"Credit",
        
        'SBB'=>NULL,
        'SBA'=>NULL,
        'CBB'=>$CLB,
        'CBA'=>$CCB
        
        
        
        
        
        
        ]);
        
      }

      function spareParts(){
        $data=DB:: select('select * from vw_stockdetails where Category = 20');
        return $data;
      }

      function viewStock(){
        $data=DB:: select('select * from vw_stockdetails where Category = 20');
        return $data;
      }

      function viewCustomer(){
        $data=DB:: select('select * from customeinformation');
        return $data;
      }
      
      function transactionHistory(){
        $data=DB:: select('select * from tbltransactionflow');
        return $data;
      }
      
      function companyLedger(){
        $data=DB:: select('select * from tbltransactionflow where LID = 1');
        
        $table='
        <table id="myTable" class=" table-striped" style="width: 100%; text-align: center;">
          <thead>
              <tr>
                  
                  <th id ="Cusname">Transaction ID</th>
                  <th id="CusCont">Invoice No</th>
                  <th id ="Cusaddr">Transaction Category</th>
                  <th id="CusIntrs">Amount</th>
                  <th id ="CusMeet">Transaction Date</th>
              </tr>
          </thead>
          <tbody>';
 

        foreach ($data as $d){
          //print $option;

            $table=$table.'
           
       
            <tr>
            
            <td>'.$d->TransactionID.'</td>
            <td>'.$d->InvoiceNo.'</td>
            <td>'.$d->TransectionCatogery.'</td>
            <td>'.$d->Amount.'</td>
            <td>'.$d->DateStamp.'</td>
            </tr>';
          
        }
        return $table.'<table>';
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
     
      function getOrderItem($OID){
        $results=DB::select('select ProductName,EngineNumber,ChasisNumber,DilevedStatus,ProductID from vw_purchaseorderdetails where InvoiceNumber='.$OID);
        $table="";
        $i=1;
        $option="";
  
        foreach ($results as $ro){
        $charges= TransactionFlow::getChargesOrComissions($ro->ProductID,"Transportation Charges","Cost");

          //return $charges;

          if( $ro->DilevedStatus!="Pending"){
                $option=$ro->DilevedStatus;
          }
          else{
            $option='<select
             id="category"
            tabindex="null"><option value=1 >Received</option><option value=2 selected>Pending</option></select></td>';

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
          //print $option;

            $table=$table.'
            <tr>
            <td>'.$i.'</td>
            <td style="display:none">'.$ro->ProductID.'</td>
            <td>'.$ro->ProductName.'</td>
            <td><input type="text" '.$CHN.'></td>
            <td><input type="text" '.$EN.'></td>
            <td><input type="text"'.$tc.'></td>
            <td> 
                    '.$option.'


                
        </tr>';
        $i++;
        $option="";
        }
        return $table;




      }
}

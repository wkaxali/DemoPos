<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use Carbon\Carbon;

class supplierHistoryPrintController extends Controller
{
    public static function printSupplierHistory2($sup, $colSums){
        $sums=json_decode($colSums);
        $totalPurchaseAmount=$sums[0];
        $amountPaid=$sums[1];
        $remainingBalance=$sums[2];
        $data=0;
        if($sup=="All"){
            $data=DB:: select('select * from vw_transaction_flow where Category="Supplier"');
        
        }
        else if($sup!="All"){
            $data=DB:: select('select * from vw_transaction_flow where Category="Supplier" and PartyName ="'.$sup.'"');
        
        }
  
           
          $table='
          <h2 style="text-align:center;" >Supplier Transaction History</h2><br>
          <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
          <tbody>
          <tr><br><br><br><br>
          
          <td max-height="20px" ><h2>Total Purchase Amount: : '.$totalPurchaseAmount.' </h2></td>
          <td max-height="20px" ><h2>Total Amount Paid: : '.$amountPaid.' </h2></td>
          <td max-height="20px" ><h2>Total Remaining Balance: : '.$remainingBalance.' </h2></td>

          </tr><tr><td max-height="20px"><h3>Filter by : '.$sup.'</h3></td></tr>
          </tbody>
          </table> <br><br>
          <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
            <tbody>
                <tr>
                <th>Supplier Name</th>
                <th>Transaction Category</th> 
                <th>Account Name</th>
             
                <th>Total Purchase Amount</th>
            
             
                <th>Transaction Date</th> 
                    
                </tr>
            </tbody>
           
            </table> ';
          
           
          
          foreach ($data as $d){
              
          
              $table=$table.'
             
          <table cellpadding = "2" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
              <tbody>
              <tr>
              <td height:80px;>'.$d->PartyName.'</td> 
              <td height:80px;>'.$d->TransactionCatogery.'</td>
              <td height:80px;>'.$d->AccountName.' ('.$d->AccountNumber.')</td>
        
              <td height:80px;>'.$d->Amount.'</td>
              
             
            
              
              <td height:80px;>'.$d->DateStamp.'</td>
              </tr>   
              </tbody>
          </table> 
         
      



               ';}
               $table=$table.'
             
               <table border="0">
           <br>
           <br>
           
           <br>
           <br>
           <br>
           <br>
           <br>
           
           
           
           
           <tr>
           
           
           <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>
           
           
           
           
           </tr>
           
           
           
           </table>
                
           
               
                    ';
          
          
          PDF::SetTitle('Transaction History');
          PDF::AddPage();
          PDF::writeHTML($table, true, false, true, false, '');
          
          PDF::Output('Transaction.pdf');
    }
    

    public static function printSupplierHistory($date1,$date2, $sup,  $colSums){
        $data=0;
        $sums=json_decode($colSums);
        $totalPurchaseAmount=$sums[0];
        $amountPaid=$sums[1];
        $remainingBalance=$sums[2];

        if($sup=="All"){
            $data=DB:: select('select * from vw_transaction_flow where Category="Supplier" and DateStamp between "'.$date1.'"and"'.$date2.'"');
        
        }
        else if($sup!="All"){
            $data=DB:: select('select * from vw_transaction_flow where Category="Supplier" and PartyName="'.$sup.'" and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }
       
           
          $table='
          <h2 style="text-align:center;" >Supplier Transaction History</h2><br>
          <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
          <tbody>
          <tr><br><br><br><br>
          
          <td max-height="20px" ><h2>Total Purchase Amount: : '.$totalPurchaseAmount.' </h2></td>
          <td max-height="20px" ><h2>Total Amount Paid: : '.$amountPaid.' </h2></td>
          <td max-height="20px" ><h2>Total Remaining Balance: : '.$remainingBalance.' </h2></td>
          

          </tr><tr><td max-height="20px"><h3>Filter by : '.$sup.'</h3> <h3>Date From: '.$date1.' To '.$date2.'</h3></td></tr>
          </tbody>
          </table> <br><br>
          <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
            <tbody>
                <tr>
                <th>Supplier Name</th>
                <th>Transaction Category</th> 
                <th>Account Name</th>
             
                <th>Total Purchase Amount</th>
                
               
                <th>Transaction Date</th> 
                    
                </tr>
            </tbody>
           
            </table> ';
          
           
          
          foreach ($data as $d){
              
          
              $table=$table.'
             
          <table cellpadding = "2" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
              <tbody>
              <tr>
              <td height:80px;>'.$d->PartyName.'</td> 
              <td height:80px;>'.$d->TransactionCatogery.'</td>
              <td height:80px;>'.$d->AccountName.' ('.$d->AccountNumber.')</td>
        
              <td height:80px;>'.$d->Amount.'</td>
               
              <td height:80px;>'.$d->DateStamp.'</td>
             
              </tr>   
              </tbody>
          </table> 
         
      



               ';}
               $table=$table.'
             
               <table border="0">
           <br>
           <br>
           
           <br>
           <br>
           <br>
           <br>
           <br>
           
           
           
           
           <tr>
           
           
           <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>
           
           
           
           
           </tr>
           
           
           
           </table>
                
           
               
                    ';
          
          
          PDF::SetTitle('Transaction History');
          PDF::AddPage();
          PDF::writeHTML($table, true, false, true, false, '');
          
          PDF::Output('Transaction.pdf');
          
    }




    public static function getDetails($id,$cat){
        if($cat=="Customer Paid to Company"){
            $in=DB:: table('vw_transaction_flow')
            ->where('TransactionID','=',$id)
            ->first()->InvoiceNo;
            $data=DB:: select('select * from vw_customersale_invoice where InvoiceNumber='.$in);
          
        $table='<h1 align="center"> Vehicle Sale Details</h1>
        <br><br><br>
            
        <table  align="center" cellpadding = "7" cellspacing = "0"  border="1" style="font-size:22.2px margin-left:49px;"><thead></thead>
        <tbody>
            <tr>
            <th style="text-align:center;">Invoice Number</th>
            <th style="text-align:center;">DateStamp</th>
            <th style="text-align:center;">Total Amount</th>
            <th style="text-align:center;">Net Total</th> 
            <th style="text-align:center;">Amount Paid</th> 
            <th style="text-align:center;">Sales Person</th> 
            <th style="text-align:center;">Net Amount</th> 
            <th style="text-align:center;">Sale Price</th> 
            <th style="text-align:center;">Customer Name</th> 
            <th style="text-align:center;">Father Name</th> 
            <th style="text-align:center;">Contact</th> 
            <th style="text-align:center;">Product Name</th> 
            <th style="text-align:center;">Engine Number</th> 
            <th style="text-align:center;">Chasis Number</th> 
            <th style="text-align:center;">color</th> 

            </tr>
        
    
        ';

    
    
    foreach ($data as $d){
        

        $table=$table.'
        
        
        <tr>
            <td style="text-align:center;" height:80px;>'.$d->InvoiceNumber.'</td> 
            <td style="text-align:center;" height:80px;>'.$d->DateStamp.'</td>
            <td style="text-align:center;" height:80px;>'.$d->TotalAmount.'</td>
            <td height:80px;>'.$d->NetTotal.'</td>
            <td height:80px;>'.$d->AmountPaid.'</td>
            <td height:80px;>'.$d->salesPerson.'</td>
            <td height:80px;>'.$d->NetAmount.'</td>
            <td height:80px;>'.$d->SalePrice.'</td>
            <td height:80px;>'.$d->CustomerName.'</td>
            <td height:80px;>'.$d->FatherName.'</td>
            <td height:80px;>'.$d->Contect.'</td>
            <td height:80px;>'.$d->ProductName.'</td>
            <td height:80px;>'.$d->EngineNumber.'</td>
            <td height:80px;>'.$d->ChasisNumber.'</td>
            <td height:80px;>'.$d->color.'</td>
        
            
        </tr>
        
  

       ';}
       return $table;

 
         
           
     
    }
    else if($cat=="Booking Order"){
        $in=DB:: table('vw_transaction_flow')
        ->where('TransactionID','=',$id)
        ->first()->InvoiceNo;
        $data=DB:: select('select * from vw_purchaseorderdetails where InvoiceNumber='.$in);
      
    $table='<h1 align="center"> Vehicle Booking Details</h1>
    <br><br><br>
        
    <table  align="center" cellpadding = "7" cellspacing = "0"  border="1" style="font-size:22.2px margin-left:49px;"><thead></thead>
    <tbody>
        <tr>
        <th style="text-align:center;">Invoice Number</th>
        <th style="text-align:center;">Product Serial</th>
        <th style="text-align:center;">Product Name</th>
        <th style="text-align:center;">Color</th> 
        <th style="text-align:center;">Engine Number</th> 
        <th style="text-align:center;">Chasis Number</th> 
        <th style="text-align:center;">Purchase Price Per Unit</th> 
        <th style="text-align:center;">DatePurchase</th> 
         

        </tr>
    

    ';



foreach ($data as $d){
    

    $table=$table.'
    
    
    <tr>
        <td style="text-align:center;" height:80px;>'.$d->InvoiceNumber.'</td> 
        <td style="text-align:center;" height:80px;>'.$d->ProductSerial.'</td>
        <td style="text-align:center;" height:80px;>'.$d->ProductName.'</td>
        <td height:80px;>'.$d->Color.'</td>
        <td height:80px;>'.$d->EngineNumber.'</td>
        <td height:80px;>'.$d->ChasisNumber.'</td>
        <td height:80px;>'.$d->PurchasePricePerUnit.'</td>
        <td height:80px;>'.$d->DatePurchase.'</td>
        
        
    </tr>
    
    
         ';}

         $table=$table.'
         <h2 align="center">Total Booking Amount:  '.$d->TotalAmount.'</h2>
         <h2 align="center">Total Amount Paid:  '.$d->AmountPaid.'</h2>
         ';
         return $table;
 
}
else if($cat=="All"){
    $data=DB:: select('select * from vw_transaction_flow where Category="Supplier"');

$table='<h1 align="center"> Supplier Transactions Details</h1>
<br><br><br>
        
<table  align="center" cellpadding = "7" cellspacing = "0"  border="1" style="font-size:22.2px margin-left:49px;"><thead></thead>
  <tbody>
      <tr>
      <th style="text-align:center;">Transaction ID</th>
      <th style="text-align:center;">Party Name</th> 
      <th style="text-align:center;">Account Name</th>
   
      <th style="text-align:center;">Total Purchase Amount</th>
  
   
      <th style="text-align:center;">Transaction Date</th> 
          
          
      </tr>
   
 
    ';

 
  $data=DB::select('select * from vw_transaction_flow where Category="Supplier"  and TransactionCatogery <> "Amount Transfer" and TransactionID ="'.$id.'"');
foreach ($data as $d){
    

    $table=$table.'
   
    
    <tr>
    <td style="text-align:center;" height:80px;>'.$d->TransactionID.'</td> 
      <td style="text-align:center;" height:80px;>'.$d->PartyName.'</td>
      <td style="text-align:center;" height:80px;>'.$d->AccountName.' ('.$d->AccountNumber.')</td>

      <td style="text-align:center;" height:80px;>'.$d->Amount.'</td>
      
     
    
      
      <td height:80px;>'.$d->DateStamp.'</td>
    
    </tr>
    


     ';}
     return $table;

}

else if($cat=="All"){
    $data=DB:: select('select * from vw_transaction_flow where Category="Supplier"');

$table='<h1 align="center"> Supplier Transactions Details</h1>
<br><br><br>
        
<table  align="center" cellpadding = "7" cellspacing = "0"  border="1" style="font-size:22.2px margin-left:49px;"><thead></thead>
  <tbody>
      <tr>
      <th style="text-align:center;">Transaction ID</th>
      <th style="text-align:center;">Party Name</th> 
      <th style="text-align:center;">Account Name</th>
   
      <th style="text-align:center;">Total Purchase Amount</th>
  
   
      <th style="text-align:center;">Transaction Date</th> 
          
          
      </tr>
   
 
    ';

 
  $data=DB::select('select * from vw_transaction_flow where Category="Supplier"  and TransactionCatogery <> "Amount Transfer" and TransactionID ="'.$id.'"');
foreach ($data as $d){
    

    $table=$table.'
   
    
    <tr>
    <td style="text-align:center;" height:80px;>'.$d->TransactionID.'</td> 
      <td style="text-align:center;" height:80px;>'.$d->PartyName.'</td>
      <td style="text-align:center;" height:80px;>'.$d->AccountName.' ('.$d->AccountNumber.')</td>

      <td style="text-align:center;" height:80px;>'.$d->Amount.'</td>
      
     
    
      
      <td height:80px;>'.$d->DateStamp.'</td>
    
    </tr>
    


     ';}
     return $table;

}
 
 
    
}
}

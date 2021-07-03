<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

use PDF;
class purchaseHistoryPrintController extends Controller
{
    public static function printPurchaseHistory2( $category,$partyID ){

        
        $data=0;
        if($category=="All" AND $partyID=="All"){
            $data=DB:: select('select * from vw_purchase_transactions where TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order"');
        
        }else if($category=="All" AND $partyID!="All"){
            
            $data=DB:: select('select * from vw_purchase_transactions where (TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order") and PaidTo='.$partyID);
           // return $data;
        }else if($category!="All" AND $partyID=="All"){
            $data=DB:: select('select * from vw_purchase_transactions where TransactionCatogery="'.$category.'"');
        
        }else if($category!="All" AND $partyID!="All"){
            $data=DB:: select('select * from vw_purchase_transactions where TransactionCatogery="'.$category.'" and PaidTo='.$partyID);
        
        }
        $totalPurchaseAmount=0;
        $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalPurchaseAmount += floatval($d->TotalAmount);
            $remainingAmount += floatval($d->AmountPaid);
            $invoiceBalance += floatval($d->Balance);
          }
           
          $table='
          <h2 style="text-align:center;" >Purchase Transaction History</h2><br>
          <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
          <tbody>
          <tr><br><br><br><br>
          
          <td max-height="20px" ><h2>Total Purchase Amount: : '.$totalPurchaseAmount.' </h2></td>
          <td max-height="20px" ><h2>Total Amount : '.$remainingAmount.' </h2></td>
          <td max-height="20px" ><h2>Total Balance: '.$invoiceBalance.' </h2></td>

          </tr><tr><td max-height="20px"><h3>Filter by : '.$category.'</h3></td></tr>
          </tbody>
          </table> <br><br>
          <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
            <tbody>
                <tr>
                <th>Invoice Number</th>
                <th>Party Name</th>
                <th>Account Name</th>
                <th>Transaction Category</th>
                <th>Total Purchase Amount</th>
                <th>Amount Paid</th>
                <th>Balance</th>
                <th>Transaction Date</th> 
                    
                </tr>
            </tbody>
           
            </table> ';
          
           
          
          foreach ($data as $d){
              
          
              $table=$table.'
             
          <table cellpadding = "2" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
              <tbody>
              <tr>
              <td height:80px;>'.$d->InvoiceNo.'</td> 
              <td height:80px;>'.$d->PartyName.'</td>
              <td height:80px;>'.$d->AccountName.' ('.$d->AccountNumber.')</td>
              <td height:80px;>'.$d->TransactionCatogery .'</td>
              <td height:80px;>'.$d->TotalAmount.'</td>
              <td height:80px;>'.$d->AmountPaid.'</td>
              <td height:80px;>'.$d->Balance.'</td>
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
    

    public static function printPurchaseHistory($date1,$date2,$catID, $partyID){
        $data=0;
        if($catID=="All" AND $partyID=="All"){
            $data=DB:: select('select * from vw_purchase_transactions where (TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order") and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }else if($catID=="All" AND $partyID!="All"){
            
            $data=DB:: select('select * from vw_purchase_transactions where (TransactionCatogery="Stock Purchased" or TransactionCatogery="Booking Order") and DateStamp between "'.$date1 .'"and"'.$date2.'" and PaidTo='.$partyID);
           // return $data;
        }else if($catID!="All" AND $partyID=="All"){
            $data=DB:: select('select * from vw_purchase_transactions where TransactionCatogery="'.$catID.'" and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }else if($catID!="All" AND $partyID!="All"){
            $data=DB:: select('select * from vw_purchase_transactions where TransactionCatogery="'.$catID.'" and  DateStamp between "'.$date1 .'"and"'.$date2.'" and PaidTo='.$partyID);
        
        }$totalPurchaseAmount=0;
        $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalPurchaseAmount += floatval($d->TotalAmount);
            $remainingAmount += floatval($d->AmountPaid);
            $invoiceBalance += floatval($d->Balance);
          }
           
          $table='
          <h2 style="text-align:center;" >Purchase Transaction History</h2><br>
          <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
          <tbody>
          <tr><br><br><br><br>
          
          <td max-height="20px" ><h2>Total Purchase Amount:  '.$totalPurchaseAmount.' </h2></td>
          <td max-height="20px" ><h2>Total Amount Paid:'.$remainingAmount.' </h2></td>
          <td max-height="20px" ><h2>Total Balance: '.$invoiceBalance.' </h2></td>

          </tr><tr><td max-height="20px"><h3>Filter by : '.$catID.'</h3> <h3>Date From: '.$date1.' To '.$date2.'</h3></td></tr>
          </tbody>
          </table> <br><br>
          <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
            <tbody>
                <tr>
                <th>Invoice Number</th>
                <th>Party Name</th>
                <th>Account Name</th>
                <th>Transaction Category</th>
                <th>Total Purchase Amount</th>
                <th>Amount Paid</th>
                <th>Balance</th>
                <th>Transaction Date</th> 
                    
                </tr>
            </tbody>
           
            </table> ';
          
           
          
          foreach ($data as $d){
              
          
              $table=$table.'
             
          <table cellpadding = "2" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
              <tbody>
              <tr>
              <td height:80px;>'.$d->InvoiceNo.'</td> 
              <td height:80px;>'.$d->PartyName.'</td>
              <td height:80px;>'.$d->AccountName.' ('.$d->AccountNumber.')</td>
              <td height:80px;>'.$d->TransactionCatogery .'</td>
              <td height:80px;>'.$d->TotalAmount.'</td>
              <td height:80px;>'.$d->AmountPaid.'</td>
              <td height:80px;>'.$d->Balance.'</td>
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
  }
 
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
}

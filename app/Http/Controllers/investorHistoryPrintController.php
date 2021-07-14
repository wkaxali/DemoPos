<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use PDF;

class investorHistoryPrintController extends Controller
{
    public static function printInvestorHistory2($partyID, $party, $colSums){
        $sums=json_decode($colSums);
        $totalPurchaseAmount=$sums[0];
        $amountPaid=$sums[1];
        $remainingBalance=$sums[2];

        if($partyID=="All" ){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo IS NOT NULL and PaidTo <>0');
        }else {
            
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and PaidTo='.$partyID);
        }
        
           
          $table='
          <h2 style="text-align:center;" >Expense Transaction History</h2><br>
          <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
          <tbody>
          <tr><br><br><br><br>
          
          <td max-height="20px" ><h2>Total Purchase Amount: : '.$totalPurchaseAmount.' </h2></td>
          <td max-height="20px" ><h2>Total Amount Paid: : '.$amountPaid.' </h2></td>
          <td max-height="20px" ><h2>Total Remaining Balance: : '.$remainingBalance.' </h2></td>

          </tr><tr><td max-height="20px"><h3>Filter by : '.$party.'</h3></td></tr>
          </tbody>
          </table> <br><br>
          <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
            <tbody>
                <tr>
                <th>Party Name</th>
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
    

    public static function printInvestorHistory($date1,$date2, $partyId, $party, $colSums){
        $sums=json_decode($colSums);
        $totalPurchaseAmount=$sums[0];
        $amountPaid=$sums[1];
        $remainingBalance=$sums[2];
        $data=0;
        if($partyId=="All" ){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and DateStamp between "'.$date1 .'"and"'.$date2.'" and PaidTo IS NOT NULL and PaidTo <>0');
        
        }  else if($partyId!="All" ){
            $data=DB:: select('select * from vw_transaction_flow where category="Investor" and DateStamp between "'.$date1 .'"and"'.$date2.'" and PaidTo="'.$partyId.'"');
        
        }
           
          $table='
          <h2 style="text-align:center;" >Expense Transaction History</h2><br>
          <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
          <tbody>
          <tr><br><br><br><br>
          
          <td max-height="20px" ><h2>Total Purchase Amount: : '.$totalPurchaseAmount.' </h2></td>
          <td max-height="20px" ><h2>Total Amount Paid: : '.$amountPaid.' </h2></td>
          <td max-height="20px" ><h2>Total Remaining Balance: : '.$remainingBalance.' </h2></td>
          

          </tr><tr><td max-height="20px"><h3>Filter by : '.$party.'</h3> <h3>Date From: '.$date1.' To '.$date2.'</h3></td></tr>
          </tbody>
          </table> <br><br>
          <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
            <tbody>
                <tr>
                <th>Party Name</th>
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
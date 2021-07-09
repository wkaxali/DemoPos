<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

use PDF;
class accountsHistoryPrintController extends Controller
{
    public static function printAccountHistory2($catID, $category  ){

        if($catID=="All" ){
            $data=DB:: select('select * from vw_transaction_flow');
        }else {
            
            $data=DB:: select('select * from vw_transaction_flow where AID='.$catID);
        }
        $totalAmount=0;
         
        foreach($data as $d){
            $totalAmount += floatval($d->Amount);
           
          }
           
          $table='
          <h2 style="text-align:center;" >Accounts Transaction History</h2><br>
          <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
          <tbody>
          <tr><br><br><br><br>
          
          <td max-height="20px" ><h2>Total Amount: : '.$totalAmount.' </h2></td>
           

          </tr><tr><td max-height="20px"><h3>Filter by : '.$category.'</h3></td></tr>
          </tbody>
          </table> <br><br>
          <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
            <tbody>
                <tr>
                <th>Transaction ID</th>
                
                <th>Account Name</th>
                <th>Transaction Type</th>
                <th>Transaction Category</th>
                <th>Amount</th>
                <th>Transaction Date</th> 
                    
                </tr>
            </tbody>
           
            </table> ';
          
           
          
          foreach ($data as $d){
              
          
              $table=$table.'
             
          <table cellpadding = "2" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
              <tbody>
              <tr>
              <td height:80px;>'.$d->TransactionID.'</td> 
               
              <td height:80px;>'.$d->AccountName.' ('.$d->AccountNumber.')</td>
              <td height:80px;>'.$d->TransactionCatogery.'</td>
              <td height:80px;>'.$d->TransactionType.'</td>
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
    

    public static function printAccountHistory($date1,$date2, $catID, $cat ){
        $data=0;
        if($catID=="All" ){
            $data=DB:: select('select * from vw_transaction_flow where  DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }  else if($catID!="All" ){
            $data=DB:: select('select * from vw_transaction_flow where AID="'.$catID.'" and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }
        $totalAmount=0;
         
        foreach($data as $d){
            $totalAmount += floatval($d->Amount);
           
          } 
           
          $table='
          <h2 style="text-align:center;" >Accounts Transaction History</h2><br>
          <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
          <tbody>
          <tr><br><br><br><br>
          
          <td max-height="20px" ><h2>Total Amount:  '.$totalAmount.' </h2></td>
          

          </tr><tr><td max-height="20px"><h3>Filter by : '.$cat.'</h3> <h3>Date From: '.$date1.' To '.$date2.'</h3></td></tr>
          </tbody>
          </table> <br><br>
          <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
            <tbody>
                <tr>
                <th>Transaction ID</th>
                
                <th>Account Name</th>
                <th>Transaction Type</th>
                <th>Transaction Category</th>
                <th>Amount</th>
                <th>Transaction Date</th> 
                    
                </tr>
            </tbody>
           
            </table> ';
          
           
          
          foreach ($data as $d){
              
          
              $table=$table.'
             
          <table cellpadding = "2" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
              <tbody>
              <tr>
              <td height:80px;>'.$d->TransactionID.'</td> 
               
              <td height:80px;>'.$d->AccountName.' ('.$d->AccountNumber.')</td>
              <td height:80px;>'.$d->TransactionCatogery.'</td>
              <td height:80px;>'.$d->TransactionType.'</td>
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

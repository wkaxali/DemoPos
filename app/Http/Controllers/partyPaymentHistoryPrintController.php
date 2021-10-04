<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use Carbon\Carbon;
use PDF;
use DB;
class partyPaymentHistoryPrintController extends Controller
{
    
    public static function partyPaymentDetails($TID){
 
     $data=DB:: select('select * from vw_transaction_flow where TransactionID='.$TID);
  
        $TransactionID=$data[0]-> TransactionID;
        
        $TransactionCatogery=$data[0]-> TransactionCatogery;
        $Amount=$data[0]-> Amount;
        $DateStamp=$data[0]-> DateStamp;
        $PartyName=$data[0]-> PartyName;
        $AccountName=$data[0]-> AccountName;
        $AccountNumber=$data[0]-> AccountNumber;
        $Remarks=$data[0]-> Remarks;
        
 
        $newHTML= '<table border="0" cellpadding="2" >
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
        
        <td width="100%" border="0" align="center" ><h4>Party Payment Details</h4></td>
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
        
        <td width="30%" border="1" align="left" >  Transaction Catogery</td>
        <td width="55%" border="1" align="center">'. $TransactionCatogery.'</td>
        
        </tr>
        <tr >
        <td width="8%" border="0" align="left" ></td>
        
        <td width="30%" border="1" align="left" > PartyName</td>
        <td width="55%" border="1" align="center">'.$PartyName.'</td>
        
        </tr><tr >
        <td width="8%" border="0" align="left" ></td>
        
        <td width="30%" border="1" align="left" >  Amount</td>
        <td width="55%" border="1" align="center">'.$Amount.'</td>
        
        </tr><tr >
        <td width="8%" border="0" align="left" ></td>
        
        <td width="30%" border="1" align="left" > DateStamp</td>
        <td width="55%" border="1" align="center">'.$DateStamp.'</td>
        
        </tr><tr >
        <td width="8%" border="0" align="left" ></td>
        
        <td width="30%" border="1" align="left" >  TransactionCatogery</td>
        <td width="55%" border="1" align="center">'. $TransactionCatogery.'</td>
        
        </tr>
        <tr>
        <td width="8%" border="0" align="left" ></td>
        
        <td width="30%" border="1">Account Name</td>
        <td width="55%" align="center" border="1">'.$AccountName.' ('.$AccountName.')</td>
        
        </tr>
        <tr>
        
        <td width="8%" border="0" align="left" ></td>
        
        <td width="30%" border="1"> Remarks</td>
        <td width="55%" align="center" border="1">'.  $Remarks .'</td>
        
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

    public static function printPartyHistory2($partyID, $party, $colSums){
        $sums=json_decode($colSums);
        $totalPurchaseAmount=$sums[0];
        $amountPaid=$sums[1];
        $remainingBalance=$sums[2];

        if($partyID=="All" ){
            $data=DB:: select('select * from vw_transaction_flow where PaidTo IS NOT NULL and PaidTo <>0');
        }else {
            
            $data=DB:: select('select * from vw_transaction_flow where PaidTo='.$partyID);
        }
           
          $table='
          <h2 style="text-align:center;" >Party Payment Transaction History</h2><br>
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
    

    public static function printPartyHistory($date1,$date2, $partyId, $party, $colSums){
        $data=0;
        $sums=json_decode($colSums);
        $totalPurchaseAmount=$sums[0];
        $amountPaid=$sums[1];
        $remainingBalance=$sums[2];

        if($partyId=="All" ){
            $data=DB:: select('select * from vw_transaction_flow where  DateStamp between "'.$date1 .'"and"'.$date2.'" and PaidTo IS NOT NULL and PaidTo <>0');
        
        }  else if($partyId!="All" ){
            $data=DB:: select('select * from vw_transaction_flow where DateStamp between "'.$date1 .'"and"'.$date2.'" and PaidTo="'.$partyId.'"');
        
        }
  
          $table='
          <h2 style="text-align:center;" >Party Payment Transaction History</h2><br>
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

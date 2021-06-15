<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use PDF;

class summaryReportController extends Controller
{
  
    function foo(){
        $this->$n=90;
    }

    public static function soldUnits(Request $request,$CO){
        // $obj=json_decode($CO);
        // $date1=$obj[0];
        // $date2=$obj[1];

        $date1='"2020-01-24"';
        $date2='"2021-05-24"';

        $data=DB:: select('SELECT ProductName, count(*) as UnitsSolds FROM vw_stockdetails
        where Category = 1 and Status = "Sold" and DateStamp between '.$date1.' and '.$date2.'
        group by ProductName');

        return $data;
    }

    public static function purchasedUnits(Request $request,$CO){
        // $obj=json_decode($CO);
        // $date1=$obj[0];
        // $date2=$obj[1];

        $date1='"2020-01-24"';
        $date2='"2021-05-24"';

        $data=DB:: select('SELECT ProductName, count(*) as UnitsSolds FROM vw_stockdetails
        where Category = 1 and Status = "Sold" and DateStamp between '.$date1.' and '.$date2.'
        group by ProductName');

        return $data;
    }

    public static function transactions($date1,$date2){
        

        $date1='"2020-01-24 13:18:16"';
        $date2='"2021-05-24 13:18:16"';

        $data=DB:: select('SELECT TransactionType, DateStamp,TransactionCatogery,sum(Amount) as TotalAmount FROM fmm.tbltransactionflow 
        where DateStamp between '.$date1.' and '.$date2.'
       group by
        TransactionCatogery');
        session(['TransactionGroupData' => $data]);
        return $data;
    }
    


    public static function summaryReportTabularBase(){
        $data=DB:: select('SELECT TransactionCatogery, SUM(Amount) AS Amount
        FROM tbltransactionflow where TransactionCatogery != "null" And TransactionType="Debit" group by TransactionCatogery');
             $total=DB:: select('SELECT TransactionCatogery, SUM(Amount) AS Amount
             FROM tbltransactionflow where TransactionCatogery != "null" And TransactionType="Debit"');
       
        $date1='2020-01-24 ';
        $date2='2021-05-24';

        $table=' 
        <h4  align="center">From '.$date1.' To From '.$date2.'  </h4>
        
        
        <h3 align="center">Debit</h3> 
        <table width= 100px style="display: inline-block; margin-right:10px" border="1" >
        <thead></thead>
        <tbody>
             
            <tr>
           
            <td align="center" ><b>Transaction Catogery</b></td>
            <td align="center" ><b>Amount</b></td>
         
            </tr>
        </tbody>
        </table> 
';
foreach ($total as $t){
    foreach ($data as $d){

        $table=$table.'
        <table width= 100px style="display: inline-block;" border="1" >
    <thead></thead>
    <tbody>
         
        <tr>
       
        <td align="center" >'.$d->TransactionCatogery.'</td>
        <td align="center" >'.$d->Amount.'</td>
     
        </tr>
        </tbody>
    </table> 

        ';
    }
    $table=$table.' <table style="display: inline-block;" border="1" ><tr><td align="center" ><b>Total</b></td>
        <td align="center" >'.$t->Amount.'</td>
        </tr></table> ';
 }
    
        $table=$table.' 
        <h3 align="center">Credit</h3> 
        <table width= 100px style="display: inline-block;" border="1" >
        <thead></thead>
        <tbody>
             
            <tr>
           
            <td align="center" ><b>Transaction Catogery</b></td>
            <td align="center" ><b>Amount</b></td>
           
            </tr>
            </tbody>
        </table> 
';
    
        $data=DB:: select('SELECT TransactionCatogery, SUM(Amount) AS Amount
        FROM tbltransactionflow where TransactionCatogery != "null" And TransactionType="Credit" group by TransactionCatogery');
             $total=DB:: select('SELECT TransactionCatogery, SUM(Amount) AS Amount
             FROM tbltransactionflow where TransactionCatogery != "null" And TransactionType="Credit"');
          foreach ($total as $t){       
    foreach ($data as $d){

        $table=$table.'
       
        <table width= 100px style="display: inline-block;" border="1" >
        <thead></thead>
    <tbody>
         
        <tr>
       
        <td align="center" >'.$d->TransactionCatogery.'</td>
        <td align="center" >'.$d->Amount.'</td></tr>
        
        </tbody>
    </table> 

        '
        ;
       

    
    }
    $table=$table.' <table style="display: inline-block;" border="1" ><tr><td align="center" ><b>Total</b></td>
        <td align="center" >'.$t->Amount.'</td>
        </tr></table> ';
 }

    $tdebit=DB:: select('SELECT TransactionCatogery, SUM(Amount) AS Amount
    FROM tbltransactionflow where TransactionCatogery != "null" And TransactionType="Debit"');

    $tcredit=DB:: select('SELECT TransactionCatogery, SUM(Amount) AS Amount
    FROM tbltransactionflow where TransactionCatogery != "null" And TransactionType="Credit"');
  foreach ($tcredit as $t){       
    foreach ($tdebit as $d){
            $debit=$d->Amount;
            $credit=$t->Amount;
        $table=$table.' 
            <br><br><br><br>
        <table>
        <tr>
        <td><h3  style="font-family: Times New Roman, Times, serif; ">
        Balance (profit/loss)= '.($debit-$credit).'
        </h3></td>
        </tr>
        </table>
        ';
     }
    }
    
    PDF::SetTitle('Request for Invoice');
    PDF::AddPage();
    PDF::writeHTML($table, true, false, true, false, '');

    PDF::Output('invoiceRequest.pdf');
    
}
    public static function summaryReport(){
        $data= self::transactions(null,null);
     //dd($data);
    // return $data;
    $creditHtml='';
    $debitHtml='';
    $dateFrom="2019-01-24";
    $dateTo="2020-01-24";
        $debitAmountSum=0;
        $creditAmountSum=0;
        $total=0;
        foreach($data as $row){
        // dd($row);
        if($row->TransactionType=='Debit'){
        $debitHtml=$debitHtml.' <tr >    
            <td >'.$row->TransactionCatogery.'</td>
            <td align="center">'.number_format($row->TotalAmount).'</td>
            </tr>';
            $debitAmountSum=floatval($debitAmountSum)  +floatval($row->TotalAmount);

        }
        else if($row->TransactionType=='Credit'){
            $creditHtml=$creditHtml.' <tr >    
            <td >'.$row->TransactionCatogery.'</td>
            <td align="center">'.number_format($row->TotalAmount).'</td>
            
            </tr>';
            $creditAmountSum=floatval($creditAmountSum)  + floatval($row->TotalAmount);
            }


        }
        $remarks="Loss";
        $total=floatval($creditAmountSum)-floatval($debitAmountSum);
        if(floatval($total)>0){

            $remarks="Profit";

        }

    //dd($creditHtml);

    $newHTML='
    <table border="0">
 
    <tr><td>
    <table border="0"cellpadding="7">
    <thead>
    <tr>
    <th align="center"><h1><br><br><br>Summary Report</h1></th>
    </tr>
  

    </thead>
    
    <tbody>
   
    
    </tbody>
    
    
    
    </table>
    <br>
 
    
    <table border="0">
    <tbody>
  
    <tr>
    <td  align="right"><br><span style="font-size: medium;">Date From:    '.$dateFrom.'</span></td>
    <td  align="left"><br><span style="font-size: medium;">From:'.$dateTo.'</span></td>
  
    
    
    </tr>
        </tbody>
    </table>
    
    
    
    <br>
    <br>
  
 
    <table border="1" cellpadding="3">
    <thead>
    <tr >
    <td  align="left" bgcolor="#C0C0C0" > Credit </td>
    <td align="center" bgcolor=" #C0C0C0">'.number_format($creditAmountSum).'</td>
    
     </tr>
    </thead>
    <tbody >
   
    
  '.$creditHtml.'
   

    
    
    </tbody>
    </table>
   
    <table border="1" cellpadding="5">
    <thead>
    <tr>
    <td align="left" bgcolor="#C0C0C0" >Debit </td>
    <td align="center" bgcolor=" #C0C0C0">'.number_format($debitAmountSum).'</td>
    
    </tr>
    </thead>
    <tbody >
   '.$debitHtml.'
    
    </tbody>
    </table>

    
 
    
    <table border="0"cellpadding="7">
    <thead>
 
   
    <br>
    <br>
    
    
    <br>
    <tr>
    <td width="60%" border="0" align="center" bgcolor=" #C0C0C0">Total</td>
    <td width="40%" align="center" border="0"  bgcolor=" #C0C0C0">'.number_format($total).'</td>
    
    
    
    </tr>
    <tr>
    <br>
    
    <td width="60%" border="0" align="center" bgcolor=" #C0C0C0">Profit/Loss</td>
    <td width="40%" align="center" border="0" bgcolor=" #C0C0C0">'.$remarks.'</td>
    
    
    
    </tr>
    
    
    
    
    </tbody>
    </table>
       
    </td>
    </tr>
    </table>

    ';     // $html= $htmldata;

    
    PDF::SetTitle('Request for Invoice');
    PDF::AddPage();
    PDF::writeHTML($newHTML, true, false, true, false, '');

    PDF::Output('invoiceRequest.pdf');

    }
   
   
public static function stockDetails(){
    

    $newHTML='<table border="0">
    <thead>
    <tr>
    <th align="center"><h1>Stock Details</h1></th>
    
    
    </tr>
    <tr>
    <th align="center"><h1>(Autos)</h1></th>    
    
    </tr>
    </thead>
    
    <tbody>
    <tr><td align="center"></td></tr>
    
    <tr><td align="center"><h3>Date: July 2014</h3></td></tr>
    
    <tr><td align="center"></td></tr>
    
    
    </tbody>
    
    
    
    </table>
    
    
    <table border="1" cellpadding="5">
    <thead>
    <tr>
    <th width="30%" border="2" align="left" >Autos</th>
    <th width="30%" border="2" align="left" >Total Purchases</th>    
    <th width="20%" border="2" align="left" >Sold</th>    
    <th width="20%" border="2" align="left" >In Stock</th>    

    </tr>
    </thead>
     
    <tbody>
    <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>
        
    <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>
    
     
     
    </tbody>
    </table>
    <table border="1" cellpadding="9">
 <br>
 <br>
 <br>

    <thead>
    <tr>
    <th width="30%" border="2" align="left" >Total</th>
    <th width="30%" border="2" align="left" > 1500</th>    
    <th width="20%" border="2" align="left" >124</th>    
    <th width="20%" border="2" align="left" > 500</th>    

    </tr>
    </thead>    
    </table>
    
    
    ';
     
        PDF::SetTitle('Qoutation');
        PDF::AddPage();
        PDF::writeHTML($newHTML, true, false, true, false, '');
    
        PDF::Output('qty.pdf','I');
    
    
    
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

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

    public static function transactions(Request $request,$CO){
        $obj=json_decode($CO);
        $date1=$obj[0];
        $date2=$obj[1];

        $date1='"2020-01-24 13:18:16"';
        $date2='"2021-05-24 13:18:16"';

        $data=DB:: select('SELECT DateStamp,TransactionCatogery,sum(Amount) as TotalAmount FROM fmm.tbltransactionflow 
        where DateStamp between '.$date1.' and '.$date2.'
       group by
        TransactionCatogery');
        
        return $data;
    }


    public static function summaryReport(){

    $newHTML='
    <table border="1">
 
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
    <td  align="center"><br><span style="font-size: medium;">Date</span></td>

  
    
    
    </tr>
        </tbody>
    </table>
    
    
    
    <br>
    <br>
  
 
    <table border="1" cellpadding="3">
    <thead>
    <tr >
    <td  align="left" bgcolor="#C0C0C0" > Credit </td>
    <td align="center" bgcolor=" #C0C0C0">1300000</td>
    
     </tr>
    </thead>
    <tbody >
    <tr >
    <td >Sales Vicheels</td>
    <td align="center">10039840</td>
    </tr>
    <tr >
    <td >Parts</td>
    <td align="center">10040</td>
    </tr>
    <tr >
    <td >Services</td>
    <td align="center">19840</td>
    </tr>
    <tr >
    <td >Other</td>
    <td align="center">9840</td>
    </tr>
    <tr >
    <td >Other</td>
    <td align="center">9840</td>
    </tr>
    <tr >
    <td >Other</td>
    <td align="center">9840</td>
    </tr>
    <tr >
    <td >Other</td>
    <td align="center">9840</td>
    </tr>

    
    
    </tbody>
    </table>
   
    <table border="1" cellpadding="5">
    <thead>
    <tr>
    <td align="left" bgcolor="#C0C0C0" >Debit </td>
    <td align="center" bgcolor=" #C0C0C0">1300000</td>
    
    </tr>
    </thead>
    <tbody >
    <tr >
    <td >Payments</td>
    <td align="center">10039840</td>
    </tr>
    <tr >
    <td >Pay</td>
    <td align="center">10040</td>
    </tr>
    <tr >
    <td >Expense</td>
    <td align="center">19840</td>
    </tr>
    <tr >
    <td >Heads</td>
    <td align="center">9840</td>
    </tr>
    <tr >
    <td >Other</td>
    <td align="center">9840</td>
    </tr>
    <tr >
    <td >Other</td>
    <td align="center">9840</td>
    </tr>
    
    </tbody>
    </table>

    
 
    
    <table border="0"cellpadding="7">
    <thead>
 
   
    <br>
    <br>
    
    
    <br>
    <tr>
    <td width="60%" border="0" align="center" bgcolor=" #C0C0C0">Total</td>
    <td width="40%" align="center" border="0"  bgcolor=" #C0C0C0">_______________________</td>
    
    
    
    </tr>
    <tr>
    <br>
    
    <td width="60%" border="0" align="center" bgcolor=" #C0C0C0">Profit/Loss</td>
    <td width="40%" align="center" border="0" bgcolor=" #C0C0C0">______________________</td>
    
    
    
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

}

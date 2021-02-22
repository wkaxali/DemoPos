<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Carbon\Carbon;

use DB;

use PDF;
use NumberToWords\NumberToWords;

class printServiceSaleInvoice extends Controller
{
    public function afterSalesServicePrint()
    {
        
        $newHTML='<table border="0">
        <thead>
        <tr>
        <th><br><h1>FORLAND MODREN MOTORS</h1></th>
        
        
        </tr>
        </thead>
        
        <tbody>
        <tr>
        <br>
        <td>
        
        NTN:82588676-6 <br>
        
        STRN:3277876204764 <br>
        Customer\'s Copy
        </td>
        
        
        
        
        
        
        </tr>
        <tr><td align="center"><h1>Sales Invoice</h1></td></tr>
        
        
        
        </tbody>
        
        
        
        </table>
        <br>
        <br>
        <br>
        
        <table border="0">
        <tbody>
        <tr>
        <td><br><span style="font-size: medium;">Customer Name:</span></td>
        <td align="center"><br>'.session()->get("customerName").'</td>
        <td><br><span style="font-size: medium;">Booking No:</span></td>
        <td align="center"><br>BO-FMM-'.session()->get("invoiceNo").'</td>
        
        
        </tr>
        <tr>
        <td><br><span style="font-size: medium;">Address:</span></td>
        <td align="center"><br>'.session()->get("address").'</td>
        <td><br><span style="font-size: medium;">Invoice Number:</span></td>
        <td align="center"><br>'.session()->get("invoiceNo").'</td>
        
        
        </tr>
        <tr>
        <td><br><span style="font-size: medium;">CNIC/NTN:</span></td>
        <td align="center"><br>'.session()->get("CNIC").'</td>
        <td><br><span style="font-size: medium;">Invoice Date:</span></td>
        <td align="center"><br>'.session()->get("invoiceDate").'</td>
        
        
        </tr>
        <tr>
        <td><br><span style="font-size: medium;">Contact:</span></td>
        <td align="center"><br>'.session()->get("contact").'</td>
        <td><br><span style="font-size: medium;"></span></td>
        <td align="center"><br></td>
        
        
        </tr>
        </tbody>
        </table>
        
        
        
        <br>
        <br>
        <br>
        <br>
        <table border="1" >
        <tr ><td>
        <table border="0">
        <thead>
        <tr>
        <td align="left" bgcolor="#C0C0C0" >
        Description </td>
        <td align="center" bgcolor="#C0C0C0" >color</td>
        <td align="center"bgcolor="#C0C0C0" >Engine No</td>
        <td align="center" bgcolor=" #C0C0C0">Chassis No</td>
        <td align="center" bgcolor=" #C0C0C0">Amount</td>
        
        </tr>
        </thead>
        <tbody >
        <tr>
        <td>'.session()->get("description").'</td>
        <td>'.session()->get("color").'</td>
        <td>'.session()->get("engineNo").'</td>
        <td>'.session()->get("chassisNo").'</td>
        <td>'.session()->get("unitPrice").'</td>
        </tr>
        
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr> <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr> <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr> <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr> <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr> <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr> <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr> <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </table>
        
        
        
        <table border="0">
        <thead>
        <tr>
        <th width="60%" border="1" align="center">
        Total in Word </th>
        
        <th width="40%" border="1" align="center" style="line-height: 100%;"> Total PKR</th>
        
        </tr>
        </thead>
        <tbody>
        <tr>
        <td width="60%" border="1" align="center">'.session()->get("amountInWords").'/-Only.</td>
        <td width="40%" border="1" align="center">'.session()->get("amountPaid").'</td>
        
        
        </tr>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        
        <br>
        <tr>
        <td width="60%" border="0"></td>
        <td width="40%" align="center" border="0">_______________________</td>
        
        
        
        </tr>
        <tr>
        <br>
        
        <td width="60%" border="0"></td>
        <td width="40%" align="center" border="0">Sign and Signature</td>
        
        
        
        </tr>
        
        
        
        
        </tbody>
        </table>
        <br><br> <br>
        <br>
        <table border="0">
        
        <tr>
        
        
        <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Milat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>
        
        
        
        
        </tr>
        <tr>
        
        
        <td bgcolor="crimson" align="center" border="0"><h5> Email Adress: forlandmodernmotoprs@yahoo.com </h5></td>
        
        
        
        
        </tr>
        
        </table>

    ';     // $html= $htmldata;
  
        
        PDF::SetTitle('Request for Invoice');
        PDF::AddPage();
        PDF::writeHTML($newHTML, true, false, true, false, '');

        PDF::Output('invoiceRequest.pdf');
    }
}

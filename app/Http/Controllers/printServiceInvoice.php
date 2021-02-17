<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;



// session(['invoiceNo' => $InvoiceNo]);
// session(['customerID' => $re[0]->CustomerID]);
// session(['itemNo' => $re->ProductSerial]);
// session(['quantity' => $re->Quantity]);
// session(['unitPrice' => $re->PerUnitSalePrice]);
// session(['productName' => $re->ProductName]);
// session(['price' => $re->PerUnitSalePrice]);
// session(['contact' => $re->Contect]);
// session(['customerName' => $re->CustomerName]);
// session(['CNIC' => $re->CNIC]);
// session(['address' => $re->Address]);
// session(['engineNo' => $re->EngineNumber]);
// session(['chassisNo' => $re->ChasisNumber]);
// session(['color' => $re->color]);
// session(['fatherName' => $re->FatherName]);
// session(['total' => $re->AmountPaid]);
// session(['referenceNumber' => 'FMM-GDP-'.$InvoiceNo]);
// session(['amountPaid' => $re->AmountPaid]);
// session(['description' => $re->description]);

// session(['balance' => $re->Balance]);
// session(['totalCost' => $re->TotalCost]);
// session(['tax' => $re->VAT]);
// session(['endTotal' => $re->NetTotal]);






class printServiceInvoice extends Controller
{
    public function printSaleInvoice(){
  $html= '<table border="0">
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
<td><br><span style="font-size: medium;">Customer Name</span></td>
<td align="center"><br>'.session()->get("customerName").'</td>
<td><br><span style="font-size: medium;">Booking No</span></td>
<td align="center"><br>'.session()->get("_____").'</td>


</tr>
<tr>
<td><br><span style="font-size: medium;">Address</span></td>
<td align="center"><br>'.session()->get("address").'</td>
<td><br><span style="font-size: medium;">Invoice Number</span></td>
<td align="center"><br>'.session()->get("invoiceNo").'</td>


</tr>
<tr>
<td><br><span style="font-size: medium;">CNIC/NTN</span></td>
<td align="center"><br>'.session()->get("CNIC").'</td>
<td><br><span style="font-size: medium;">Invoice Date</span></td>
<td align="center"><br>'.session()->get("_____").'</td>


</tr>
<tr>
<td><br><span style="font-size: medium;">Contact</span></td>
<td align="center"><br>'.session()->get("address").'</td>
<td><br><span style="font-size: medium;"></span></td>
<td align="center"><br>____________</td>


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
<tr >
<td >'.session()->get("description").'</td>

</tr> <tr>
<td>'.session()->get("color").'</td>

</tr> <tr>
<td>'.session()->get("engineNo").'</td>

</tr> <tr>
<td>'.session()->get("chassisNo").'</td>

</tr> <tr>
<td>'.session()->get("amoutPaid").'</td>

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
<td width="60%" border="1" align="center">1000</td>
<td width="40%" border="1" align="center">10000</td>


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
<td width="40%" align="center" border="0">'.session()->get("address").'</td>



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

</table>';




  
PDF::SetTitle('Request for Invoice');
PDF::AddPage();
PDF::writeHTML($newHTML, true, false, true, false, '');

PDF::Output('sales.pdf');

}
}

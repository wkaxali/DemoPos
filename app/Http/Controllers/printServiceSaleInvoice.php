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
$productHtmlTDs=null;
$counter=0;
$maxinmunLines=13;
// dd(session()->get('ProductNames'));

foreach(session()->get('ProductNames') as $p){
$productHtmlTDs =$productHtmlTDs.'<tr>
<td align="center" width="10%"><div>'.$p[0].'</div></td>
<td align="center" width="30%"><div>'.$p[1].'</div></td>
<td align="center" width="10%"><div>'.$p[2].'</div></td>
<td align="center" width="20%"><div>'.$p[3].'</div></td>
<td align="center" width="15%"><div>'.$p[4].'</div></td>
<td align="center" width="15%"><div>'.$p[5].'</div></td></tr>';//..'<td>'.$p[1].'</td><td>'.$p[2].'</td><td>'.$p[3].'</td><td>'.$p[4].'</td><td>'.$p[5].'</td></tr>';
// $productHtmlTDs =$productHtmlTDs.'<tr><td>'.$p[0].'</td><td>'.$p[1].'</td><td>'.$p[2].'</td><td>'.$p[3].'</td><td>'.$p[4].'</td><td>'.$p[5].'</td></tr>';


$counter++;
}

for( $i=$counter;$i<$maxinmunLines;$i++){
$productHtmlTDs =$productHtmlTDs.'<tr><td><div></div></td>

<td><div></div></td>
<td><div></div></td>
<td><div></div></td>
<td><div></div></td>
<td><div></div></td>
</tr>';


}

//dd($productHtmlTDs);
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
<tr><td align="center"><h1>Service Sales Invoice</h1></td></tr>



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
<td align="center"><br>'.session()->get("ivd").'</td>


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

<table border="1">
<thead>
<tr>
<td align="left" width="10%" bgcolor="#C0C0C0" >
ID# </td>
<td align="center" bgcolor="#C0C0C0" width="30%">Description</td>
<td align="center"bgcolor="#C0C0C0" width="10%">Qty</td>
<td align="center" bgcolor=" #C0C0C0" width="20%">Unit Price</td>
<td align="center" bgcolor=" #C0C0C0" width="15%">Discount</td>
<td align="center" bgcolor=" #C0C0C0" width="15%">Total</td>

</tr>
</thead>
<tbody >





'.$productHtmlTDs.'
</tbody>
</table>






<table border="0">
<thead>
<tr>
<th width="70%" border="1" align="center">
Total in Word </th>

<th width="30%" border="1" align="center" style="line-height: 100%;"> Total PKR</th>

</tr>
</thead>
<tbody>
<tr>
<td width="70%" border="1" align="center"><b><u>'.session()->get("amountInWords").' Only.</u></b></td>
<td width="30%" border="1" align="center"><b>'.session()->get("amountPaid").'</b></td>


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
<td width="40%" align="center" border="0">Sign and Stamp</td>



</tr>




</tbody>
</table>
<br><br> <br>
<br>
<table border="1">

<tr>


<td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Milat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>




</tr>
<tr>


<td bgcolor="crimson" align="center" border="0"><h5> Email Adress: forlandmodernmotoprs@yahoo.com </h5></td>




</tr>

</table>

'; // $html= $htmldata;

//dd($newHTML);
PDF::SetTitle('Request for Invoice');
PDF::AddPage();
PDF::writeHTML($newHTML, true, false, true, false, '');

PDF::Output('invoiceRequest.pdf');
}

public function getstockdetailsPrint($InvoiceNo)
{
$productHtmlTDs=null;
$counter=0;
$maxinmunLines=13;
// dd(session()->get('ProductNames'));

$invoiceDetails=DB::select('select * from vw_customersale_invoice where InvoiceNumber= '.$InvoiceNo);
foreach($invoiceDetails as $product){
    $qty=$product->Quantity;
    
    $InvoiceNumber=$product->InvoiceNumber;
    $CustomerName=$product->CustomerName;
    $DateStamp=$product->DateStamp;
    $Address =$product->Address;
    $color=$product->color;
    $CNIC=$product->CNIC;
    $ProductName=$product->ProductName;
    $contact=$product->Contect;
    $TotalAmount=$product->TotalAmount;
    $AmountPaid=$product->AmountPaid;
    $Balance=$product->Balance;
    $Discount=$product->Discount;
    $NetTotal=$product->NetTotal;
    $PerUnitPurchasePrice=$product->PerUnitPurchasePrice;
    $ProductSerial=$product->ProductSerial;
    $numberToWords = new NumberToWords();
    $numberTransformer = $numberToWords->getNumberTransformer('en');
    $AmountinEnglish= $numberTransformer->toWords($AmountPaid);
    
    }
//dd($productHtmlTDs);
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
<tr><td align="center"><h1>Service Sales Invoice</h1></td></tr>



</tbody>



</table>
<br>
<br>
<br>

<table border="0">
<tbody>
<tr>
<td><br><span style="font-size: medium;">Customer Name:</span></td>
<td align="center"><br>'.$CustomerName.'</td>
<td><br><span style="font-size: medium;">Booking No:</span></td>
<td align="center"><br>BO-FMM-'.$InvoiceNumber.'</td>


</tr>
<tr>
<td><br><span style="font-size: medium;">Address:</span></td>
<td align="center"><br>'.$Address.'</td>
<td><br><span style="font-size: medium;">Invoice Number:</span></td>
<td align="center"><br>'.$InvoiceNumber.'</td>


</tr>
<tr>
<td><br><span style="font-size: medium;">CNIC/NTN:</span></td>
<td align="center"><br>'.$CNIC.'</td>
<td><br><span style="font-size: medium;">Invoice Date:</span></td>
<td align="center"><br>'.$DateStamp.'</td>


</tr>
<tr>
<td><br><span style="font-size: medium;">Contact:</span></td>
<td align="center"><br>'.$contact.'</td>
<td><br><span style="font-size: medium;"></span></td>
<td align="center"><br></td>


</tr>
</tbody>
</table>



<br>
<br>
<br>
<br>

<table border="1">
<thead>
<tr>
<td align="center" width="10%" bgcolor="#C0C0C0" >
ID# </td>
<td align="center" bgcolor="#C0C0C0" width="30%">Description</td>
<td align="center"bgcolor="#C0C0C0" width="10%">Qty</td>
<td align="center" bgcolor=" #C0C0C0" width="20%">Unit Price</td>
<td align="center" bgcolor=" #C0C0C0" width="15%">Discount</td>
<td align="center" bgcolor=" #C0C0C0" width="15%">Total</td>

</tr>
</thead></table>
<table border="1">
<tbody >
<tr>
<td align="center"  width="10%">'.$ProductSerial.'</td>
<td align="center"   width="30%">'.$ProductName.'</td>
<td align="center"  width="10%">'.$qty.'</td>
<td align="center"   width="20%">'.$PerUnitPurchasePrice.'</td>
<td align="center"   width="15%">'.$Discount.'</td>
<td align="center"   width="15%">'.$TotalAmount.'</td></tr>
<tr>
<td align="center"  width="10%"> </td>
<td align="center"   width="30%"> </td>
<td align="center"  width="10%"> </td>
<td align="center"   width="20%"> </td>
<td align="center"   width="15%"> </td>
<td align="center"   width="15%"> </td></tr>

<tr>
<td align="center"  width="10%"> </td>
<td align="center"   width="30%"> </td>
<td align="center"  width="10%"> </td>
<td align="center"   width="20%"> </td>
<td align="center"   width="15%"> </td>
<td align="center"   width="15%"> </td></tr>
<tr>
<td align="center"  width="10%"> </td>
<td align="center"   width="30%"> </td>
<td align="center"  width="10%"> </td>
<td align="center"   width="20%"> </td>
<td align="center"   width="15%"> </td>
<td align="center"   width="15%"> </td></tr>
<tr>
<td align="center"  width="10%"> </td>
<td align="center"   width="30%"> </td>
<td align="center"  width="10%"> </td>
<td align="center"   width="20%"> </td>
<td align="center"   width="15%"> </td>
<td align="center"   width="15%"> </td></tr>
<tr>
<td align="center"  width="10%"> </td>
<td align="center"   width="30%"> </td>
<td align="center"  width="10%"> </td>
<td align="center"   width="20%"> </td>
<td align="center"   width="15%"> </td>
<td align="center"   width="15%"> </td></tr>

<tr>
<td align="center"  width="10%"> </td>
<td align="center"   width="30%"> </td>
<td align="center"  width="10%"> </td>
<td align="center"   width="20%"> </td>
<td align="center"   width="15%"> </td>
<td align="center"   width="15%"> </td></tr>

 

</tbody>
</table>






<table border="0">
<thead>
<tr>
<th width="70%" border="1" align="center">
Total in Word </th>

<th width="30%" border="1" align="center" style="line-height: 100%;"> Total PKR Paid</th>

</tr>
</thead>
<tbody>
<tr>
<td width="70%" border="1" align="center"><b><u>'.$AmountinEnglish.' Only.</u></b></td>
<td width="30%" border="1" align="center"><b>'.$AmountPaid.'</b></td>


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
<td width="40%" align="center" border="0">Sign and Stamp</td>



</tr>




</tbody>
</table>
<br><br> <br>
<br>
<table border="1">

<tr>


<td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Milat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>




</tr>
<tr>


<td bgcolor="crimson" align="center" border="0"><h5> Email Adress: forlandmodernmotoprs@yahoo.com </h5></td>




</tr>

</table>

'; // $html= $htmldata;

//dd($newHTML);
PDF::SetTitle('Request for Invoice');
PDF::AddPage();
PDF::writeHTML($newHTML, true, false, true, false, '');

PDF::Output('invoiceRequest.pdf');
}

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class deliverLetterPrintController extends Controller
{
public function deliveryLetter($id){
$newHTML= '
<table width="100%">
<thead>
<tr>
<td>
<h1 align="center">FORLAND MODERN MOTORS <br>DELIVERY LETTER</h1></td>

</tr>


</thead>
</table>
<br>
<table>
<thead>
<tr><br>
<td><b>Reference Number:</b></td>
<td></td>
<td><b>Date:</b></td>
<td></td>
</tr>
<tr><br><br>
<td><b><h3>Purchaser Detail:</h3></b></td>
</tr>
</thead>
</table>


<br>
<br>

<table border="1" width="100%" >
<tr>
<td width="20%" >Name</td>
<td width="30%">Asif Jah</td>
<td width="25%">Father Name:</td>
<td width="25%">Malik Arfi Jah</td>
</tr>
<tr>
<td width="20%">CNIC/NTN</td>
<td width="30%">35201-343444322-1</td>
<td width="25%">Contact:</td>
<td width="25%">0300-3235234235</td>
</tr>
<tr>
<td width="20%">address</td>
<td width="50%">Phase 1, House No 27, usamsnankdskjaiudjBlock V.I.P, Lahore Medical Housing Scheme, Lahore </td>
</tr>


</table>



<h3>Vehicle Detail :</h3>
<table border="1" width="100%" >
<tr>
<th>SR#</th>
<th>Product Description</th>
<th>Model</th>
<th>Engine Number</th>
<th>Chassis Number</th>
<th>Engine Power</th>
</tr>
<tr>
<td>01</td>
<td >Forland C19</td>
<td >202</td>
<td>L7582828B</td>
<td>NFJ3JA000872A</td>
<td>1809 cc</td>
</tr>
</table>

<h3>Accessories Along With :</h3>
<table border="1" width="100%">
<tr>
<th align="center">Tool Kit</th>
<th align="center">Spare Tyre</th>
<th align="center">Orignal Keys</th>
<th align="center">Warrenty Book </th>

</tr>
<tr>
<td align="center">YES</td>
<td align="center"> YES</td>
<td align="center">2</td>
<td align="center">YES</td>
</tr>
</table>
<h3>Note:</h3>


<table width="100%">


<ul>
<li>To my entire satisfaction, I have taken possession of the above mentioned vehicle, I do hereby declared that i shall be fully responsible for all accidents , tokens , machine defects and the legal proceedings regarding this vehicle from now onwards</li><br>

<li >I also hereby undertake to get the ownership of this vehicle transferred in my name from the concerned Registration Authority within the stipultated period of 15 days from today.</li>
</ul>
</table>
<table width="100%">
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<tbody>

<tr>
<td width="60%">____________________</td>
<td width="40%" align="right">____________________</td>
</tr>

<tr>

<td width="60%">Authorised Signature</td>
<td width="40%" align="right">Purchaser Signature</td>
</tr>
</tbody>
</table>

<p align="center">
8-KM, Sheikhupura Road, Opposite Millat Tractors Limited , Lahore. Tel: 0300-0600061 Email Address: forlandmodernmotors@yahoo.com
</p>
';

PDF::SetTitle('Delivery Letter');
PDF::AddPage();
PDF::writeHTML($newHTML, true, false, true, false, '');

PDF::Output('deliveryLetter.pdf');






}

}
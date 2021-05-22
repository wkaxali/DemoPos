<?php

use NumberToWords\NumberToWords;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use NumberToWords\NumberToWords;
//https://github.com/kwn/number-to-words

use DB;
use PDF;

class printSalarySlip extends Controller
{

        public function pss(){
     
           

$html = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
<tr><td>




<img src="/assets/img/logo.jpg" border="0" height="100" width="300" align="center" /></td>
</tr>
<tr>
<td align="Left" widht="200"><h1>Salary Slip :</h1>
</td>
</tr>
</table>
<br>

<table cellpadding="7" cellspacing="1" border="0" style="text-align:center;">
<thead>
<tr>
<th  border="0">Employ ID</th>
<th border="0">123</th>
<th border="0">Name</th>

<th  border="0">Mohsin</th>
</tr>
</thead>


<tbody>
<tr>
<td ><h3>Salary Details:</h3></td>
</tr>
</tbody>
</table>

<hr>

<table border="0" cellpadding="9">

<tr ><td colspan="8" align ="left" > </td></tr>
</table>



<table>

</table>



<table bordercolor="#ff00ff" border="1"  cellpadding="8">
<tbody>

<tr>


<td bgcolor="clay" width="50%" align="center" border="0">Basic Pay</td>
<td width="25%" align="center" border="0"></td>
<td width="25%" border="0">378490</td>
</tr>
<tr>


<td width="50%" align="center" border="0">Allowances</td>
<td width="25%" align="center" border="0"></td>
<td width="25%" border="0">378490</td>
</tr>
<tr>


<td width="50%" align="center" border="0">Comission Sale</td>
<td width="25%" align="center" border="0">5 SAles</td>
<td width="25%" border="0">378490</td>
</tr>
<tr>


<td width="50%" align="center" border="0">Deduction</td>
<td width="25%" align="center" border="0">5 leaves</td>
<td width="25%" border="0">-8490</td>
</tr>
<tr>


<td width="50%" align="center" border="0">Late</td>
<td width="25%" align="center" border="0">3 times</td>
<td width="25%" border="0">-490</td>
</tr>

<tr>


<td width="50%" align="center" border="0">Advance Take</td>
<td width="25%" align="center" border="0"></td>
<td width="25%" border="0">-4000</td>
</tr>

</tbody>
</table>
<table border="0"cellpadding="9">
<br>
<br>
<tr>
<td width="50%" border="2">Total</td>
<td width="50%" align="center" border="2">405000</td>
</tr>
<br>
<tr>
<td  width="100%" bgcolor="crimson" align="center" border="0"><h4>Paid To Mohsin On Date: 25 april 2021 </h4></td>




</tr>
</table>
<table border="0">
<thead>
<br>
<br>
<br>
<br>
<br> <br>
<br>
<br>
<tr>
<td width="60%" border="0">____________________</td>
<td width="40%" align="center" border="0">_______________________</td>
</tr>
<tr>
<br>

<td width="60%" border="0">Sign:Mohsin</td>
<td width="40%" align="center" border="0">Sign and stamp</td>



</tr>




</tbody>
</table>



';

PDF::SetTitle('Quotation');
PDF::AddPage();
PDF::writeHTML($html, true, false, true, false, '');

PDF::Output('Quotation-'.session()->get("refNo").'.pdf');
}


            
            
            
        
}
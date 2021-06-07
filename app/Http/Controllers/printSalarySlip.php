<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;

class printSalarySlip extends Controller
{
    public static function printsalarySlip(){

      

      $newHTML='
      <table border="0">
      <tr>
      <td >
      <h1 align="center">Forland Modren Moters(Company)</h1>
      </td>
      
      
      </tr> 
 
      <tr>
      <td >
      <h5  align="">Employer Name______________________________</h5>
      </td>
      
      
      
      </tr>
      <tr>
      <td >
      <h5  align="">Designtion________________________________</h5>
      </td>
      
      
      
      </tr>
      <tr>
      <td >
      <h5  align="">Month & Year______________________________</h5>
      </td>
      
      
      
      </tr>
      
   </table>
  
   <br>
  
   <br>
  
  
   <br>
  
  
  
   
   <table border="0" >
  
   
   <tr>
   <td>
   
   <table border="1" CELLPADDING="5" >
  
  
  
  
  
  
   <tr>
   <td>
   <h4> Earning</h4>
   </td>
   <td>
   
   </td>
   </tr>
   <tr>
   <td>
   Basic pay
   </td>
   <td>
   30000
   </td>
   </tr><tr>
   <td>
   Alownces
   </td>
   <td>
   300
   </td>
   </tr><tr>
   <td>
   bonous
   </td>
   <td>
   500
   </td>
   </tr>
   <tr>
   <td>
   Total
   </td>
   <td>
   300000
   </td>
   </tr>
  
   </table>
  
  
  
  
  
  
  
   </td>
   <td>
   <table border="1" CELLPADDING="5">
   
   <tr>
   <td>
   <h4>
   Deduction
   </h4>
   </td>
   <td>
  
   </td>
   </tr><tr>
   <td>
   loan
   </td>
   <td>
   5000
   </td>
   </tr><tr>
   <td>
   late fine
   </td>
   <td>
   200
   </td>
   </tr><tr>
   <td>
   Tax
   </td>
   <td>
   30
   </td>
   </tr>
   <tr>
   <td>
   Net ToTal
   </td>
   <td>
   300000
   </td>
   </tr>
  
   </table>
  
  
  
  
  
  
   </td>
   
   </tr>
  
   </table>
   <br>
      <table>
  <tr>
  <td><br>
  Cheque No___________________________________
  </td>
  </tr>
  <tr>
  <td>
  Bank name___________________________________
  </td>
  </tr>
  <tr>
  <td>
  Sign & stamp__________________________________
  </td>
  </tr>
  </table> 
  
  <table border="0">
  <tr>
  <td colspan=2>
  <h1 align="center">Forland Modren Moters(Employee)</h1>
  </td>
  
  </tr>
  <tr>
  <td >
  <h5  align="">Employee Name______________________________</h5>
  </td>
  
  
  
  </tr>
  <tr>
  <td >
  <h5  align="">Designtion________________________________</h5>
  </td>
  
  
  
  </tr>
  <tr>
  <td >
  <h5  align="">Month & Year______________________________</h5>
  </td>
  
  
  
  </tr>
  
</table>

<br>

<br>


<br>




<table border="0" >


<tr>
<td>

<table border="1" CELLPADDING="5" >






<tr>
<td>
<h4> Earning</h4>
</td>
<td>

</td>
</tr>
<tr>
<td>
Basic pay
</td>
<td>
30000
</td>
</tr><tr>
<td>
Over time
</td>
<td>
300
</td>
</tr><tr>
<td>
bonous
</td>
<td>
500
</td>
</tr>
<tr>
<td>
Total
</td>
<td>
300000
</td>
</tr>

</table>







</td>
<td>
<table border="1" CELLPADDING="5">

<tr>
<td>
<h4>
Deduction
</h4>
</td>
<td>

</td>
</tr><tr>
<td>
loan
</td>
<td>
5000
</td>
</tr><tr>
<td>
late fine
</td>
<td>
200
</td>
</tr><tr>
<td>
Tax
</td>
<td>
30
</td>
</tr>
<tr>
<td>
Net ToTal
</td>
<td>
300000
</td>
</tr>

</table>






</td>

</tr>

</table>
<br>
  <table>
<tr><br>
<td>
Cheque No___________________________________
</td>
</tr>
<tr>
<td>
Bank name___________________________________
</td>
</tr>
<tr>
<td>
Sign & stamp__________________________________
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

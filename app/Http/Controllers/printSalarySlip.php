<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use Carbon\Carbon;
class printSalarySlip extends Controller
{
    public static function printsalarySlip($id,$adv){
      $date = Carbon::now()->toDateString();
      $data = DB::select('select * from vw_employeepay where EID ='.$id);
      session(['BasicPay' => $data[0]->BasicPay]);
      session(['Alownces' => $data[0]->Alownces]);
     
      session(['ContactNo' => $data[0]->ContactNo]);
      session(['firstName' => $data[0]->FirstName]);
      session(['lastName' => $data[0]->LastName]);
      // session(['CNIC' => $data[0]->CNIC]);
      session(['DesignationID' => $data[0]->DesignationID]);
      session(['TotalPay' => $data[0]->TotalPay]);

      $netTotal=$data[0]->TotalPay+$adv;
      $newHTML='
     
  <table border="0" style="font-size:11.5 px">
  <tr>
  <td colspan=2>
  <h1 align="center">Forland modern  Motors(Employee)</h1>
  </td>
  
  </tr>
  
  <tr>
  <td >
  <h5  align="">Employee Name: '.session()->get("firstName").' '.session()->get("lastName").'</h5>
  </td>
  
  
  
  </tr>
  <tr>
  <td >
  <h5  align="">Designation: '.session()->get("DesignationID").'</h5>
  </td>
  
  
  
  </tr>
  <tr>
  <td >
  <h5  align="">Month & Year: '.$date.'</h5>
  </td>
  
  
  
  </tr>
  
</table>

<br>



<br>




<table border="0" >


<tr>
<td>

<table border="1" CELLPADDING="5" style="font-size:9 px"  border="0.2">






<tr>
<td max-width:50px;>
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
'.session()->get("BasicPay").'
</td>
</tr><tr>
<td>
Allowances
</td>
<td>
'.session()->get("Alownces").'
</td>
</tr><tr>
<td>
Bonus
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
'.session()->get("TotalPay").'
</td>
</tr>

</table>







</td>
<td>
<table border="1" CELLPADDING="5" style="font-size:9 px" border="0.2">

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
Advanced
</td>
<td>
'.$adv.'
</td>
</tr><tr>
<td>
Late fine
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
Net Total
</td>
<td>
'.$netTotal.'
</td>
</tr>
  
   </table>




</td>

</tr>

</table>
<br>
  <table style="font-size:9.5 px" >
<tr><br>
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
 <br>
 <br><br><br>
  <table border="0">
  <tr>
  <td colspan=2>
  <h1 align="center">Forland modern  Motors(Company)</h1>
  </td>
  
  </tr>
  
  <tr>
  <td >
  <h5  align="">Employer Name:  '.session()->get("firstName").' '.session()->get("lastName").'</h5>
  </td>
  
  
  
  </tr>
  <tr>
  <td >
  <h5  align="">Designation: '.session()->get("DesignationID").'</h5>
  </td>
  
  
  
  </tr>
  <tr>
  <td >
  <h5  align="">Month & Year: '.$date.'</h5>
  </td>
  
  
  
  </tr>
  
</table>

<br>



<br>




<table border="0" >


<tr>
<td>

<table border="1" CELLPADDING="5" style="font-size:9 px" border="0.2">






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
'.session()->get("BasicPay").'
</td>
</tr><tr>
<td>
Allowances
</td>
<td>
'.session()->get("Alownces").'
</td>
</tr><tr>
<td>
Bonus
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
'.session()->get("TotalPay").'
</td>
</tr>

</table>







</td>
<td>
<table border="1" CELLPADDING="5" style="font-size:9 px" border="0.2">

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
Advanced
</td>
<td>
'.$adv.'
</td>
</tr><tr>
<td>
Late fine
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
Net Total
</td>
<td>
'.$netTotal.'
</td>
</tr>
  
   </table>




</td>

</tr>

</table>
<br>
  <table style="font-size:9.5 px" >
<tr><br>
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


    ';     // $html= $htmldata;

    
    PDF::SetTitle('Request for Invoice');
    PDF::AddPage();
    PDF::writeHTML($newHTML, true, false, true, false, '');

    PDF::Output('invoiceRequest.pdf');

    
    }
}

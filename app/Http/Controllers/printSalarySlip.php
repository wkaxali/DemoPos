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
      session(['CNIC' => $data[0]->CNIC]);
      session(['DesignationID' => $data[0]->DesignationID]);
      session(['TotalPay' => $data[0]->TotalPay]);

      $netTotal=$data[0]->TotalPay-$adv;
      $newHTML='
      <table border="0" >
      <tr>
      <td >
      <h1 align="center">Forland modern  Motors(Company)</h1>
      </td>
      
      
      </tr> 
 
      <tr>
      <td style="font-size:11 px"  ><br><br><br>
   
      <br>
   
      <br>
       Employer Name: '.session()->get("firstName").' '.session()->get("lastName").' 
      </td>
      
      
      
      </tr>
      <tr>
      <td style="font-size:11 px" >
       Designation: '.session()->get("DesignationID").' 
      </td>
      
      
      
      </tr>
      <tr>
      <td style="font-size:11 px"  >
       Month & Year: '.$date.' 
      </td>
      
      
      
      </tr>
      
   </table>
  
    
  
  
   <br><br>
  
  
  
   
   <table border="0" >
  
   
   <tr>
   <td>
   
   <table   CELLPADDING="5" style="font-size:9 px"  border="0.2" >
  
  
  
  
  
  
<tr>
<td align="center">
<h4> Earning</h4>
</td>
<td align="center">
<h4>Amount</h4>
</td>
</tr>
<tr>
<td align="center">
Basic pay
</td>
<td align="center">
'.session()->get("BasicPay").'
</td>
</tr><tr>
<td align="center">
Allowances
</td>
<td align="center">
'.session()->get("Alownces").'
</td>
</tr><tr>
<td align="center">
Bonus
</td>
<td align="center">
500
</td>
</tr>
<tr>
<td align="center">
Total
</td>
<td align="center">
'.session()->get("TotalPay").'
</td>
</tr>
   </table>
  
  
  
  
  
  
  
   </td>
   <td>
   <table border="1" CELLPADDING="5" style="font-size:9 px" border="0.2">
   
<tr>
<td align="center">
<h4>
Deduction
</h4>
</td>
<td align="center">
<h4>Amount</h4>
</td>
</tr><tr>
<td align="center">
Advanced
</td>
<td align="center">
'.$adv.'
</td>
</tr><tr>
<td align="center">
Late fine
</td>
<td align="center">
200
</td>
</tr><tr>
<td align="center">
Tax
</td>
<td align="center">
30
</td>
</tr>
<tr>
<td align="center">
Net Total
</td>
<td align="center">
'.$netTotal.'
</td>
</tr>
   </table>
  
  
  
  
  
  
   </td>
   
   </tr>
  
   </table>
   <br>
      <table style="font-size:9.5 px">
  <tr>
  <td><br> <br> 
  Cheque No___________________________________
  </td>
  </tr>
  <tr>
  <td><br><br>
  Bank name___________________________________
  </td>
  </tr>
  <tr>
  <td><br><br>
  Sign & stamp__________________________________
  </td>
  </tr>
  </table> 
  <table border="0" >
      <tr>
      <td >
      <h1 align="center">Forland modern  Motors(Company)</h1>
      </td>
      
      
      </tr> 
 
      <tr>
      <td style="font-size:11 px"  ><br><br>
      <br>
   
      <br>
   
      <br>
      
       Employer Name: '.session()->get("firstName").' '.session()->get("lastName").' 
      </td>
      
      
      
      </tr>
      <tr>
      <td style="font-size:11 px" >
       Designation: '.session()->get("DesignationID").' 
      </td>
      
      
      
      </tr>
      <tr>
      <td style="font-size:11 px"  >
       Month & Year: '.$date.' 
      </td>
      
      
      
      </tr>
      
   </table>
  
   <br>
  
   <br>
   
  
  
  
   
   <table border="0" >
  
   
   <tr>
   <td>
   
   <table   CELLPADDING="5" style="font-size:9 px"  border="0.2" >
  
  
  
  
  
  
<tr>
<td align="center">
<h4> Earning</h4>
</td>
<td align="center">
<h4>Amount</h4>
</td>
</tr>
<tr>
<td align="center">
Basic pay
</td>
<td align="center">
'.session()->get("BasicPay").'
</td>
</tr><tr>
<td align="center">
Allowances
</td>
<td align="center">
'.session()->get("Alownces").'
</td>
</tr><tr>
<td align="center">
Bonus
</td>
<td align="center">
500
</td>
</tr>
<tr>
<td align="center">
Total
</td>
<td align="center">
'.session()->get("TotalPay").'
</td>
</tr>
   </table>
  
  
  
  
  
  
  
   </td>
   <td>
   <table border="1" CELLPADDING="5" style="font-size:9 px" border="0.2">
   
<tr>
<td align="center">
<h4>
Deduction
</h4>
</td>
<td align="center">
<h4>Amount</h4>
</td>
</tr><tr>
<td align="center">
Advanced
</td>
<td align="center">
'.$adv.'
</td>
</tr><tr>
<td align="center">
Late fine
</td>
<td align="center">
200
</td>
</tr><tr>
<td align="center">
Tax
</td>
<td align="center">
30
</td>
</tr>
<tr>
<td align="center">
Net Total
</td>
<td align="center">
'.$netTotal.'
</td>
</tr>
   </table>
  
  
  
  
  
  
   </td>
   
   </tr>
  
   </table>
   <br>
      <table style="font-size:9.5 px">
  <tr>
  <td><br> <br> 
  Cheque No___________________________________
  </td>
  </tr>
  <tr>
  <td><br><br>
  Bank name___________________________________
  </td>
  </tr>
  <tr>
  <td><br><br>
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

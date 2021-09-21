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
      <h1 align="center">Forland modern  Motors (Employee)</h1>
      <h5 align="center">8-km Sheikhupura Road, Opposite Milat Tractors Limited,Lahore.</h5>

      </td>
      
      
      </tr> 
 
      <tr> 
      <br><br>
      <td align="center">Payslip for  '.$date.'</td>
      </tr> 
   </table>
  
    
  
  
   <br><br>
  
  
  
   
   <table border="1" >
  
   
   <tr>
   <td>
   
   <table   CELLPADDING="5" style="font-size:9 px"  border="0 " >
  
  
  
  
 
<tr>
<td>
Name
</td>
<td align="center">
'.session()->get("BasicPay").'
</td>
</tr><tr>
<td>
Designation
</td>
<td  align="center" >
'.session()->get("Alownces").'
</td>
</tr><tr>
<td>
Location
</td>
<td align="center"  >
500
</td>
</tr>
 
   </table>
  
  
  
  
  
  
  
   </td>
   <td>
   <table  CELLPADDING="5" style="font-size:9 px"  >
   
 <tr>
<td align="center">
Employee ID
</td>
<td align="center">
'.$adv.'
</td>
</tr><tr>
<td align="center">
Bank Name
</td>
<td align="center">
200
</td>
</tr><tr>
<td align="center">
Bank Account Number
</td>
<td align="center">
30
</td>
</tr>
 
   </table>
  
  
  
  
  
  
   </td>
   
   </tr>
  
   </table>

   
   <br><br><br> 

   <table border="1"  >
  
   
   <tr>
   <td>
   
   <table   CELLPADDING="5" style="font-size:9 px"  border="0 " >
  
  
  
  
 
<tr>
<td >
Earning
</td>
<td align="center">
Amount
</td>
</tr><tr>
<td>
others
</td>
<td  align="center" >
2222
</td>
</tr><tr>
<td>
Location
</td>
<td align="center"  >
500
</td>
</tr>
<tr>
<td>
Location
</td>
<td align="center"  >
500
</td>
</tr>
<tr>
<td>
Location
</td>
<td align="center"  >
500
</td>
</tr>
 
   </table>
  
  
  
  
  
  
  
   </td>
   <td>
   <table  CELLPADDING="5" style="font-size:9 px"  >
   
 <tr>
<td align="center">
Deduction
</td>
<td align="center">
Amount
</td>
</tr><tr>
<td align="center">
Bank Name
</td>
<td align="center">
200
</td>
</tr><tr>
<td align="center">
Bank Account Number
</td>
<td align="center">
30
</td>
</tr>
 
   </table>
  
  
  
  
  
  
   </td>
   
   </tr>
  
   </table>
   <table style="font-size:9.5 px">
   <tr>
   <td><br> <br> 
  Net Pay of the month is 
   </td>
   </tr>
   <tr> <hr>
   <td align="center"><br>  
  This is a system generated payslip and does not require any signature.
   </td>
   </tr>
   
   </table>

    
  <table border="0" >
      <tr>
      <td >
      <h1 align="center">Forland modern  Motors (Company)</h1>
      <h5 align="center">8-km Sheikhupura Road, Opposite Milat Tractors Limited,Lahore.</h5>

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
<td style="background-color: blue; color:white; " colspan="2" align="center">
<h4> Earning</h4>
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
<td colspan="2" align="center" style="background-color:red; color:white;">
<h4>
Deduction
</h4>
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

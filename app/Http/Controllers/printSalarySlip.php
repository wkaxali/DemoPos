<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use Carbon\Carbon;
class printSalarySlip extends Controller
{
    public static function printsalarySlip($id,$adv,$date){
      

      $data = DB::select('select * from vw_employeepay where EID ='.$id);
      session(['BasicPay' => $data[0]->BasicPay]);
      session(['Alownces' => $data[0]->Alownces]);
     
      session(['ContactNo' => $data[0]->ContactNo]);
      session(['firstName' => $data[0]->FirstName]);
      session(['lastName' => $data[0]->LastName]);
      session(['CNIC' => $data[0]->CNIC]);
      session(['DesignationID' => $data[0]->DesignationID]);
      session(['TotalPay' => $data[0]->TotalPay]);


      
    $ata=DB::select('select * from tbl_employee_payments_flow where Date ='.$date);
    session(['SalaryOf' => $ata[0]->SalaryOf]);
    session(['TotalDeduction' => $ata[0]->TotalDeduction]);
   
    session(['Advance' => $ata[0]->Advance]);
    session(['AbsentsDeduction' => $ata[0]->AbsentsDeduction]);
     
      

      $netTotal=$data[0]->TotalPay-$adv;
      $newHTML='
      <table border="0" >
       
      <tr>
      <td >
      <h1 align="center"> <img src="/assets/img/logo.jpg" border="0" height="50" width="120" align="left" />
     Forland modern  Motors (Employee)</h1>
      <h5 align="center">8-km Sheikhupura Road, Opposite Milat Tractors Limited,Lahore.</h5>

      </td>
      
      
      </tr> 
 
      <tr> 
      <br><br>
      <td align="center">Payslip for the month of '.session()->get("SalaryOf").'   
     </td>
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
'.session()->get("firstName").' '.session()->get("lastName").' 
</td>
</tr><tr>
<td>
Contact
</td>
<td  align="center" >
'.session()->get("ContactNo").'
</td>
</tr><tr>
<td>
CNIC
</td>
<td align="center"  >
'.session()->get("CNIC").'
</td>
</tr>
 
   </table>
  
  
   

  
  
   </td>
   <td>
   <table  CELLPADDING="5" style="font-size:9 px"  >
   
 <tr>
<td  >
Employee ID
</td>
<td align="center">
'.session()->get("DesignationID").'
</td>
</tr><tr>
<td>
Bank Name
</td>
<td align="center">
200
</td>
</tr><tr>
<td  >
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

    
  
   <table border="1" >
   <tr>
   <td border="1 ">
   
   <table   CELLPADDING="5" style="font-size:9 px"  border=" 0 " >
  
  
   
  
 
<tr>
<td colspan="2" ><b>
Earning &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Amount
</b></td>

</tr><tr>
<td>
Basic Pay
</td>
<td  align="center" >
'.session()->get("BasicPay").'
</td>
</tr><tr>
<td>
Allowances
</td>
<td align="center"  >
'.session()->get("Alownces").'
</td>
</tr>
 
<tr><hr>
<td>
Total Earning
</td>
<td align="center"   >
'.session()->get("TotalPay").'
</td>
</hr>

   </table>
  
  
  
  
  
  
  
   </td>
   <td>
   <table  CELLPADDING="5" style="font-size:9 px"  border="0"   >
   
   <tr>
   <td  colspan="2" ><b>
   Deduction    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Amount
   </b> </td>
    
   </tr><tr>
<td>
Advance
</td>
<td align="center">
'.$adv.'
</td>

</tr>
<tr>
<td>
Absent Deductions   
</td>
<td align="center">

'.session()->get("AbsentsDeduction").'
</td>
</tr> 
<tr><hr>
<td>
Total Deductions 
</td>
<td align="center">
'.session()->get("TotalDeduction").'
</td>
</tr>
 
   </table>
  
 
  
  
  
   </td>
   
   </tr>
   </table>
   <table style="font-size:9.5 px">
   <tr>
   <td><br> <br> 
  Net Pay of the month is  '.$netTotal.'
   </td>
   </tr>
   <tr> <hr>
   <td align="center"><br>  
  This is a system generated payslip and does not require any signature.
   </td>
   </tr>
   
   </table>
   <br><br>
   <table border="0" >
   
   <tr>
   <td >
   <h1 align="center"><img src="/assets/img/logo.jpg" border="0" height="50" width="120" align="left" /> Forland modern  Motors (Company)</h1>
   <h5 align="center">8-km Sheikhupura Road, Opposite Milat Tractors Limited,Lahore.</h5>

   </td>
   
   
   </tr> 

   <tr> 
   <br><br>
   <td align="center">Payslip for the month of '.session()->get("SalaryOf").'   
  </td>
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
'.session()->get("firstName").' '.session()->get("lastName").' 
</td>
</tr><tr>
<td>
Contact
</td>
<td  align="center" >
'.session()->get("ContactNo").'
</td>
</tr><tr>
<td>
CNIC
</td>
<td align="center"  >
'.session()->get("CNIC").'
</td>
</tr>

</table>






</td>
<td>
<table  CELLPADDING="5" style="font-size:9 px"  >

<tr>
<td  >
Employee ID
</td>
<td align="center">
'.session()->get("DesignationID").'
</td>
</tr><tr>
<td>
Bank Name
</td>
<td align="center">
200
</td>
</tr><tr>
<td  >
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

 

<table border="1" >
<tr>
<td border="1 ">

<table   CELLPADDING="5" style="font-size:9 px"  border=" 0 " >





<tr>
<td colspan="2" ><b>
Earning &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Amount
</b></td>

</tr><tr>
<td>
Basic Pay
</td>
<td  align="center" >
'.session()->get("BasicPay").'
</td>
</tr><tr>
<td>
Allowances
</td>
<td align="center"  >
'.session()->get("Alownces").'
</td>
</tr>

<tr><hr>
<td>
Total Earning
</td>
<td align="center"   >
'.session()->get("TotalPay").'
</td>
</hr>

</table>







</td>
<td>
<table  CELLPADDING="5" style="font-size:9 px"  border="0"   >

<tr>
<td  colspan="2" ><b>
Deduction    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Amount
</b> </td>
 
</tr><tr>
<td>
Advance
</td>
<td align="center">
'.$adv.'
</td>

</tr>
<tr>
<td>
Absent Deductions   
</td>
<td align="center">

'.session()->get("AbsentsDeduction").'
</td>
</tr> 
<tr><hr>
<td>
Total Deductions 
</td>
<td align="center">
'.session()->get("TotalDeduction").'
</td>
</tr>

</table>





</td>

</tr>
</table>
<table style="font-size:9.5 px">
<tr>
<td><br> <br> 
Net Pay of the month is  '.$netTotal.'
</td>
</tr>
<tr> <hr>
<td align="center"><br>  
This is a system generated payslip and does not require any signature.
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

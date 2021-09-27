<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use Carbon\Carbon;
class printSalarySlip extends Controller
{
    public static function printsalarySlip($id,$balance,$month,$year){
      

      $data = DB::select('select * from vw_employeepay where EID ='.$id);
       
      $BasicPay = $data[0]-> BasicPay;
      $Alownces = $data[0]-> Alownces;
      $ContactNo = $data[0]-> ContactNo;
      $FirstName = $data[0]-> FirstName;
      $LastName = $data[0]-> LastName;
      $CNIC = $data[0]-> CNIC;
      $LastName = $data[0]-> LastName;
      $AllowedHolidays = $data[0]-> AllowedHolidays;
      $WorkingHours = $data[0]-> WorkingHours;
      $DesignationID = $data[0]-> DesignationID;
      $TotalPay = $BasicPay + $Alownces;
      
    $ata=DB::select('select * from tbl_employee_payments_flow   where EmployeeID ='.$id.' and month(SalaryOf) ='.$month.' and year(SalaryOf) ='.$year );
    
    $SalaryOf = $ata[0]-> SalaryOf;
    $TotalDeduction = $ata[0]-> TotalDeduction;
    $AbsentsDeduction = $ata[0]-> AbsentsDeduction;
    $Date = $ata[0]-> Date;
 
    $Advance = $ata[0]-> Advance;
    $AmountPaid=$ata[0]-> AmountPaid;
      $netTotal=$TotalPay - $TotalDeduction ;
     
      
      $newHTML='
      <table border="0" >
       
      <tr>
      <td >
      <h3 align="center"> <img src="/assets/img/logo.jpg" border="0" height="70" width="188" align="left" /><br>&nbsp;&nbsp;
     (Company)</h3>
      <h5 align="center" style="margin-top:120px;" >8-km Sheikhupura Road, Opposite Milat Tractors Limited,Lahore.</h5>

      </td>
      
      
      </tr> 
 
      <tr> 
      <br><br>
      <td align="center">Payslip for the month of '.$SalaryOf.'   
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
'.$FirstName.' '. $LastName.' 
</td>
</tr><tr>
<td>
Contact
</td>
<td  align="center" >
'.$ContactNo.'
</td>
</tr><tr>
<td>
CNIC
</td>
<td align="center"  >
'.$CNIC.'
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
'. $id .'
</td>
</tr><tr>
<td>
Working Hours
</td>
<td align="center">
'. $WorkingHours .'
</td>
</tr><tr>
<td  >
Allowed Holidays
</td>
<td align="center">
'. $AllowedHolidays .'
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
'.$BasicPay .'
</td>
</tr><tr>
<td>
Allowances
</td>
<td align="center"  >
'.$Alownces.'
</td>
</tr>
<tr>
<td>
 
</td>
</tr>

<tr><hr>
<td>
Total Earning
</td>
<td align="center"   >
'. $TotalPay .'
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
'.$Advance.'
</td>

</tr>
<tr>
<td>
Absent Deductions   
</td>
<td align="center">

'. $AbsentsDeduction .'
</td>
</tr> 
<tr>
<td>
 
</td>
</tr>
<tr><hr>
<td>
Total Deductions 
</td>
<td align="center">
'.$TotalDeduction.'
</td>
</tr>
 
   </table>
  
 
  
  
  
   </td>
   
   </tr>
   </table>
   <table style="font-size:9.5 px">
   <tr>
   <td><br> <br>  <br> 
  Net Pay of the month is  '.$netTotal.'<br><br>
  
  AmountPaid:  '.$AmountPaid.'
  <br><br>
  
  Dated:  '.$Date.'
  
   </td>
   </tr>
   <tr> <br><br><br><hr>
   <td align="center"><br>  <br><br><br>
  This is a system generated payslip and does not require any signature.
   </td>
   </tr>
   
   </table>
  
   <table border="0" >
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <br><br>  
    
   <table border="0" >
       
      <tr>
      <td >
      <h3 align="center"> <img src="/assets/img/logo.jpg" border="0" height="70" width="188" align="left" /><br>&nbsp;&nbsp;
      (Employee)</h3>
       <h5 align="center" style="margin-top:120px;" >8-km Sheikhupura Road, Opposite Milat Tractors Limited,Lahore.</h5>
 
      </td>
      
      
      </tr> 
 
      <tr> 
      <br><br>
      <td align="center">Payslip for the month of '.$SalaryOf.'   
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
'.$FirstName.' '. $LastName.' 
</td>
</tr><tr>
<td>
Contact
</td>
<td  align="center" >
'.$ContactNo.'
</td>
</tr><tr>
<td>
CNIC
</td>
<td align="center"  >
'.$CNIC.'
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
'. $id .'
</td>
</tr><tr>
<td>
Working Hours
</td>
<td align="center">
'. $WorkingHours .'
</td>
</tr><tr>
<td  >
Allowed Holidays
</td>
<td align="center">
'. $AllowedHolidays .'
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
'.$BasicPay .'
</td>
</tr><tr>
<td>
Allowances
</td>
<td align="center"  >
'.$Alownces.'
</td>
</tr>
<tr>
<td>
 
</td>
</tr>

<tr><hr>
<td>
Total Earning
</td>
<td align="center"   >
'. $TotalPay .'
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
'.$Advance.'
</td>

</tr>
<tr>
<td>
Absent Deductions   
</td>
<td align="center">

'. $AbsentsDeduction .'
</td>
</tr> 
<tr>
<td>
 
</td>
</tr> 
<tr><hr>
<td>
Total Deductions 
</td>
<td align="center">
'.$TotalDeduction.'
</td>
</tr>
 
   </table>
  
 
  
  
  
   </td>
   
   </tr>
   </table>
   <table style="font-size:9.5 px">
   <tr>
   <td><br> <br>  <br> 
   Net Pay of the month is  '.$netTotal.'<br><br>
   
   AmountPaid:  '.$AmountPaid.'
   <br><br>
   
   Dated:  '.$Date.'
   
    </td>
   </tr>
   <tr> <br><br><br><hr>
   <td align="center"><br>  <br><br><br>
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

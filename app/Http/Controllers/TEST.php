<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class TEST extends Controller
{
    public function index()
    {
        $html = '<h1>Hello World</h1>';
        
        PDF::SetTitle('Hello World');
        PDF::AddPage();
        PDF::writeHTML($html, true, false, true, false, '');

        PDF::Output('hello_world.pdf');
    }


    public function saleInvoiceRequest1()
    {
        
        

        $newHTML='<table border="0" cellpadding="2">
        <thead>
            <tr>
               
                 <th><br><h1>FORLAND MODREN MOTORS</h1></th>
               
            </tr>
        </thead>
        
        <tbody>
        <tr>
        <br>
        <td>
       
        To, <br>

        Foton JW Auto Park (PVT) <br>
    
        </td>




        
        
        </tr>
        <tr>
   
        <td width="30%" border="0" align="left" >Subject</td>
        <td width="70%" border="0" align="right"><h4>DATE________________________</h4></td>
       
    </tr>
      

        
        </tbody>
        

            
    </table>
    <br>
    <br>
        <br>
        <br>
<table border="1" cellpadding="9">
    <tbody>
    <tr>
   
        <td width="30%" border="0" align="left" >Customer Name:'.session(['customerName' => $customerName].'</td>
        <td width="70%" border="0" align="center"></td>
       
    </tr>
    
    <tr>
    <td width="30%" border="0">Address:'.$address.'</td>
    <td width="70%" align="center" border="0"></td>

</tr>
<tr>

   
    <td width="30%" border="0">Contact Details:'.$contact.'</td>
    <td width="70%" align="center" border="0"> </td>
    
</tr>
<tr>
<td width="30%" border="0">NTN/CNIC #'.$CNIC.'</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">SalesPerson</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Dealer</td>
<td width="70%" align="center" border="0"></td>



</tr>
<tr>
<td width="30%" border="0">Vehicle</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Chassis No</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Engine NO</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Color</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Amount</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Payment Detail</td>
<td width="70%" align="center" border="0"></td>



</tr>

 
 
</tbody>
</table>
    <br>
   
<br><br> <br>
<br>
<table border="0">

<tr>
    
 <td  align="right">      
 _______________________</td>

        
       
      
    </tr>
    <tr>
    
       
    <td align="right"> Sign & Signature
    </td>           
        
       
      
    </tr>
    
</table>

    
    
    
    
    
    ';     // $html= $htmldata;
  
        
        PDF::SetTitle('Request for Invoice');
        PDF::AddPage();
        PDF::writeHTML($newHTML, true, false, true, false, '');

        PDF::Output('invoiceRequest.pdf');
    }
























    public function saleInvoiceRequest()
    {
        
        

        $newHTML='<table border="0" cellpadding="2">
        <thead>
            <tr>
               
                 <th><br><h1>FORLAND MODREN MOTORS</h1></th>
               
            </tr>
        </thead>
        
        <tbody>
        <tr>
        <br>
        <td>
       
        To, <br>

        Foton JW Auto Park (PVT) <br>
    
        </td>




        
        
        </tr>
        <tr>
   
        <td width="30%" border="0" align="left" >Subject</td>
        <td width="70%" border="0" align="right"><h4>DATE________________________</h4></td>
       
    </tr>
      

        
        </tbody>
        

            
    </table>
    <br>
    <br>
        <br>
        <br>
<table border="1" cellpadding="9">
    <tbody>
    <tr>
   
        <td width="30%" border="0" align="left" >Customer Name</td>
        <td width="70%" border="0" align="center"></td>
       
    </tr>
    
    <tr>
    <td width="30%" border="0">Address</td>
    <td width="70%" align="center" border="0"></td>

</tr>
<tr>

   
    <td width="30%" border="0">Contact Details</td>
    <td width="70%" align="center" border="0"> </td>
    
</tr>
<tr>
<td width="30%" border="0">NTN/CNIC #</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">SalesPerson</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Dealer</td>
<td width="70%" align="center" border="0"></td>



</tr>
<tr>
<td width="30%" border="0">Vehicle</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Chassis No</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Engine NO</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Color</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Amount</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Payment Detail</td>
<td width="70%" align="center" border="0"></td>



</tr>

 
 
</tbody>
</table>
    <br>
   
<br><br> <br>
<br>
<table border="0">

<tr>
    
 <td  align="right">      
 _______________________</td>

        
       
      
    </tr>
    <tr>
    
       
    <td align="right"> Sign & Signature
    </td>           
        
       
      
    </tr>
    
</table>

    
    
    
    
    
    ';     // $html= $htmldata;
  
        
        PDF::SetTitle('Request for Invoice');
        PDF::AddPage();
        PDF::writeHTML($newHTML, true, false, true, false, '');

        PDF::Output('invoiceRequest.pdf');
    }

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

public function gatePass()
{
    
    

    $newHTML='<table border="0">
    <thead>
    <tr>
    <th align="center"><h1><br><br><br>FORLAND MODREN MOTORS</h1></th>
    </tr>
    <tr> <th align="center"><h1>Gate Pass</h1></th>
    </tr>
    </thead>
    
    <tbody>
   
    
    </tbody>
    
    
    
    </table>
    <br>
 
    
    <table border="0">
    <tbody>
    <tr>
    <td><br><span style="font-size: medium;">Refrence Number</span></td>
    <td align="center"><br>____________</td>
    <td><br><span style="font-size: medium;">Customer Name</span></td>
    <td align="center"><br>____________</td>
    
    
    </tr>
    <tr>
    <td><br><span style="font-size: medium;">Date</span></td>
    <td align="center"><br>____________</td>
    <td><br><span style="font-size: medium;">CNIC/NTN</span></td>
    <td align="center"><br>____________</td>
    
    
    </tr>
        </tbody>
    </table>
    
    
    
    <br>
    <br>
  
    <table border="0" >
    <tr ><td>
    <table border="0">
    <thead>
    <tr>
    <td align="left" bgcolor="#C0C0C0" width="60" >
    Sr# </td>
    <td align="center" bgcolor="#C0C0C0" width="140">Product Description</td>
    <td align="center"bgcolor="#C0C0C0" >Engine No</td>
    <td align="center" bgcolor=" #C0C0C0">Chassis No</td>
    <td align="center" bgcolor=" #C0C0C0">Color</td>
    
    </tr>
    </thead>
    <tbody >
    <tr >
    <td ></td>
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
    </tbody>
    </table>
    </td>
    </tr>
    </table>
    
    
    
    <table border="0">
    <thead>
 
   
    <br>
    <br>
    
    
    <br>
    <tr>
    <td width="60%" border="0"></td>
    <td width="40%" align="center" border="0">_______________________</td>
    
    
    
    </tr>
    <tr>
    
    
    <td width="60%" border="0"></td>
    <td width="40%" align="center" border="0">Sign and Signature</td>
    
    
    
    </tr>
    
    
    
    
    </tbody>
    </table>
    <br><br>
    <table border="0">
    
    <tr>
    
    
    <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Milat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>
    
    
    
    
    </tr>
    <tr>
    
    
    <td bgcolor="crimson" align="center" border="0"><h5> Email Adress: forlandmodernmotoprs@yahoo.com </h5></td>
    
    
    
    
    </tr>
    
    </table>
    <br><br><br>
    <hr>
    <table border="0">
    
    <thead>
    <tr>
    <th align="center"><br><h1>FORLAND MODREN MOTORS<br></h1></th>
    </tr>
    <tr> <th align="center"><h1> Passage Certificate</h1></th>
    </tr>
    </thead>
    
    <tbody>
   
    
    </tbody>
    
    
    
    </table>
   
    
    <br>
    
    <table border="0">
    <tbody>
    <tr>
    <td><br><span style="font-size: medium;">Refrence Number</span></td>
    <td align="center"><br>____________</td>
    <td><br><span style="font-size: medium;">Customer Name</span></td>
    <td align="center"><br>____________</td>
    
    
    </tr>
    <tr>
    <td><br><span style="font-size: medium;">Date</span></td>
    <td align="center"><br>____________</td>
    <td><br><span style="font-size: medium;">CNIC/NTN</span></td>
    <td align="center"><br>____________</td>
    
    
    </tr>
        </tbody>
    </table>
    
    
    
    <br>
    <br>
    <br>
    <br>
    <table border="1" >
    <tr >
    <table border="0">
    <thead>
    <tr>
    <td align="left" bgcolor="#C0C0C0" width="60" >
    Sr# </td>
    <td align="center" bgcolor="#C0C0C0" width="140">Product Description</td>
    <td align="center"bgcolor="#C0C0C0" >Engine No</td>
    <td align="center" bgcolor=" #C0C0C0">Chassis No</td>
    <td align="center" bgcolor=" #C0C0C0">City/Area</td>
    
    
    </tr>
    </thead>
    <tbody >
    <tr >
    <td ></td>
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
    
    
    
    <table border="0">
    <thead>
 
   
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
    <td width="40%" align="center" border="0">Sign and Signature</td>
    
    
    
    </tr>
    
    
    
    
    </tbody>
    </table>
     
    <table border="0">
    
    <tr>
    
    
    <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Milat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>
    
    
    
    
    </tr>
    <tr>
    
    
    <td bgcolor="crimson" align="center" border="0"><h5> Email Adress: forlandmodernmotoprs@yahoo.com </h5></td>
    
    
    
    
    </tr>
    
    </table>
    

    
    
    
    ';     // $html= $htmldata;

    
    PDF::SetTitle('Request for Invoice');
    PDF::AddPage();
    PDF::writeHTML($newHTML, true, false, true, false, '');

    PDF::Output('invoiceRequest.pdf');

}






public function  qutationRequestFinal(){


$newHTML='<table cellpadding="1" cellspacing="1" border="1" style="text-align:center;">
<tr><td>




<img src="/assets/img/logo.jpg" border="0" height="100" width="300" align="center" /></td></tr>
<tr>
<td align="Left">
Customer Name
</td>
</tr>
<tr>
<td >
Qoutation For Forland C 10
</td>
</tr>

</table>
<br>
<table cellpadding="1" cellspacing="1" border="1" style="text-align:center;">
<thead>
<tr>
<th>Description</th>
<th>Color</th>
<th>Unit Price</th>
<th width="40">Qty</th>
<th width="173">Total Price</th>
</tr>
</thead>


<tbody>
<tr><td>Forland C10</td>
<td rowspan="2">White</td>
<td >Rs</td>
<td rowspan="2" width="40">2</td>
<td width="173">Rs</td></tr>
<tr><td >ABHA</td>

<td>175000</td>
<td width="173">1254222</td>
</tr>


<tr><td colspan="5">Two milion fifty Thousand only  </td></tr>

</tbody>
</table>


<br><br>
<table border="0">

<tr ><td colspan="5" align ="left" ><h3>Terms & Conditions</h3> </td></tr>
</table>



<table>

</table>



<table border="1" cellpadding="9">
    <tbody>
    <tr>
   
        <td width="30%" border="0" align="left" >Customer Name</td>
        <td width="70%" border="0" align="center"></td>
       
    </tr>
    
    <tr>
    <td width="30%" border="0">Address</td>
    <td width="70%" align="center" border="0"></td>

</tr>
<tr>

   
    <td width="30%" border="0">Contact Details</td>
    <td width="70%" align="center" border="0"> </td>
    
</tr>
<tr>
<td width="30%" border="0">NTN/CNIC #</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">SalesPerson</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Dealer</td>
<td width="70%" align="center" border="0"></td>



</tr>
<tr>
<td width="30%" border="0">Vehicle</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Chassis No</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Engine NO</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Color</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Amount</td>
<td width="70%" align="center" border="0"></td>



</tr>

<tr>
<td width="30%" border="0">Payment Detail</td>
<td width="70%" align="center" border="0"></td>



</tr>

 
 
</tbody>
</table>










';
 
    PDF::SetTitle('Qoutation');
    PDF::AddPage();
    PDF::writeHTML($newHTML, true, false, true, false, '');

    PDF::Output('qty.pdf');



}











}




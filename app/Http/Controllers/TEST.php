<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\serviceSalesFlow;
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


    public function saleServiceInvoice1()
    {
        
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
        <tr><td align="center"><h1>Sales Invoice</h1></td></tr>
        
        
        
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
        <td align="center"><br>'.session()->get("invoiceDate").'</td>
        
        
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
        <table border="1" >
        <tr ><td>
        <table border="0">
        <thead>
        <tr>
        <td align="left" bgcolor="#C0C0C0" >
        Description </td>
        <td align="center" bgcolor="#C0C0C0" >color</td>
        <td align="center"bgcolor="#C0C0C0" >Engine No</td>
        <td align="center" bgcolor=" #C0C0C0">Chassis No</td>
        <td align="center" bgcolor=" #C0C0C0">Amount</td>
        
        </tr>
        </thead>
        <tbody >
        <tr>
        <td>'.session()->get("description").'</td>
        <td>'.session()->get("color").'</td>
        <td>'.session()->get("engineNo").'</td>
        <td>'.session()->get("chassisNo").'</td>
        <td>'.session()->get("unitPrice").'</td>
        </tr>
        
        <tr>
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
        <tr>
        <th width="60%" border="1" align="center">
        Total in Word </th>
        
        <th width="40%" border="1" align="center" style="line-height: 100%;"> Total PKR</th>
        
        </tr>
        </thead>
        <tbody>
        <tr>
        <td width="60%" border="1" align="center">'.session()->get("amountInWords").'/-Only.</td>
        <td width="40%" border="1" align="center">'.session()->get("amountPaid").'</td>
        
        
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
        <td width="40%" align="center" border="0">Sign and Signature</td>
        
        
        
        </tr>
        
        
        
        
        </tbody>
        </table>
        <br><br> <br>
        <br>
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
        <td width="70%" border="0" align="right"><h4>Date: '.session()->get("invoiceDate").'</h4></td>
       
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
        <td width="70%" border="0" align="center">'.session()->get("customerName").'</td>
       
    </tr>
    
    <tr>
    <td width="30%" border="0">Address</td>
    <td width="70%" align="center" border="0">'.session()->get("address").'</td>

</tr>
<tr>

   
    <td width="30%" border="0">Contact Details</td>
    <td width="70%" align="center" border="0">'.session()->get("contact").'</td>
    
</tr>
<tr>
<td width="30%" border="0">NTN/CNIC #</td>
<td width="70%" align="center" border="0">'.session()->get("CNIC").'</td>



</tr>

<tr>
<td width="30%" border="0">SalesPerson</td>
<td width="70%" align="center" border="0">Forland Modern Motors</td>



</tr>

<tr>
<td width="30%" border="0">Dealer</td>
<td width="70%" align="center" border="0">Forland Modern Motors</td>



</tr>
<tr>
<td width="30%" border="0">Vehicle</td>
<td width="70%" align="center" border="0">'.session()->get("productName").'</td>



</tr>

<tr>
<td width="30%" border="0">Chassis No</td>
<td width="70%" align="center" border="0">'.session()->get("chassisNo").'</td>



</tr>

<tr>
<td width="30%" border="0">Engine NO</td>
<td width="70%" align="center" border="0">'.session()->get("engineNo").'</td>



</tr>

<tr>
<td width="30%" border="0">Color</td>
<td width="70%" align="center" border="0">'.session()->get("color").'</td>



</tr>

<tr>
<td width="30%" border="0">Amount</td>
<td width="70%" align="center" border="0">'.session()->get("amountPaid").'</td>



</tr>

<tr>
<td width="30%" border="0">Payment Detail</td>
<td width="70%" align="center" border="0">Payment Details Attached</td>



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
   // dd($InvoiceID);
    //serviceSalesFlow::getAllInvoiceDetails($InvoiceID);
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
    <td align="center"><br>'.session()->get("referenceNumber").'</td>
    <td><br><span style="font-size: medium;">Customer Name</span></td>
    <td align="center"><br>'.session()->get("customerName").'</td>
    
    
    </tr>
    <tr>
    <td><br><span style="font-size: medium;">Date</span></td>
    <td align="center"><br>'.session()->get("invoiceDate").'</td>
    <td><br><span style="font-size: medium;">CNIC/NTN</span></td>
    <td align="center"><br>'.session()->get("CNIC").'</td>
    
    
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
    <td align="left" bgcolor="#C0C0C0" width="60" > Sr# </td>
    <td align="center" bgcolor="#C0C0C0" width="140">Product Description</td>
    <td align="center"bgcolor="#C0C0C0" >Engine No</td>
    <td align="center" bgcolor=" #C0C0C0">Chassis No</td>
    <td align="center" bgcolor=" #C0C0C0">Color</td>
    
    </tr>
    </thead>
    <tbody >
    <tr >
    <td >1</td>
    <td>'.session()->get("description").'</td>
    <td>'.session()->get("engineNo").'</td>
    <td>'.session()->get("chassisNo").'</td>
    <td>'.session()->get("color").'</td>
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
    <td align="center"><br>'.session()->get("referenceNumber").'</td>
    <td><br><span style="font-size: medium;">Customer Name</span></td>
    <td align="center"><br>'.session()->get("customerName").'</td>
    
    
    </tr>
    <tr>
    <td><br><span style="font-size: medium;">Date</span></td>
    <td align="center"><br>'.session()->get("invoiceDate").'</td>
    <td><br><span style="font-size: medium;">CNIC/NTN</span></td>
    <td align="center"><br>'.session()->get("CNIC").'</td>
    
    
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
    <td >1</td>
    <td>'.session()->get("description").'</td>
    <td>'.session()->get("engineNo").'</td>
    <td>'.session()->get("chassisNo").'</td>
    <td>'.session()->get("color").'</td>
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






public function qutationRequestFinal(){


$newHTML='<table cellpadding="1" cellspacing="1" border="1" style="text-align:center;">
<tr><td>




<img src="/assets/img/forLogo.jpg" border="0" height="100" width="300" align="center" /></td></tr>
<tr>
<td align="Left">
'.session()->get("customerName").' Date: '.session()->get("invoiceDate").'
</td>

</tr>
<tr>
<td >
Qoutation For '.session()->get("productName").'
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
<tr>
<td>'.session()->get("productName").'</td>
<td rowspan="2">'.session()->get("color").'</td>
<td >Rs</td>
<td rowspan="2" width="40">'.session()->get("quantity").'</td>
<td width="173">Rs</td></tr>
<tr><td >'.session()->get("description").'</td>

<td>'.session()->get("price").'</td>
<td width="173">'.session()->get("total").'</td>
</tr>


<tr><td colspan="5">('.session()->get("amountInWords").'/-Only).</td></tr>

</tbody>
</table>


<br><br>
<table border="0">

<tr ><td colspan="5" align ="left" ><h3>Terms & Conditions<br><br>

</h3> </td></tr>
</table>



<table>

</table>



<table border="1" cellpadding="3">
    <tbody>
    <tr>
   
        <td width="30%" border="0" align="left" >Delivery Time</td>
        <td width="70%" border="0" align="left">'.session()->get("DeliveryTime").' days after recipt of 100% advance payment</td>
       
    </tr>
    
    <tr>
    <td width="30%" border="0">Validity</td>
    <td width="70%" align="left" border="0">This Qoutation is valid for '.session()->get("ValidityPeriod").' days only</td>

</tr>
<tr>

   
    <td width="30%" border="0">Payment</td>
    <td width="70%" align="left" border="0">100% Advance payment in shape of DD/PO in favor of '.session()->get("PayTo").'</td>
    
</tr>
<tr>
<td width="30%" border="0">Duty/Taxes #</td>
<td width="70%" align="left" border="0">Any change in Govt.faisal Policies,RGST/VAT and tariff structures will be on coustumer accounts</td>



</tr>

<tr>
<td width="30%" border="0">Force Majeure</td>
<td width="70%" align="left" border="0">Manufacture will will not be responsible for any delay in delivery due to force majeure circumstance </td>



</tr>

<tr>
<td width="30%" border="0">Warranty</td>
<td width="70%" align="left" border="0"> Manufacture will not br responsible for any delay in delivery due to forcemajor circumstance</td>



</tr>
<tr>
<td width="30%" border="0">Model</td>
<td width="70%" align="left" border="0">'.session()->get("productName").'(2021)</td>



</tr>



 
 
</tbody>
</table>




  
<table border="0">
<thead>
<br>
<br>


<br>


<br><br>
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
<td width="40%" align="center" border="0">Sign and Signature</td>



</tr>




</tbody>
</table>

';
 
    PDF::SetTitle('Qoutation');
    PDF::AddPage();
    PDF::writeHTML($newHTML, true, false, true, false, '');

    PDF::Output('qty.pdf');



}
  
public function InvoiceRequest(){


    $newHTML='<table cellpadding="1" cellspacing="1" border="1" style="text-align:center;">
    <tr><td>
    
    
    
    
    <img src="/assets/img/forLogo.jpg" border="0" height="100" width="300" align="center" /></td></tr>
    <tr>
    <td align="Left">
    '.session()->get("customerName").' Date: '.session()->get("invoiceDate").'
    </td>
    
    </tr>
    <tr>
    <td >
    Qoutation For '.session()->get("productName").'
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
    <tr>
    <td>'.session()->get("productName").'</td>
    <td rowspan="2">'.session()->get("color").'</td>
    <td >Rs</td>
    <td rowspan="2" width="40">'.session()->get("quantity").'</td>
    <td width="173">Rs</td></tr>
    <tr><td >'.session()->get("description").'</td>
    
    <td>'.session()->get("price").'</td>
    <td width="173">'.session()->get("total").'</td>
    </tr>
    
    
    <tr><td colspan="5">('.session()->get("amountInWords").'/-Only).</td></tr>
    
    </tbody>
    </table>
    
    
    <br><br>
    <table border="0">
    
    <tr ><td colspan="5" align ="left" ><h3>Terms & Conditions<br><br>
    
    </h3> </td></tr>
    </table>
    
    
    
    <table>
    
    </table>
    
    
    
    <table border="1" cellpadding="3">
        <tbody>
        <tr>
       
            <td width="30%" border="0" align="left" >Delivery Time</td>
            <td width="70%" border="0" align="left">'.session()->get("DeliveryTime").' days after recipt of 100% advance payment</td>
           
        </tr>
        
        <tr>
        <td width="30%" border="0">Validity</td>
        <td width="70%" align="left" border="0">This Qoutation is valid for '.session()->get("ValidityPeriod").' days only</td>
    
    </tr>
    <tr>
    
       
        <td width="30%" border="0">Payment</td>
        <td width="70%" align="left" border="0">100% Advance payment in shape of DD/PO in favor of '.session()->get("PayTo").'</td>
        
    </tr>
    <tr>
    <td width="30%" border="0">Duty/Taxes #</td>
    <td width="70%" align="left" border="0">Any change in Govt.faisal Policies,RGST/VAT and tariff structures will be on coustumer accounts</td>
    
    
    
    </tr>
    
    <tr>
    <td width="30%" border="0">Force Majeure</td>
    <td width="70%" align="left" border="0">Manufacture will will not be responsible for any delay in delivery due to force majeure circumstance </td>
    
    
    
    </tr>
    
    <tr>
    <td width="30%" border="0">Warranty</td>
    <td width="70%" align="left" border="0"> Manufacture will not br responsible for any delay in delivery due to forcemajor circumstance</td>
    
    
    
    </tr>
    <tr>
    <td width="30%" border="0">Model</td>
    <td width="70%" align="left" border="0">'.session()->get("productName").'(2021)</td>
    
    
    
    </tr>
    
    
    
     
     
    </tbody>
    </table>
    
    
    
    
      
    <table border="0">
    <thead>
    <br>
    <br>
    
    
    <br>
    
    
    <br><br>
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
    <td width="40%" align="center" border="0">Sign and Signature</td>
    
    
    
    </tr>
    
    
    
    
    </tbody>
    </table>
    
    ';
     
        PDF::SetTitle('Qoutation');
        PDF::AddPage();
        PDF::writeHTML($newHTML, true, false, true, false, '');
    
        PDF::Output('invoiceRequest_4.pdf');
    
    
    
    }

    public function deliveryLetter(){


        $newHTML='<body>
        <div class="helloworld">
    
    
            <div class="borderMain">
                <div class="borderMain">
                    <div class="borderMain">
                        <div class="borderMain">
                            <div class="mainBorder">
    
                                <header>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <h3>FORLAND MODERN MOTORS DELIVERY LETTER </h3>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table style="width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <td style="font-weight:600 ;">Reference Number</td>
                                                            <td>FMM-GPD-00002</td>
                                                            <td style="visibility: hidden;">Model</td>
                                                            <td style="visibility: hidden;">Engine Number</td>
                                                            <td style="font-weight:600 ;">Date</td>
                                                            <td>30-Jan-20</td>
                                                        </tr>
                                                    </thead>
    
                                                </table>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row" id="mainMarginRow">
                                            <div class="col-md-4">
                                                <h3>Purchaser Detail :</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table id="TableId" style="width: 100%; border: 1px solid #333;">
                                                    <tbody id="myTbody">
                                                        <tr>
                                                            <td style="font-weight:600 ;">Name:</td>
                                                            <td>Asif Jan</td>
                                                            <td style="font-weight:600 ;">Father Name:</td>
                                                            <td>Malik Arif Jah</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight:600 ;">CNIC / NTN</td>
                                                            <td>35201-1485722-5</td>
                                                            <td style="font-weight:600 ;">Contact:</td>
                                                            <td>0300-4255449</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight:600 ;">Address</td>
                                                            <td colspan="3">Phase 1, House No 27, Block V.I.P, Lahore
                                                                Medical
                                                                Housing Scheme, Lahore
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row" id="mainMarginRow">
                                            <div class="col-md-4">
                                                <h3>Vehicle Detail :</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table id="TableId" class="text-center" style="width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>SR.#</th>
                                                            <th>Product Description</th>
                                                            <th>Model</th>
                                                            <th>Engine Number</th>
                                                            <th>Chassis Number</th>
                                                            <th>Engine Power</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="font-weight:600 ;">01</td>
                                                            <td>Forland C19</td>
                                                            <td>2020</td>
                                                            <td>L750815925B</td>
                                                            <td>NFJV3JA34LL001519</td>
                                                            <td>1809 cc</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row" id="mainMarginRow">
                                            <div class="col-md-4">
                                                <h3>Accessories Along With :</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="text-center" id="TableId" style="width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Tool Kit</th>
                                                            <th>Spare Tyre</th>
                                                            <th>Original Keys</th>
                                                            <th>Warranty Book</th>
    
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>YES</td>
                                                            <td>YES</td>
                                                            <td>2</td>
                                                            <td>YES</td>
    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h5>Note</h5>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                    <li>To my entire satisfaction, I have taken possession of the above
                                                        mentioned vehicle, I do
                                                        hereby declared that i shall be fully responsible for all accidents
                                                        ,
                                                        tokens , machine
                                                        defects and the legal proceedings regarding this vehicle from now
                                                        onwards</li>
                                                    <li>
                                                        I also hereby undertake to get the ownership of this vehicle
                                                        transferred
                                                        in my name from the
                                                        concerned Registration Authority within the stipultated period of 15
                                                        days from today , and
                                                        if i could not I will do so at my own responsibility and risk.
                                                    </li>
                                                    <li>
                                                        I have thoroughly checked and inspected the vehicle including Body
                                                        Engine And Chassis number
                                                        , and no tempering is
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </header>
    
    
    
                                <br>
                                <section>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label style="border-top:1px solid #333;" for="">Authorised
                                                    Signature</label>
                                            </div>
                                            <div class="col-sm-4 offset-sm-4 " style="text-align: right !important;">
                                                <label style="border-top:1px solid #333;" for="">Purchaser Signature</label>
    
                                            </div>
    
                                        </div>
                                    </div>
                                </section>
                                <br>
    
    
                                <footer class="my-3">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="footerMain">
                                                    <h4>8-KM, Sheikhupura Road, Opposite Millat Tractors Limited , Lahore.
                                                        Tel:
                                                        0300-0600061
                                                        Email Address: forlandmodernmotors@yahoo.com</h4>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        
        ';
         
            PDF::SetTitle('Qoutation');
            PDF::AddPage();
            PDF::writeHTML($newHTML, true, false, true, false, '');
        
            PDF::Output('deliveryREquest.pdf');
        
        
        
        }
    

}




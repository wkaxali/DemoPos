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
        <tr><td align="center"><h1>Sales wf3efeanvoice</h1></td></tr>
        
        
        
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
        <td width="40%" align="center" border="0">Sign and Stamp</td>
        
        
        
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
               
                 <th align="center"><br><h1>FORLAND MODREN MOTORS</h1></th>
               
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
        <td width="55%" border="0" align="center">'.session()->get("customerName").'</td>
       
    </tr>
    
    <tr>
    <td width="30%" border="0">Address</td>
    <td width="55%" align="center" border="0">'.session()->get("address").'</td>

</tr>
<tr>

   
    <td width="30%" border="0">Contact Details</td>
    <td width="55%" align="center" border="0">'.session()->get("contact").'</td>
    
</tr>
<tr>
<td width="30%" border="0">NTN/CNIC #</td>
<td width="55%" align="center" border="0">'.session()->get("CNIC").'</td>



</tr>

<tr>
<td width="30%" border="0">SalesPerson</td>
<td width="55%" align="center" border="0">'.session()->get("salesPerson").'</td>



</tr>


<tr>
<td width="30%" border="0">Vehicle</td>
<td width="55%" align="center" border="0">'.session()->get("productName").'</td>



</tr>
<tr>
<td width="30%" border="0">Version</td>
<td width="55%" align="center" border="0">'.session()->get("description").'</td>



</tr>

<tr>
<td width="30%" border="0">Chassis No</td>
<td width="55%" align="center" border="0">'.session()->get("chassisNo").'</td>



</tr>

<tr>
<td width="30%" border="0">Engine NO</td>
<td width="55%" align="center" border="0">'.session()->get("engineNo").'</td>



</tr>

<tr>
<td width="30%" border="0">Color</td>
<td width="55%" align="center" border="0">'.session()->get("color").'</td>



</tr>

<tr>
<td width="30%" border="0">Amount</td>
<td width="55%" align="center" border="0">'.session()->get("amountPaid").'</td>



</tr>
<tr>
<td width="30%" border="0">Invoice</td>
<td width="55%" align="center" border="0">  </td>



</tr>

<tr>
<td width="30%" border="0">Invoice Price</td>
<td width="55%" align="center" border="0">'.session()->get("unitPrice").'</td>



</tr>

<tr>
<td width="30%" border="0">Payment Detail</td>
<td width="55%" align="center" border="0">Payment Details Attached</td>



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
    
       
    <td align="right"> Sign & Stamp
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
    <td width="40%" align="center" border="0">Sign and Stamp</td>
    
    
    
    </tr>
    
    
    
    
    </tbody>
    </table>
    <br><br>
    <table border="0">
    
    <tr>
    
    
    <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>
    
    
    
    
    </tr>
    <tr>
    
    
    <td bgcolor="crimson" align="center" border="0"><h5> Email Adress: forlandmodernmotors@yahoo.com </h5></td>
    
    
    
    
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
    <td width="40%" align="center" border="0">Sign and Stamp</td>
    
    
    
    </tr>
    
    
    
    
    </tbody>
    </table>
     
    <table border="0">
    
    <tr>
    
    
    <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>
    
    
    
    
    </tr>
    <tr>
    
    
    <td bgcolor="crimson" align="center" border="0"><h5> Email Adress: forlandmodernmotors@yahoo.com </h5></td>
    
    
    
    
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

<td width="80%" border="0" align="left"><label for="Bank">Choose a Bank:</label>

<select name="Bank" id="bank">
  <option value="Bank Of Punjab">Bank Of Punjab</option>
  <option value="saab">Bank Al-Habib LTd</option>
  <option value="mercedes">Meezan Bank LTD</option>
  <option value="audi">Habib Bank LTD</option>
  <option value="audi">Askari Bank</option>
  <option value="audi">MCB</option>
  <option value="audi">Orix Modarba</option>
  <option value="audi">JS Bank Limited</option>
  <option value="audi">First Habib Modarba</option>
  <option value="audi">Al Baraka</option>
</select>
</td>
<td >
 Ref No: ________
</td>

</tr>
<tr> 
<td width="80%" border="0" align="left" >'.session()->get("customerName").'</td>






<td align="right">
 Date: '.session()->get("invoiceDate").'
</td>

</tr>
<tr><td width="100%" border="0" align="left" >'.session()->get("address").'</td></tr>
<tr>
<td  width="100%">


<h3>

Qoutation For '.session()->get("productName").'</h3>



Qoutation For<br> '.session()->get("productName").'</h1>
<br>
<br>
<br>
</td>
</tr>

</table>
<br>
<table cellpadding="1" cellspacing="1" border="1" style="text-align:center;">
<thead>
<tr>
<th width="186">Description</th>
<th>Color</th>
<th>Unit Price</th>
<th width="20">Qty</th>
<th width="113">Total Price</th>
</tr>
</thead>


<tbody>
<tr>
<td>'.session()->get("productName").'</td>
<td rowspan="2">'.session()->get("color").'</td>
<td >Rs</td>
<td rowspan="2" width="40">'.session()->get("quantity").'</td>
<td width="73">Rs</td></tr>
<tr><td width="213" >'.session()->get("description").'</td>

<td>'.session()->get("price").'</td>
<td width="73">'.session()->get("total").'</td>
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
<td width="70%" align="left" border="0"></td>



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
<td width="40%" align="center" border="0">Sign and Stamp</td>



</tr>




</tbody>
</table>

';
 
    PDF::SetTitle('Qoutation');
    PDF::AddPage();
    PDF::writeHTML($newHTML, true, false, true, false, '');

    PDF::Output('qty.pdf','I');



}
  
public function InvoiceRequest(){


}

public function summary()
{
  
    $newHTML='
    <table border="1">
 
    <tr><td>
    <table border="0"cellpadding="7">
    <thead>
    <tr>
    <th align="center"><h1><br><br><br>Summary Report</h1></th>
    </tr>
  

    </thead>
    
    <tbody>
   
    
    </tbody>
    
    
    
    </table>
    <br>
 
    
    <table border="0">
    <tbody>
  
    <tr>
    <td  align="center"><br><span style="font-size: medium;">Date</span></td>

  
    
    
    </tr>
        </tbody>
    </table>
    
    
    
    <br>
    <br>
  
 
    <table border="1" cellpadding="3">
    <thead>
    <tr >
    <td  align="left" bgcolor="#C0C0C0" > Credit </td>
    <td align="center" bgcolor=" #C0C0C0">1300000</td>
    
     </tr>
    </thead>
    <tbody >
    <tr >
    <td >Sales Vicheels</td>
    <td align="center">10039840</td>
    </tr>
    <tr >
    <td >Parts</td>
    <td align="center">10040</td>
    </tr>
    <tr >
    <td >Services</td>
    <td align="center">19840</td>
    </tr>
    <tr >
    <td >Other</td>
    <td align="center">9840</td>
    </tr>
    <tr >
    <td >Other</td>
    <td align="center">9840</td>
    </tr>
    <tr >
    <td >Other</td>
    <td align="center">9840</td>
    </tr>
    <tr >
    <td >Other</td>
    <td align="center">9840</td>
    </tr>

    
    
    </tbody>
    </table>
   
    <table border="1" cellpadding="5">
    <thead>
    <tr>
    <td align="left" bgcolor="#C0C0C0" >Debit </td>
    <td align="center" bgcolor=" #C0C0C0">1300000</td>
    
    </tr>
    </thead>
    <tbody >
    <tr >
    <td >Payments</td>
    <td align="center">10039840</td>
    </tr>
    <tr >
    <td >Pay</td>
    <td align="center">10040</td>
    </tr>
    <tr >
    <td >Expense</td>
    <td align="center">19840</td>
    </tr>
    <tr >
    <td >Heads</td>
    <td align="center">9840</td>
    </tr>
    <tr >
    <td >Other</td>
    <td align="center">9840</td>
    </tr>
    <tr >
    <td >Other</td>
    <td align="center">9840</td>
    </tr>
    
    </tbody>
    </table>

    
 
    
    <table border="0"cellpadding="7">
    <thead>
 
   
    <br>
    <br>
    
    
    <br>
    <tr>
    <td width="60%" border="0" align="center" bgcolor=" #C0C0C0">Total</td>
    <td width="40%" align="center" border="0"  bgcolor=" #C0C0C0">_______________________</td>
    
    
    
    </tr>
    <tr>
    <br>
    
    <td width="60%" border="0" align="center" bgcolor=" #C0C0C0">Profit/Loss</td>
    <td width="40%" align="center" border="0" bgcolor=" #C0C0C0">______________________</td>
    
    
    
    </tr>
    
    
    
    
    </tbody>
    </table>
       
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
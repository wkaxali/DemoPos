<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class TEST extends Controller
{
    public function index()
    {
        $html = '<table border="0">
        <thead>
        <tr>
        <th><br><h1>FORLAND MODREN MOTORS</h1></th>
        
        
        </tr>
        </thead>
        
        <tbody>
        <tr>
        
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
        <td><br><span style="font-size: medium;">Customer Name</span></td>
        <td align="center"><br>____________</td>
        <td><br><span style="font-size: medium;">Booking No</span></td>
        <td align="center"><br>____________</td>
        
        
        </tr>
        <tr>
        <td><br><span style="font-size: medium;">Address</span></td>
        <td align="center"><br>____________</td>
        <td><br><span style="font-size: medium;">Invoice Number</span></td>
        <td align="center"><br>____________</td>
        
        
        </tr>
        <tr>
        <td><br><span style="font-size: medium;">CNIC/NTN</span></td>
        <td align="center"><br>____________</td>
        <td><br><span style="font-size: medium;">Invoice Date</span></td>
        <td align="center"><br>____________</td>
        
        
        </tr>
        <tr>
        <td><br><span style="font-size: medium;">Contact</span></td>
        <td align="center"><br>____________</td>
        <td><br><span style="font-size: medium;"></span></td>
        <td align="center"><br>____________</td>
        
        
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
        
        <th width="40%" border="1" align="center" style="line-height: 100%;"> Tootal PKR</th>
        
        </tr>
        </thead>
        <tbody>
        <tr>
        <td width="60%" border="1" align="center">1000</td>
        <td width="40%" border="1" align="center">10000</td>
        
        
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
        
        
        
        
        
        ';
        
        PDF::SetTitle('Hello World');
        PDF::AddPage();
        PDF::writeHTML($html, true, false, true, false, '');

        PDF::Output('hello_world.pdf');
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function requestForQuotation()
    {
        
        $html = '
        <img  src="https://scontent.flhe3-1.fna.fbcdn.net/v/t31.0-8/p960x960/26233302_139328973417837_8607029096157006840_o.png?_nc_cat=109&ccb=3&_nc_sid=85a577&_nc_ohc=A3sG37gNOCIAX99Fp97&_nc_ht=scontent.flhe3-1.fna&_nc_tp=30&oh=70820213552a4e5f8d5ab72846496285&oe=60519500" alt="logo"  style="width:195px;height:152px;"  >
        <div id="target">
        <p><b>To, <br/>
        Foton Auto Park (PVT) Ltd. <br/>
        Subject: Invoice Request
        </b>
        </p>
        
        <p style="text-align: right;"><b>Date:</b></p>
        
        <table style="width:100%">
          
          <tr>
            <th style="border: 1px solid black;">Costumer Name</th>
            <th style="border: 1px solid black;">Ahmad</th>
          </tr>
          <tr>
            <td style="border: 1px solid black;">Address</td>
            <td style="border: 1px solid black;">Lahore</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;">Contact Details</td>
            <td style="border: 1px solid black;">new</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;">NTN/CNIC#</td>
            <td style="border: 1px solid black;">2551234100</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;">Salesperson</td>
            <td style="border: 1px solid black;">khan</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;">Dealer</td>
            <td style="border: 1px solid black;">khan</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;">Vehicle</td>
            <td style="border: 1px solid black;">Forland Modern Motors</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;">Chassis No</td>
            <td style="border: 1px solid black;">100</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;">Engine No</td>
            <td style="border: 1px solid black;">50</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;">Color</td>
            <td style="border: 1px solid black;">red</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;">Amount</td>
            <td style="border: 1px solid black;">$50</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;">payment: Cheque Details</td>
            <td style="border: 1px solid black;">34000330030330</td>
          </tr>
        </table>
   
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <p style="text-align: right;"><b>_____________________</b>
        
        </p>
        ';
      // $html= $htmldata;
        
        PDF::SetTitle('Hello World');
        PDF::AddPage();
        PDF::writeHTML($html, true, false, true, false, '');
>>>>>>> 8e78c63d9295d89bce2894d81901e5410e2d0e08


    public function saleInvoiceRequest1()
    {
        
<<<<<<< HEAD
=======
    public function getInfo()
    {  
        $html = '<img style="height: 200px; width: 200px;" src="https://images.pexels.com/photos/1619792/pexels-photo-1619792.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
>>>>>>> ff0cd043d1103fbe6f2bd182ade0c4f7be00a53f
=======

        $html = '<img style="height: 100px; width: 200px;" src="./assets/img/logo.jpg">
  
        <br><br><br><br><br><br><br><table border="0.5" cellpadding="2" cellspacing="2">
        <thead>
         <tr style="background-color:#FFFF00;color:#0000FF;">
          <td width="30" align="center"><b>A</b></td>
          <td width="140" align="center"><b>XXXX</b></td>
          <td width="140" align="center"><b>XXXX</b></td>
          <td width="80" align="center"> <b>XXXX</b></td>
          <td width="80" align="center"><b>XXXX</b></td>
          <td width="45" align="center"><b>XXXX</b></td>
         </tr>
         <tr >
          <td width="30" align="center" style="background-color:#FF0000;color:#FFFF00;"><b>B</b></td>
          <td width="140" align="center"><b>XXXX</b></td>
          <td width="140" align="center"><b>XXXX</b></td>
          <td width="80" align="center"> <b>XXXX</b></td>
          <td width="80" align="center"><b>XXXX</b></td>
          <td width="45" align="center"><b>XXXX</b>php </td>
         </tr>
        </thead>
         <tr>
          <td width="30" align="center">1.</td>
          <td width="140" rowspan="6">XXXX<br />XXXX<br />XXXX<br />XXXX<br />XXXX<br />XXXX<br />XXXX<br />XXXX</td>
          <td width="140">XXXX<br />XXXX</td>
          <td width="80">XXXX<br />XXXX</td>
          <td width="80">XXXX</td>
          <td align="center" width="45">XXXX<br />XXXX</td>
         </tr>
         <tr>
          <td width="30" align="center" rowspan="3">2.</td>
          <td width="140" rowspan="3">XXXX<br />XXXX</td>
          <td width="80">XXXX<br />XXXX</td>
          <td width="80">XXXX<br />XXXX</td>
          <td align="center" width="45">XXXX<br />XXXX</td>
         </tr>
         <tr>
          <td width="80">XXXX<br />XXXX<br />XXXX<br />XXXX</td>
          <td width="80">XXXX<br />XXXX</td>
          <td align="center" width="45">XXXX<br />XXXX</td>
         </tr>
         <tr>
          <td width="80" rowspan="2" >RRRRRR<br />XXXX<br />XXXX<br />XXXX<br />XXXX<br />XXXX<br />XXXX<br />XXXX</td>
          <td width="80">XXXX<br />XXXX</td>
          <td align="center" width="45">XXXX<br />XXXX</td>
         </tr>
         <tr>
          <td width="30" align="center">3.</td>
          <td width="140">XXXX1<br />XXXX</td>
          <td width="80">XXXX<br />XXXX</td>
          <td align="center" width="45">XXXX<br />XXXX</td>
         </tr>
         <tr>
          <td width="30" align="center">4.</td>
          <td width="140">XXXX<br />XXXX</td>
          <td width="80">XXXX<br />XXXX</td>
          <td width="80">XXXX<br />XXXX</td>
          <td align="center" width="45">XXXX<br />XXXX</td>
         </tr>

        </table>
   
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <p style="text-align: right;"><b>_____________________</b>
        
        </p>
        ';
      // $html= $htmldata;
        
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


        PDF::Output('hello_world.pdf');
    }


    public function saleServiceInvoice()
    {
        
>>>>>>> 8e78c63d9295d89bce2894d81901e5410e2d0e08
        

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























<<<<<<< HEAD

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

=======
>>>>>>> 8e78c63d9295d89bce2894d81901e5410e2d0e08
}






public function  qutationRequestFinal(){


$newHTML='<table cellpadding="1" cellspacing="1" border="1" style="text-align:center;">
<tr><td>




<<<<<<< HEAD
<img src="/assets/img/logo.jpg" border="0" height="100" width="300" align="center" /></td></tr>
<tr>
<td align="Left">
Customer Name
</td>
</tr>
<tr>
<td >
Qoutation For Forland C 10
=======
<img src="/assets/img/forLogo.jpg" border="0" height="100" width="300" align="center" /></td></tr>
<tr>
<td align="Left">
'.session()->get("customerName").' Date: '.session()->get("invoiceDate").'
</td>

</tr>
<tr>
<td >
Qoutation For '.session()->get("productName").'
>>>>>>> 8e78c63d9295d89bce2894d81901e5410e2d0e08
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
<<<<<<< HEAD
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
=======
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


<tr><td colspan="5">('.session()->get("amountInWords").'/Only).</td></tr>
>>>>>>> 8e78c63d9295d89bce2894d81901e5410e2d0e08

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
<<<<<<< HEAD
        <td width="70%" border="0" align="left">DAays after recipt of 100% advance payment</td>
=======
        <td width="70%" border="0" align="left">'.session()->get("DeliveryTime").' days after recipt of 100% advance payment</td>
>>>>>>> 8e78c63d9295d89bce2894d81901e5410e2d0e08
       
    </tr>
    
    <tr>
    <td width="30%" border="0">Validity</td>
<<<<<<< HEAD
    <td width="70%" align="left" border="0">This Qoutation is valid for days only</td>
=======
    <td width="70%" align="left" border="0">This Qoutation is valid for '.session()->get("ValidityPeriod").' days only</td>
>>>>>>> 8e78c63d9295d89bce2894d81901e5410e2d0e08

</tr>
<tr>

   
    <td width="30%" border="0">Payment</td>
<<<<<<< HEAD
    <td width="70%" align="left" border="0">100% Advance payment in shape of DD/PO in favor of </td>
=======
    <td width="70%" align="left" border="0">100% Advance payment in shape of DD/PO in favor of '.session()->get("PayTo").'</td>
>>>>>>> 8e78c63d9295d89bce2894d81901e5410e2d0e08
    
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
<<<<<<< HEAD
<td width="70%" align="left" border="0">Forland C 10(2021)</td>
=======
<td width="70%" align="left" border="0">'.session()->get("productName").'(2021)</td>
>>>>>>> 8e78c63d9295d89bce2894d81901e5410e2d0e08



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

<<<<<<< HEAD




=======
>>>>>>> 8e78c63d9295d89bce2894d81901e5410e2d0e08
';
 
    PDF::SetTitle('Qoutation');
    PDF::AddPage();
    PDF::writeHTML($newHTML, true, false, true, false, '');

    PDF::Output('qty.pdf');



}











}




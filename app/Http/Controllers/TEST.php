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
    public function getInfo()
    {
        
        $html = '<img style="height: 200px; width: 200px;" src="https://images.pexels.com/photos/1619792/pexels-photo-1619792.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
        
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
        ';
      // $html= $htmldata;
        
        PDF::SetTitle('Hello World');
        PDF::AddPage();
        PDF::writeHTML($html, true, false, true, false, '');


        PDF::Output('hello_world.pdf');
    }


    public function saleServiceInvoice()
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
            <td  align="left" bgcolor="#C0C0C0" >
               Description </td>
               <td align="center" bgcolor="#C0C0C0" >color</td>
               <td align="center"bgcolor="#C0C0C0" >Engine No</td>
               <td align="center" bgcolor="	#C0C0C0">Chassis No</td>
               <td align="center" bgcolor="	#C0C0C0">Amount</td>
         
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
      
        <th  width="40%" border="1" align="center""> Tootal PKR</th>
      
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
    
       
        <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Milat Tractors Limited,Lahore,Tel:0300-0600061  </h4></td>
        
        
       
      
    </tr>
    <tr>
    
       
        <td bgcolor="crimson" align="center" border="0"><h5> Email Adress: forlandmodernmotoprs@yahoo.com </h5></td>
        
        
       
      
    </tr>
    
</table>

    
    
    
    
    
    ';     // $html= $htmldata;
  
        
        PDF::SetTitle('Sale Invoice');
        PDF::AddPage();
        PDF::writeHTML($newHTML, true, false, true, false, '');

        PDF::Output('saleInvoice.pdf');
       
    }























}

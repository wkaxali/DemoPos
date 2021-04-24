<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use PDF;

class printMonthlySaleController extends Controller
{
    function  PrintMonthlySale(){
        $html = '
        
        
     <table border="0" cellpadding="2">
        <thead>
            <tr>
               
                 <th align="center"><br><h1>FORLAND MODREN MOTORS</h1></th>
               
            </tr>
        </thead>
        
        <tbody>
        <tr>
    <br>
    <td  align="center"><h1>
   Month:____________</h1>
    </td>

    </tr>
    <tr>
    <br>
    <td  border="2" align="center"><h1>
   SUMMRRY</h1>
    </td>

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
   
        <td width="70%" border="0" align="left" >HEADS</td>
        <td width="30%" border="0" align="center">AMOUNT</td>
       
    </tr>
    
    <tr>
    <td width="70%" border="0">SALE (AUTOS)</td>
    <td width="30%" align="center" border="0">25500</td>

</tr>
<tr>

   
    <td width="70%" border="0">SALE (PARTS)</td>
    <td width="30%" align="center" border="0">500000</td>
    
</tr>
<tr>
<td width="70%" border="0">Taxes</td>
<td width="30%" align="center" border="0">2000</td>



</tr>

<tr>
<td width="70%" border="0">Utility Bills</td>
<td width="30%" align="center" border="0">10000</td>



</tr>

<tr>
<td width="70%" border="0">Emploes</td>
<td width="30%" align="center" border="0">400000</td>



</tr>
<tr>
<td width="70%" border="0">Rent</td>
<td width="30%" align="center" border="0">30000</td>



</tr>

<tr>
<td width="70%" border="0">Transpotation</td>
<td width="30%" align="center" border="0">3000</td>



</tr>

<tr>
<td width="70%" border="0"></td>
<td width="30%" align="center" border="0"></td>



</tr>

<tr>
<td width="70%" border="0"></td>
<td width="30%" align="center" border="0"></td>



</tr>

<tr>
<td width="70%" border="0"></td>
<td width="30%" align="center" border="0"></td>



</tr>

<tr>
<td width="70%" border="0"></td>
<td width="30%" align="center" border="0"></td>



</tr>

 
 
</tbody>
</table>
    <br>
   
<br><br> <br>
<br>
<table border="0">

<tr>
<td width="70%" border="0">TOTAL</td>
<td width="30%" align="center" border="1"></td>

       
      
    </tr>
    <tr>
    
    <td width="70%" border="0">EXPENSE</td>
    <td width="30%" align="center" border="1"></td>
             
        
       
      
    </tr>
    
    
    <tr>
    
    <td width="70%" border="0">PROFIT/LOSS</td>
    <td width="30%" border="1"></td>
             
        
       
      
    </tr>
</table>

    
        
        
        ';
        
        
        
        
        
        
        
        
        
        PDF::SetTitle('Hello World');
        PDF::AddPage();
        PDF::writeHTML($html, true, false, true, false, '');

        PDF::Output('hello_world.pdf');


        return "Done";
    }
}

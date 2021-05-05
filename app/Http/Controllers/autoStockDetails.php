<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class autoStockDetails extends Controller
{
    function usama(){

       



    $newHTML='<table border="0">
    <thead>
    <tr>
    <th align="center"><h1>Stock Details</h1></th>
    
    
    </tr>
    <tr>
    <th align="center"><h1>(Autos)</h1></th>    
    
    </tr>
    </thead>
    
    <tbody>
    <tr><td align="center"></td></tr>
    
    <tr><td align="center"><h3>Date: July 2014</h3></td></tr>
    
    <tr><td align="center"></td></tr>
    
    
    </tbody>
    
    
    
    </table>
    
    
    <table border="1" cellpadding="5">
    <thead>
    <tr>
    <th width="30%" border="2" align="left" >Autos</th>
    <th width="30%" border="2" align="left" >Total Purchases</th>    
    <th width="20%" border="2" align="left" >Sold</th>    
    <th width="20%" border="2" align="left" >In Stock</th>    

    </tr>
    </thead>
     
    <tbody>
    <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>
        
    <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>  <tr>
    <td width="30%" border="0" align="left" >Forland</td>
    <td width="30%" border="0" align="left" > 55</td>    
    <td width="20%" border="0" align="left" >15</td>    
    <td width="20%" border="0" align="left" > 40</td>    

    </tr>
    
     
     
    </tbody>
    </table>
    <table border="1" cellpadding="9">
 <br>
 <br>
 <br>

    <thead>
    <tr>
    <th width="30%" border="2" align="left" >Total</th>
    <th width="30%" border="2" align="left" > 1500</th>    
    <th width="20%" border="2" align="left" >124</th>    
    <th width="20%" border="2" align="left" > 500</th>    

    </tr>
    </thead>    
    </table>
    
    
    ';
     
        PDF::SetTitle('Qoutation');
        PDF::AddPage();
        PDF::writeHTML($newHTML, true, false, true, false, '');
    
        PDF::Output('qty.pdf','I');
    
    
    
    }
    }

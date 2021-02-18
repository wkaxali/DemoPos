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
          <td width="45" align="center"><b>XXXX</b></td>
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
}

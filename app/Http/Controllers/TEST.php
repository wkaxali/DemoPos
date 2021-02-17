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

        PDF::Output('hello_world.pdf');
    }

    public function getInfo()
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

        PDF::Output('hello_world.pdf');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class deliverLetterPrintController extends Controller
{
    public static function deliveryLetterData($InvoiceNo){
        $vw = DB::table('vw_customersale_invoice')
        ->where('InvoiceNumber', '=', $InvoiceNo)
        ->first();

        $tbl = DB::table('tbl_invoice_assesories')
        ->where('InvoiceNumber', '=', $InvoiceNo)
        ->first();

        
        session(['productName' => $vw->ProductName]);
        session(['name' => $vw->CustomerName]);
        session(['fatherName' => $vw->FatherName]);
        session(['cnic' => $vw->CNIC]);
        session(['contact' => $vw->Contect]);
        session(['address' => $vw->Address]);
        session(['description' => $vw->description]);
        session(['engineNo' => $vw->EngineNumber]);
        session(['chassisNo' => $vw->ChasisNumber]);
        session(['refNo' => 'FMM-GDP-'.$InvoiceNo]);
        session(['date' => $vw->DateStamp]);
        
        if($tbl!=null){
            session(['toolKit' => $tbl->ToolKit]);
            session(['spareTyre' => $tbl->SpareTyre]);
            session(['originalKeys' => $tbl->OrignalKeys]);
            session(['warrentyBook' => $tbl->WarrantyBook]);
        }
        
    }
public function deliveryLetter($InvoiceNo){
    self::deliveryLetterData($InvoiceNo);
    $newHTML= '
    <table width="100%">
    <thead>
    <tr>
    <td>
    <h1 align="center">FORLAND MODERN MOTORS <br>DELIVERY LETTER</h1></td>
    
    </tr>
    
    
    </thead>
    </table>
    <br>
    <table>
    <thead>
    <tr><br>
    <td><b>Reference Number:</b></td>
    <td>'.session()->get("refNo").'</td>
    <td><b>Date:</b></td>
    <td>'.session()->get("date").'</td>
    </tr>
    <tr><br><br>
    <td><b><h3>Purchaser Detail:</h3></b></td>
    </tr>
    </thead>
    </table>
    
    
    
    <table border="1" width="100%" >
    <tr>
    <td width="20%" align="center" >Name</td>
    <td width="30%" align="center">'.session()->get("name").'</td>
    <td width="25%" align="center">Father Name:</td>
    <td width="25%" align="center">'.session()->get("fatherName").'</td>
    </tr>
    <tr>
    <td width="20%" align="center">CNIC/NTN</td>
    <td width="30%" align="center">'.session()->get("cnic").'</td>
    <td width="25%" align="center">Contact:</td>
    <td width="25%" align="center">'.session()->get("contact").'</td>
    </tr>
    <tr>
    <td width="20%" align="center">Address</td>
    <td width="80%" align="center">'.session()->get("address").'</td>
    </tr>
    
    
    </table>
    
    
    
    <h3>Vehicle Detail :</h3>
    <table border="1" width="100%" >
    <tr>
    <th align="center">SR#</th>
    <th align="center">Product Description</th>
    <th align="center">Engine Number</th>
    <th align="center">Chassis Number</th>
    <th align="center">Description</th>
    </tr>
    <tr>
    <td align="center">01</td>
    <td align="center">'.session()->get("productName").'</td>
    <td align="center">'.session()->get("engineNo").'</td>
    <td align="center">'.session()->get("chassisNo").'</td>
    <td align="center">'.session()->get("description").'</td>
    </tr>
    </table>
    
    <h3>Accessories Along With :</h3>
    <table border="1" width="100%">
    <tr>
    <th align="center">Tool Kit</th>
    <th align="center">Spare Tyre</th>
    <th align="center">Orignal Keys</th>
    <th align="center">Warrenty Book </th>
    
    </tr>
    <tr>
    <td align="center">'.session()->get("toolKit").'</td>
    <td align="center"> '.session()->get("spareTyre").'</td>
    <td align="center">'.session()->get("originalKeys").'</td>
    <td align="center">'.session()->get("warrentyBook").'</td>
    </tr>
    </table>
    <h3>Note:</h3>
    
    
    <table width="100%">
    
    
    <ul>
    <li>To my entire satisfaction, I have taken possession of the above mentioned vehicle, I do hereby declared that i shall be fully responsible for all accidents , tokens , machine defects and the legal proceedings regarding this vehicle from now onwards</li><br>
    
    <li >I also hereby undertake to get the ownership of this vehicle transferred in my name from the concerned Registration Authority within the stipultated period of 15 days from today.</li>
    </ul>
    </table>
    <table width="100%">
    <br>
    <br>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <tbody>
    
    <tr>
    <td width="60%">____________________</td>
    <td width="40%" align="right">____________________</td>
    </tr>
    
    <tr>
    
    <td width="60%">Authorised Signature</td>
    <td width="40%" align="right">Purchaser Signature</td>
    </tr>
    </tbody>
    </table>
    
    <p align="center">
    8-KM, Sheikhupura Road, Opposite Millat Tractors Limited , Lahore. Tel: 0300-0600061 Email Address: forlandmodernmotors@yahoo.com
    </p>
    ';
    
    PDF::SetTitle('Delivery Letter');
    PDF::AddPage();
    PDF::writeHTML($newHTML, true, false, true, false, '');
    
    PDF::Output('deliveryLetter.pdf');
    
    
    
    
    
    
    }
    
    }
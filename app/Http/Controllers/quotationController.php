<?php

use NumberToWords\NumberToWords;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use NumberToWords\NumberToWords;
//https://github.com/kwn/number-to-words

use DB;
use PDF;

class quotationController extends Controller
{

        public function createQuotation(Request $request,$data){
     
            $Array=json_decode($data);
            $customerName = $Array[0];
            $fatherName = $Array[1];
            $CNIC = $Array[2];
            $city = $Array[3];
            $address = $Array[4];
            $contact = $Array[5];
            $description = $Array[6];
            $color = $Array[7];
            $unitPrice = $Array[8];
            $quantity = $Array[9];
            $totalPrice = $Array[10];
            $model = $Array[11];
            $deliverTime = $Array[12];
            $qoutationValidityTime = $Array[13];
            $payTo = $Array[14];
            $date = Carbon::now()->toDateString();

            $numberToWords = new NumberToWords();
            $numberTransformer = $numberToWords->getNumberTransformer('en');
            $a= $numberTransformer->toWords($totalPrice);
            //there will query that will store information to database
            $b=ucwords($a);
            session(['amountInWords' => $b]);
            session(['customerName' => $customerName]);
            session(['fatherName' => $fatherName]);
            session(['CNIC' => $CNIC]);
            session(['address' => $address]);
            session(['price' =>  number_format($unitPrice)]);
            session(['contact' => $contact]);
            session(['total' => number_format($totalPrice)]);
            session(['invoiceDate' => $date]);
            session(['description' => $description]);
            session(['color' => $color]);
            session(['productName' => $model]);
            session(['quantity' => $quantity]);
            session(['city' => $city]);

            session(['DeliveryTime' => $deliverTime]);
            session(['ValidityPeriod' => $qoutationValidityTime]);
            session(['PayTo' => $payTo]);

            DB::table('tbl_quotations')->insertGetId([
                'CustomerName'=>$customerName,
                'FatherName'=>$fatherName,
                'CNIC'=>$CNIC,
                'City'=>$city,
                'Contact'=>$contact,
                'Address'=>$address,
                'Discription'=>$description,
                'Color'=>$color,
                'UnitPrice'=>$unitPrice,
                'Quantity'=>$quantity,
                'TotalPrice'=>$totalPrice,
                'Model'=>$model,
                'Date'=>$date,
                'DeliveryTime'=>$deliverTime,
                'ValidityPeriod'=>$qoutationValidityTime,
                'PayTo'=>$payTo
    

                ]);

            DB::table('customeinformation')->insertGetId([
                'CustomerName'=>$customerName,
                'FatherName'=>$fatherName,
                'Contect'=>$contact,
                'Balance'=>0,
                'Address'=>$address,
                'CNIC'=>$CNIC,
                ]);

            return 'for '.$description.' ';
        
            }


        public function  viewQuotations(){
            $data=DB:: select('select * from tbl_quotations');
            return $data;
            }


        public function  getQuotation($QID){

            $data = DB::table('tbl_quotations')
            ->where('QID', '=', $QID)
                ->first();

            $numberToWords = new NumberToWords();
            $numberTransformer = $numberToWords->getNumberTransformer('en');
            $a= $numberTransformer->toWords($data->TotalPrice);
            
            session(['amountInWords' => ucwords($a)]);
            session(['customerName' => $data->CustomerName]);
            session(['fatherName' => $data->FatherName]);
            session(['CNIC' => $data->CNIC]);
            session(['address' => $data->Address]);
            session(['price' => number_format($data->UnitPrice)]);
            session(['contact' => $data->Contact]);
            session(['total' => number_format($data->TotalPrice)]);
            session(['invoiceDate' => $data->Date]);
            session(['description' => $data->Discription]);
            session(['color' => $data->Color]);
            session(['' => $data->Model]);
            session(['quantity' => $data->Quantity]);
            session(['city' => $data->City]);
            session(['DeliveryTime' => $data->DeliveryTime]);
            session(['ValidityPeriod' => $data->ValidityPeriod]);
            session(['PayTo' => $data->PayTo]);

            
            }

            public function qoutationToPDF()
            {
                
                $html = '<table cellpadding="1" cellspacing="1" border="1" style="text-align:center;">
                <tr><td>
                
                
                
                
                <img src="/assets/img/logo.jpg" border="0" height="100" width="300" align="center" /></td></tr>
                <tr>
                <td align="Left">
                '.session()->get("customerName").'
                </td>
                </tr>

                <tr>
                <td align="right">Date:
                '.session()->get("Date").'
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
                <tr><td>'.session()->get("description").'</td>
                <td rowspan="2">'.session()->get("color").'</td>
                <td >Rs</td>
                <td rowspan="2" width="40">'.session()->get("quantity").'</td>
                <td width="173">Rs</td></tr>
                <tr><td >'.session()->get("city").'</td>
                
                <td>'.session()->get("price").'</td>
                <td width="173">'.session()->get("total").'</td>
                </tr>
                
                
                <tr><td colspan="5">'.session()->get("amountInWords").' </td></tr>
                
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
                        <td width="70%" border="0" align="left">'.session()->get("DeliveryTime").'Days after recipt of 100% advance payment</td>
                       
                    </tr>
                    
                    <tr>
                    <td width="30%" border="0">Validity</td>
                    <td width="70%" align="left" border="0">This Qoutation is valid for '.session()->get("ValidityPeriod").'days only</td>
                
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
                <td width="70%" align="left" border="0">'.session()->get("Model").'</td>
                
                
                
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
               
                PDF::SetTitle('Hello World');
                PDF::AddPage();
                PDF::writeHTML($html, true, false, true, false, '');
        
                PDF::Output('hello_world.pdf');
            }

            
            
            
        
}


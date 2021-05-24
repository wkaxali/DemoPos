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
            $customerNameRaw = $Array[0];
            $customerName = str_replace("|","/",$customerNameRaw);
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
            $dateRaw = Carbon::now()->toDateString();
            $date =  Carbon::createFromFormat('Y-m-d', $dateRaw)->format('d-F-Y');
            
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

        // public function myQuotation(){
        //         $record = DB:: select ('select * from');
        //         return $record;
        //     }
 
        public function  getQuotation($QID){

            $data = DB::table('tbl_quotations')
            ->where('QID', '=', $QID)
                ->first();

            $numberToWords = new NumberToWords();
            $numberTransformer = $numberToWords->getNumberTransformer('en');
            $a= $numberTransformer->toWords($data->TotalPrice);
            
            session(['amountInWords' => ucwords($a)]);
            session(['customerName' => $data->CustomerName]);
            session(['refNo' => 'FMM-Q-'.$data->QID]);
            session(['fatherName' => $data->FatherName]);
            session(['CNIC' => $data->CNIC]);
            session(['address' => $data->Address]);
            session(['price' => number_format($data->UnitPrice)]);
            session(['contact' => $data->Contact]);
            session(['total' => number_format($data->TotalPrice)]);
            session(['invoiceDate' => $data->Date]);
            session(['description' => $data->Discription]);
            session(['color' => $data->Color]);
            session(['productName' => $data->Model]);
            session(['quantity' => $data->Quantity]);
            session(['city' => $data->City]);
            session(['DeliveryTime' => $data->DeliveryTime]);
            session(['ValidityPeriod' => $data->ValidityPeriod]);
            session(['PayTo' => $data->PayTo]);
             self::qoutationToPDF();

            
            }

            public function qoutationToPDF()
{

$html = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
<tr><td>




<img src="/assets/img/logo.jpg" border="0" height="100" width="300" align="center" /></td>
</tr>
<tr>
<td align="Left" width="180" >
'.session()->get("customerName").'
</td>
<td align="right" width="0" >Date:
'.session()->get("invoiceDate").'
</td>
</tr>
<tr>
<td align="Left" widht="200">
'.session()->get("address").'
</td>
<td align="right">

Ref No: '.session()->get("refNo").'<br>

NTN:82588676-6 <br>

STRN:3277876204764 <br>

</td>
</tr>





<tr>
<td width="150" ><h3>

</h3></td>
<td width="290" ><h3>
Quotation For '.session()->get("productName").'
</h3></td>
<td width="150" ><h3>

</h3></td>
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


<tr><td colspan="5">'.session()->get("amountInWords").' Only</td></tr>

</tbody>
</table>



<table border="0">

<tr ><td colspan="5" align ="left" ><h3>Terms & Conditions<br>

</h3> </td></tr>
</table>



<table>

</table>



<table border="1" cellpadding="3">
<tbody>
<tr>
<td width="5%" border="0">1</td>
<td width="30%" border="0" align="left" >Delivery Time</td>
<td width="65%" border="0" align="left">'.session()->get("DeliveryTime").' days after receipt of 100% advance payment.</td>

</tr>

<tr>
<td width="5%" border="0">2</td>
<td width="30%" border="0">Validity</td>
<td width="65%" align="left" border="0">This Qoutation is valid for '.session()->get("ValidityPeriod").' days only.</td>

</tr>
<tr>

<td width="5%" border="0">3</td>
<td width="30%" border="0">Payment</td>
<td width="65%" align="left" border="0">100% Advance payment in shape of DD/PO in favor of <b><u>'.session()->get("PayTo").'</u></b>.</td>

</tr>
<tr>
<td width="5%" border="0">4</td>
<td width="30%" border="0">Duty/Taxes #</td>
<td width="65%" align="left" border="0">Any change in Govt.fiscal Policies,RGST/VAT and tariff structures will be on customer accounts.</td>



</tr>

<tr>
<td width="5%" border="0">5</td>
<td width="30%" border="0">Force Majeure</td>
<td width="65%" align="left" border="0">Manufacture will will not be responsible for any delay in delivery due to force majeure circumstances.</td>



</tr>

<tr>
<td width="5%" border="0">6</td>
<td width="30%" border="0">Warranty</td>
<td width="65%" align="left" border="0"> Manufacturer\'s standard warrenty of 1,20,000 kms or 02 years whichever is occurs first.</td>



</tr>


</tbody>
</table>





<table border="0">
<thead>
<br>
<br>








<br>
<br>
<br> <br>

<br>


<br>
<tr>
<td width="60%" border="0"></td>
<td width="40%" align="center" border="0">_______________________</td>



</tr>
<tr>
<br>

<td width="60%" border="0"></td>
<td width="40%" align="center" border="0">Sign and stamp</td>



</tr>




</tbody>
</table>


<table border="0">
<br>
<br>



<tr>


<td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>




</tr>

<tr>


<td bgcolor="crimson" align="center" border="0"><h5> Email: forlandmodernmotors@yahoo.com </h5></td>




</tr>

</table>


';

PDF::SetTitle('Quotation');
PDF::AddPage();
PDF::writeHTML($html, true, false, true, false, '');

PDF::Output('Quotation-'.session()->get("refNo").'.pdf');
}


            
            
            
        
}


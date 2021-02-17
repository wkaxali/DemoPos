<?php

use NumberToWords\NumberToWords;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use NumberToWords\NumberToWords;
//https://github.com/kwn/number-to-words

use DB;

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
            
            session(['amountInWords' => $a]);
            session(['customerName' => $data->CustomerName]);
            session(['fatherName' => $data->FatherName]);
            session(['CNIC' => $data->CNIC]);
            session(['address' => $data->Address]);
            session(['price' => $data->UnitPrice]);
            session(['contact' => $data->Contact]);
            session(['total' => $data->TotalPrice]);
            session(['invoiceDate' => $data->Date]);
            session(['description' => $data->Discription]);
            session(['color' => $data->Color]);
            session(['productName' => $data->Model]);
            session(['quantity' => $data->Quantity]);
            session(['city' => $data->City]);
            self::getInfo();
            return "wlgdhu";

            }

            public function getInfo()
            {
                $html = '';
              // $html= $htmldata;
                
                PDF::SetTitle('Hello World');
                PDF::AddPage();
                PDF::writeHTML($html, true, false, true, false, '');
        
                PDF::Output('hello_world.pdf');
            }

            
            
            
        
}


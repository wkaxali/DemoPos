<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CustomerController extends Controller
{
    public function check(Request $request, $CO){

        $obj=json_decode($CO);
        $name=$obj[0];
        $pass=$obj[1];
        $CusContact=$obj[2];
        $cusprofesn=$obj[3];
        $CusBalnc=$obj[4];
        $cusAddr=$obj[5];
        $cuscomnt=$obj[6];
       self:: insertintblcustomeinformation($name,$cusAddr,$CusContact,null,$CusBalnc,$cuscomnt,null,$cusprofesn);

        return "Getting from controller".$obj[0];
    }
    public function insertintblcustomeinformation(
        
        $CCustomerName,
        $CAddress,
        $CContect,
        $CCNIC,
        $CBalance,
        $CComments,
        $CCustomerCatogery,
        $COcupation
        ){
        $result= DB::insert('insert into customeinformation (CustomerName,Address,
        Contect,CNIC,Balance,Comments,CustomerCatogery,Ocupation)
        value(?,?,?,?,?,?,?,?)',
        [$CCustomerName, $CAddress, $CContect,
        $CCNIC,$CBalance,$CComments, $CCustomerCatogery, $COcupation]);
        
        
        if ($result==1){

        print("escccc");



        }
    }

    public static function UpdateCustomerBalance($CID,$newBalance){


        DB::table('customeinformation')
            ->where('CustomerID', $CID)
            ->update(['Balance' =>$newBalance
            
            
            
            
            ]);
    }
    public static function getCustomerBalance($CID){

       
        $re = DB::table('customeinformation')
            ->where('CustomerID', '=', $CID)
             ->first()->Balance;

             return $re;




    }


    public function getAllCustomers(){

        $results=DB::select('select * from customeinformation');
        //    $sOp=" <select style=\"height: 45px !important; width: 298px !important;\" class=\"form-control selectpicker\"
        //                         data-live-search=\"true\" tabindex=\"null\" onchange=\"getRecipes()\" id=\"SelectMenu\">";
                               // $sOp='<select data-live-search="true" class="form-control ">';
        $sOp='<option value=" "></option>';
                                
                                
                            
                            
            $tableOfHtml="";
                foreach ($results as $ro){
        
        
                   $tableOfHtml=$tableOfHtml." <option value=".$ro->CustomerID.">".$ro->CustomerName."</option>";
        
        
                }
            
              $endSelect="</select>";
              $allHtml=$sOp . $tableOfHtml . $endSelect;
              return $allHtml;   






    }
    public function getCustomerDetail($CID){
        $results=DB::select('select * from customeinformation where CustomerID= '.$CID);
       // mysql_insert_id()
        return $results;

    }

    public function addCustomer(Request $request, $CO){
        
        $obj=json_decode($CO);
        $customerName=$obj[0];
        $fatherName=$obj[1];
        $contact=$obj[2];
        $profession=$obj[3];
        $address=$obj[4];
        $email=$obj[5];
        $cnic=$obj[6];
        
        
        $CID=DB::table('customeinformation')->insertGetId([
            'CustomerName'=>$customerName,
            'FatherName'=>$fatherName,
            'Address'=>$address,
            'Contect'=>$contact,
            'CNIC'=>$cnic,
            'EmailID'=>$email,
            'Ocupation'=>$profession,
            
            
            
            
            
            ]);
        return $CID." ID customer added";
    }
    public function getInvoiceCustomer($InvoiceNo){
        $results=DB::select('select * from vw_customersale_invoice where InvoiceNumber= '.$InvoiceNo);
        $product = collect([1,2,3,4]);
        $re = DB::table('vw_customersale_invoice')
        ->where('InvoiceNumber', '=', $InvoiceNo);
        // ->first();
        // session(['invoiceNo' => $InvoiceNo]);
        // session(['customerID' => $re->CustomerID]);
        // session(['itemNo' => $re->ProductSerial]);
        // session(['quantity' => $re->Quantity]);
        // session(['unitPrice' => $re->PerUnitSalePrice]);
        // session(['productName' => $re->ProductName]);
        // session(['price' => $re->PerUnitSalePrice]);
        // session(['contact' => $re->Contect]);
        // session(['customerName' => $re->CustomerName]);
        // session(['CNIC' => $re->CNIC]);
        // session(['address' => $re->Address]);
        // session(['engineNo' => $re->EngineNumber]);
        // session(['chassisNo' => $re->ChasisNumber]);
        // session(['color' => $re->color]);
        // session(['fatherName' => $re->FatherName]);
        // session(['total' => $re->AmountPaid]);
        // session(['referenceNumber' => 'FMM-GDP-'.$InvoiceNo]);
        // session(['amountPaid' => $re->AmountPaid]);
        // session(['description' => $re->description]);
        
        // session(['balance' => $re->Balance]);
        // session(['totalCost' => $re->TotalCost]);
        // session(['tax' => $re->VAT]);
        // session(['endTotal' => $re->NetTotal]);
        
        return $results;

    }

    public function getCustomers(){
        $results=DB::select('select * from customeinformation');
        return $results;
    }


    public static function editCustomer(Request $request, $CO){
        $ata=json_decode($CO);
        $CID = $ata[0];
        $customerName = $ata[1];
        $contact = $ata[2];
        $address = $ata[3];
        $CNIC = $ata[4];
        $balance = $ata[5];

        $re = DB::table('customeinformation')
        ->where('CustomerID', $CID)
        ->update([
          'CustomerName'=>$customerName,
          'Contect'=>$contact,
          'Address'=>$address,
          'CNIC'=>$CNIC,
          'Balance'=>$balance,
          ]);

          return $CID;
        }
        public function getCustomersusa(){
            $results=DB::select('select * from tbl_taskcategory');
            return $results;
        }
    
    
        public static function editCustomerusa(Request $request, $CO){
            $ata=json_decode($CO);
            $CID = $ata[0];
            $Category = $ata[1];
          
    
            $re = DB::table('tbl_taskcategory')
            ->where('CategoryID', $CID)
            ->update([
            
              'Category'=>$Category,
            
         
              ]);
    
              return $CID;
            }
    
}


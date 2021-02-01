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
        $balance=$obj[4];
        $address=$obj[5];
        $comments=$obj[6];
        $cnic=$obj[7];
        $category=$obj[8];
        $CID=DB::table('customeinformation')->insertGetId([
            'CustomerName'=>$customerName,
            'FatherName'=>$fatherName,
            'Contect'=>$contact,
            'Ocupation'=>$profession,
            'Balance'=>$balance,
            'Address'=>$address,
            'Comments'=>$comments,
            'CNIC'=>$cnic,
            'CustomerCatogery'=>$category,
            
            ]);
        return $CID." ID customer added";
    }

    
}


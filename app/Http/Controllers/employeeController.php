<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class employeeController extends Controller
{
    public static function addNewEmployee(Request $request, $CO){
        $ata=json_decode($CO);
        
        $firstName =$ata[0];
        $lastName =$ata[1];
        $CNIC =$ata[2];
        $contact =$ata[3];
        $address =$ata[4];
        $email =$ata[5];
        $designation =$ata[6];
        $date =$ata[7];
        $data=DB::table('tblemployees')->insertGetId([
            'FirstName'=>$firstName,
            'LastName'=>$lastName,
            'CNIC'=>$CNIC,
            'ContactNo'=>$contact,
            'HomeAddress'=>$address,
            'EmailID'=>$email,
            'DesignationID'=>$designation,
            'JoiningDate'=>$date
            ]);  

        return "New Employee Added at ".$data;
    }

}
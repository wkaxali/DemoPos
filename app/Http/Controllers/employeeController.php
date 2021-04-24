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
            'Designation'=>$designation,
            'JoiningDate'=>$date
            ]);  

        return "New Employee Added at ".$data;
    }

    function getAllEmployees(){
        $data=DB:: select('select * from tblemployees');
        return $data;
    }

    public static function editEmployee(Request $request, $CO){
        $ata=json_decode($CO);
        $EID = $ata[0];
        $firstName = $ata[1];
        $lastName = $ata[2];
        $CNIC = $ata[3];
        $contact = $ata[4];
        $address = $ata[5];
        $email = $ata[6];
        $designation = $ata[7];
        $date = $ata[8];

        $re = DB::table('tblemployees')
        ->where('EID', $EID)
        ->update([
          'FirstName'=>$firstName,
          'LastName'=>$lastName,
          'CNIC'=>$CNIC,
          'ContactNo'=>$contact,
          'HomeAddress'=>$address,
          'EmailID'=>$email,
          'DesignationID'=>$designation,
          'JoiningDate'=>$date
          ]);

          return $EID;
        }
        
}
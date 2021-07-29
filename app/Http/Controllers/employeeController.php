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

        public static function getEmployeeBalance($EID){
            $re = DB::table('tblemployees')
            ->where('EID', '=', $EID)
            ->first()->Balance;
            return $re;
        }

        public static function updateEmployeeBalance($EID, $Amount){
            $re = DB::table('tblemployees')
            ->where('EID', '=', $EID)
            ->update([
                'Balance'=>$Amount,
                ]);
            return $re;
        }

        public static function deleteEmployeePayments($TID){

            $transaction = DB::table('tbltransactionflow')
                ->where('TransactionID', '=', $TID);
                 
    
            $amount = $transaction->first()->Amount;
            $AID = $transaction->first()->PaidVia;
    
            $ledgerID=globalVarriablesController::selfLedgerID();
            $oldSelfBalance= LedgerPartiesController::getPartyBalance($ledgerID);
            $newSelfBalance = floatval($oldSelfBalance) + floatval($amount);
    
            $oldAccBalance=accountsController::getAccountBalance($AID);
            $newAccountBalance = floatval($oldAccBalance) + floatval($amount);
            $EID = $transaction->first()->EmpID;
            
            $oldEmpBalance= self::getEmployeeBalance($EID);
            $newEmpBalance = floatval($oldEmpBalance) + floatval($amount);
            self::updateEmployeeBalance($EID, $newEmpBalance);
            LedgerPartiesController::UpdatePartiesBalance($ledgerID, $newSelfBalance);
            accountsController::UpdateNewBalance($AID,$newAccountBalance);
            $deleteTransaction = DB::delete("delete from tbltransactionflow where TransactionID=".$TID);
    
            return "Pay number $TID is deleted";
        }
        
}
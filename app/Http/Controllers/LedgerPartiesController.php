<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LedgerPartiesController extends Controller
{
    public static function UpdatePartiesBalance($LID,$amount){

        // LID int(11) AI PK 
        // PartyName varchar(45) 
        // Category varchar(45) 
        // Balance float 
        // ContantNo varchar(45) 
        // Address varchar(100) 
        // Status varchar(45)
        // $OldBalance=DB::select('select Balance from tblledgerparties where LID='.$LID);
        // $currentBalance=floatval ($OldBalance)+floatval ($amount);
        DB::table('tblledgerparties')
        ->where('LID', $LID)
        ->update(['Balance' =>$amount
       
        ]);
        return 'update New Balance';


    }
    public static function getPartyBalance($LID){

       
        $re = DB::table('tblledgerparties')
            ->where('LID', '=', $LID)
             ->first()->Balance;

             return $re;




    }
    public static function getAllSuplierParties(){

        $results=DB::select('select * from  tblledgerparties where Category="Supplier"' );
        
        $sOp='<option value=" "></option>';
                                
                                
                            
                            
        $tableOfHtml="";
            foreach ($results as $ro){
    
    
               $tableOfHtml=$tableOfHtml." <option value=".$ro->LID.">".$ro->PartyName."</option>";
    
    
            }
        
          $endSelect="</select>";
          $allHtml=$sOp . $tableOfHtml . $endSelect;
          return $allHtml;   

    }

    function getParty(){
        $data=DB:: select('select * from tblledgerparties');
        return $data;
    }

    public static function editParty(Request $request, $CO){
        $ata=json_decode($CO);
        $LID = $ata[0];
        $partyName = $ata[1];
        $category = $ata[2];
        $balnce = $ata[3];
        $contact = $ata[4];
        $address = $ata[5];
        $status = $ata[6];
        $OurProfitRatio = $ata[7];
        $InvestorProfitRatio = $ata[8];
        $InitialInvestment = $ata[9];


        $re = DB::table('tblledgerparties')
        ->where('LID', $LID)
        ->update([
          'PartyName'=>$partyName,
          'Category'=>$category,
          'Balance'=>$balnce,
          'ContantNo'=>$contact,
          'Address'=>$address,
          'Status'=>$status,
          'OurProfitRatio'=>$OurProfitRatio,
          'InvestorProfitRatio'=>$InvestorProfitRatio,
          'InitialInvestment'=>$InitialInvestment
          ]);

          return $LID;
        }
        

    public function getPartyDetail($SID){
        $results=DB::select('select * from tblledgerparties where LID= '.$SID);
       // mysql_insert_id()
        return $results;

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

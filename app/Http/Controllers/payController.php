<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use DB;

class payController extends Controller
{

  public static function insertPayment(Request $request, $CO, $PT){

    $ata=json_decode($CO);
      
        foreach ($ata as $obj){
        $date=$obj[0];
        $LID=globalVarriablesController::selfLedgerID();
        $amount=$obj[1];
        $expenseName=$obj[2];
        $paidTo=$obj[3];
        $paidVia=$obj[4];
        $remarks=$obj[5];

        $id=DB::table('tbltransactionflow')->insertGetId([
        'DateStamp'=>$date,
        'Amount'=>$amount,
        'PaidVia'=>$paidVia,
        'TransactionType'=>"Debit",
        
        ]);  
        
        if($PT=="Party"){
          $re = DB::table('tbltransactionflow')
            ->where('TransactionID', $id)
            ->update([
              'PaidTo'=>$paidTo,
              'TransactionCatogery'=>"Party Payment"
          ]);
        }
        if($PT=="Employee"){
          $re = DB::table('tbltransactionflow')
            ->where('TransactionID', $id)
            ->update([
              'EmpID'=>$paidTo,
              'TransactionCatogery'=>"Salary Payment"
          ]);
        }

    $oldSelfBalance = LedgerPartiesController::getPartyBalance($LID);
    $newBalance = $oldSelfBalance - $amount;
    LedgerPartiesController::UpdatePartiesBalance($LID, $newBalance);
    if($PT=="Party"){
      $balanceForParty=LedgerPartiesController::getPartyBalance($paidTo);
      $newBalanceOfParty=$balanceForParty-$amount;
      LedgerPartiesController::UpdatePartiesBalance($paidTo, $newBalanceOfParty);
    }
    $oldAccountBalance = accountsController::getAccountBalance($paidVia);
    $newAccountBalance = $oldAccountBalance - $amount;
    accountsController::UpdateNewBalance($paidVia, $newAccountBalance);
    
    }
    return $id;
}

public static function getEmployeeName(){
    $data=DB:: select('select * from tblemployees');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>('.$d->EID.') '.$d->FirstName.'</option>';
      
    }
    return $option;
  }


  public static function getEmployeeCNIC(){
    $data=DB:: select('select * from tblemployees');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->CNIC.'</option>';
      
    }
    return $option;
  }

  public static function getEmployeeID(){
    $data=DB:: select('select * from tblemployees');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->EID.'</option>';
      
    }
    return $option;
  }

  public static function getEmployeeContact(){
    $data=DB:: select('select * from tblemployees');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->ContactNo.'</option>';
      
    }
    return $option;
  }

  public static function getEmpbyID(Request $request, $ID){
   
   // return $ID;
    $data=DB:: select('select * from vw_employeealowncspay where EID ='.$ID );

    
    return $data;
  }

  public static function updatePay($data){
    
    $obj=json_decode($data);
    $basicPay=$obj[0];
    $allowedHolidays=$obj[1];
    $comission=$obj[2];
    $saleTarget=$obj[3];
    $allownces=$obj[4];
    $total=$obj[5];
    $workingHours=$obj[6];
    $EID=$obj[7];
    $perDayPay=floatval($total)/floatval(30);
    $perHourPay=$perDayPay/floatval($workingHours);
  

    DB::table('tblemployeepay')
              ->where('EID', $EID)
              ->update([
                'BasicPay' =>$basicPay,
                'AllowedHolidays' =>$allowedHolidays,
                'CommisionOnSale' =>$comission,
                'SaleTarget' =>$saleTarget,
                'Alownces' =>$allownces,
                'TotalPay' =>$total,
                'WorkingHours' =>$workingHours,
                'PerHourPay'=>$perHourPay,
                'PayPerDay'=>$perDayPay
              ]);

  return "Pay Updated";
  }
  

  public static function addEmpPay($data){
    
    $obj=json_decode($data);
    $eid=$obj[0];
    $basicPay=$obj[1];
    $allowedHolidays=$obj[2];
    $saleTarget=$obj[3];
    $workingHours=$obj[4];

    $empCheck = DB::table('tblemployeepay')
            ->where('EID', '=', $eid);
            
    
    if($empCheck->exists()){ 
      return "Pay Already Assigned to $eid";
    }else{
      $id=DB::table('tblemployeepay')->insertGetId([
        
        'BasicPay' =>$basicPay,
        'AllowedHolidays' =>$allowedHolidays,
        'SaleTarget' =>$saleTarget,
        'WorkingHours' =>$workingHours,
        'EID' =>$eid
        
      ]);

      return "employee $eid Pay is Assigned at $id";
    }
  }

  public static function getCalculatedPay($EMPID)
  {
    
  }



  public static function getPayRecivingHistory($EID)
  {

    $data=DB:: select('select * from tbltransactionflow where EmpID='.$EID);
        return $data;
  }
  public static function getTotalPay($empID){

    $totatlPay = DB::table('vw_employeealowncspay')
              ->where('EID', $empID)
              ->first()->TotalPay;
    return $totatlPay;

  }


   public function getPayment(){
    $results=DB::select('select * from tbltransactionflow where TransactionCatogery="Payment"');
   // mysql_insert_id()
    return $results;

}


}

  
  
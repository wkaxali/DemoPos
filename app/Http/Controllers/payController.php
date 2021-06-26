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
        //$date =  Carbon::createFromFormat('Y-m-d', $dateRaw)->format('d-F-Y');
        
        $LID=globalVarriablesController::selfLedgerID();
        $amount=$obj[1];
        $advanceCat=$obj[2];
        $expenseName=$obj[3];
        $paidTo=$obj[4];
        $paidVia=$obj[5];
        $remarks=$obj[6];

        $TID=DB::table('tbltransactionflow')->insertGetId([
          'DateStamp'=>$date,
          'Amount'=>$amount,
          'PaidVia'=>$paidVia,
          'TransactionType'=>"Debit",
          'Remarks'=>$remarks,
          'LID'=> $LID,
        ]);

        $bal=employeeController::getEmployeeBalance($paidTo);
        $newbal= floatval($bal)-floatval($amount);



        $id=DB::table('tbl_employee_payments_flow')->insertGetId([
          'EmployeeID'=> $paidTo,
          'AmountPaid'=>$amount,       
          'Date'=>$date,
          'AdvanceCategory'=>$advanceCat,
          'EmployeeBalanceBefore'=>$bal,
          'EmployeeBalanceAfter'=>$bal,
        ]);

        if($advanceCat=="Deductable"){

          $eb = DB::table('tblemployees')
          ->where('EID', $paidTo)
          ->update([
            'Balance'=>$newbal
          ]);

          $eb = DB::table('tbl_employee_payments_flow')
          ->where('paymentID', $id)
          ->update([
            'EmployeeBalanceAfter'=>$newbal
          ]);
        }

        if($PT=="Party"){
          $re = DB::table('tbltransactionflow')
            ->where('TransactionID', $TID)
            ->update([
              'PaidTo'=>$paidTo,
              'TransactionCatogery'=>'Party Payment',
          ]);
        }
        
        if($PT=="Employee"){
          $re = DB::table('tbltransactionflow')
            ->where('TransactionID', $TID)
            ->update([
              'EmpID'=>$paidTo,
              'TransactionCatogery'=>'Salary Payment'
              
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
        <option value= '.$d->EID.'> '.$d->FirstName.' '.$d->LastName.'</option>';
      
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
    $reportingTime=$obj[8];
    $perDayPay=floatval($total)/floatval(30);
    $perHourPay=$perDayPay/floatval($workingHours);
  

    DB::table('tblemployeepay')
              ->where('EID', $EID)
              ->update([
                'BasicPay' =>$basicPay,
                'AllowedHolidays' =>$allowedHolidays,
                'commission' =>$comission,
                'SaleTarget' =>$saleTarget,
                'Alownces' =>$allownces,
                'TotalPay' =>$total,
                'WorkingHours' =>$workingHours,
                'PerHourPay'=>$perHourPay,
                'PayPerDay'=>$perDayPay,
                'ReportingTime'=>$reportingTime
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
    $commission=$obj[5];
    $reportingTime=$obj[6];
    $perDayPay=floatval($basicPay)/floatval(30);
    $perHourPay=$perDayPay/floatval($workingHours);
    $empCheck = DB::table('tblemployeepay')
            ->where('EID', '=', $eid);
            
    
    if($empCheck->exists()){ 
      return "Pay Already Assigned to $eid";
    }else{
      $id=DB::table('tblemployeepay')->insertGetId([
        
        'BasicPay' =>$basicPay,
        'TotalPay' =>$basicPay,
        'Alownces' =>0,
        'AllowedHolidays' =>$allowedHolidays,
        'SaleTarget' =>$saleTarget,
        'WorkingHours' =>$workingHours,
        'EID' =>$eid,
        'commission' =>$commission,
        'PerHourPay'=>$perHourPay,
        'PayPerDay'=>$perDayPay,
        'ReportingTime'=>$reportingTime
        
        
      ]);

      return "employee $eid Pay is Assigned at ID:  $id";
    }
  }

  public static function getCalculatedPay($EMPID)
  {
    
  }

public static function getEmpPayments (){
  $data = DB:: select ('select * from vw_employee_payment_history');
  return $data;
}

  public static function getPayRecivingHistory($EID)
  {

    $data=DB:: select('select * from tbltransactionflow where EmpID='.$EID);
        return $data;
  }
  public static function getTotalPay($empID){

    $totatlPay = DB::table('tblemployees')
              ->where('EID', $empID)
              ->first()->Balance;
    return $totatlPay;

  }


   public function getPartyPayment(){
    $results=DB::select('select * from vw_party_transactions');
   // mysql_insert_id()
    return $results;

} 
public static function getEmployeePayment(){
  $results=DB::select('select * from vw_employee_transactions');
 // mysql_insert_id()
  return $results;

} 

public static function getEmpPay($eid){
  $pay=DB::select('select * from tblemployeepay where EID ='.$eid);
  return $pay;
}

public static function getCommissionData($year, $month, $EID){
  $M=$month+1;
  $pay=DB::select('select * from vw_employee_sale_commission where month(date) ='.$M.' AND EID ='.$EID.' AND year(date) ='.$year);
  $attendanceData=DB::select('select * from tbl_employeeattendance where month(date) ='.$M.' AND EID ='.$EID.' AND year(date) ='.$year);
  $dailyPay = DB::table('tblemployeepay')
  ->where('EID', $EID)
  ->first()->PayPerDay;

  
  $commission=0;
  $No=0;
  $ab=0;
  foreach($attendanceData as $d){
    $ab=$ab+1;
  }
  $absents=$ab;

  foreach($pay as $d){
    $No=$No+1;
    $commission=$commission+$d->totalCommission;
  }

  $deduction=round(floatval($absents)*floatval($dailyPay));
  $advance=employeeController::getEmployeeBalance($EID);
  $data=[$No,$commission,$absents,$deduction,$advance];
  return $data;
}

public static function paySalary($data){
  $LID=globalVarriablesController::selfLedgerID();
  $obj=json_decode($data);
  $amountPaid = $obj[0];
  $payable = $obj[1];
  $amountRemaining = $obj[2];
  $date = $obj[3];
  $month = $obj[4];
  $year = $obj[5];
  $EID = $obj[6];
  $AID = $obj[7];
  $remarks = $obj[8];
  $totalDeduction = $obj[9];
  $totalComission = $obj[10];
  $absentDeduction = $obj[11];
  $advance = $obj[12];
  $monthSalary = $obj[13];


  
  $salaryOf = Carbon::createFromDate($year, $month+2, 0, 'Europe/Madrid')->format('Y-m-d');
    $id=DB::table('tbltransactionflow')->insertGetId([
      'DateStamp'=>$date,
      'Amount'=>$amountPaid,
      'PaidVia'=>$AID,
      'TransactionType'=>"Debit",
      'EmpID'=>$EID,
      'Remarks'=>$remarks,
      'TransactionCatogery'=>"Salary Payment",
      'LID'=>$LID
      
    ]);
   
    $id=DB::table('tbl_employee_payments_flow')->insertGetId([
      'EmployeeID'=>$EID,
      'MonthSalary'=>$monthSalary,
      'TotalPayable'=>$payable,
      'AmountPaid'=>$amountPaid,
      'AmountRemaining'=>$amountRemaining,
      'Date'=>$date,
      'SalaryOf'=>$salaryOf,
      'TotalDeduction'=>$totalDeduction,
      'TotalCommission'=>$totalComission,
      'AbsentsDeduction'=>$absentDeduction,
      'Advance'=>$advance,
      'Remarks'=>$remarks
      
    ]);  
    
    $re = DB::table('tbltransactionflow')
      ->where('TransactionID', $id)
      ->update([
        'EmpID'=>$EID,
        'TransactionCatogery'=>"Salary Payment"
    ]);
    
    $employeeOldBalance=employeeController::getEmployeeBalance($EID);
    $employeeNewBalance=$employeeOldBalance+$amountRemaining;
    $eb = DB::table('tblemployees')
    ->where('EID', $EID)
    ->update([
      'Balance'=>$employeeNewBalance
    ]);

    
  
  

    $updateStatus = DB::select('UPDATE tbl_employee_sale_commission 
    Set CommissionStatus = "Paid"
    where month(date)='.$month.' AND year(date)='.$year.' AND EID ='.$EID);

    $LID=globalVarriablesController::selfLedgerID();
    $oldSelfBalance = LedgerPartiesController::getPartyBalance($LID);
    $newBalance = $oldSelfBalance - $amountPaid;
    LedgerPartiesController::UpdatePartiesBalance($LID, $newBalance);

    $oldAccountBalance = accountsController::getAccountBalance($AID);
    $newAccountBalance = $oldAccountBalance - $amountPaid;
    accountsController::UpdateNewBalance($AID, $newAccountBalance);

  return $id;
}

}

  
  
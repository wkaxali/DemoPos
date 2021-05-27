<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use DB;

class attendanceController extends Controller
{
    public static function markAttendance(Request $request, $CO){

        $EID=json_decode($CO);
        //->format('Y-m-d h:iA');
        $date=Carbon::now();
        $dateToday = Carbon::now()->toDateString();
        $timeToday = Carbon::now();

        
        $reportingTime = Carbon::parse( DB::table('tblemployeepay')
                    ->where('EID', '=', $EID)
                     ->first()->ReportingTime);
        
        //$reportingTime = '8:00:00';
      
        $status = '';
        print("Today Time ".$timeToday."\n");
        print("Reporting Time ".$reportingTime."\n");
       $minLate= $timeToday->diffInMinutes($reportingTime);
       print("Late in Minutes".$minLate."\n");
       $hm= $timeToday->diffForHumans($reportingTime);
        if ($minLate<=15) {
            $status = 'On Time';//$today->eq($last)
            $rm="On Time";
           // return "Wow On time";
          } else {
            $status = 'Late';
            $rm="You are ".$hm." the Reporting Time";
          }
        $tid=DB::table('tbl_employeeattendance')->insertGetId([
            'EID'=>$EID,
            'Date'=>$dateToday,
            'TimeIn'=>$timeToday,
            'ReportingTime'=>$reportingTime,
            'Status'=>$status,
            'Remarks'=>$rm
            ]);       
}


public static function getAttendance(){
    $data=DB:: select('select * from vw_emoloyeeattendance order by Date DESC');
    return $data;
  }

  public static function searchAttendance($year, $month){
    $attendance=DB::select('select * from vw_emoloyeeattendance where month(date) ='.$month.'  AND year(date) ='.$year);
    return $attendance;
  }
}

  
  
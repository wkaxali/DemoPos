<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use DB;

class attendanceController extends Controller
{
    public static function markAttendance(Request $request, $CO){

        $EID=json_decode($CO);
        $date = Carbon::now();
        $time = $date->toTimeString();
        $reportingTime = '15:15:00';
        $status = '';
        if ($time < $reportingTime) {
            $status = 'Late';
          } else {
            $status = 'In Time';
          }
        $tid=DB::table('tbl_employeeattendance')->insertGetId([
            'EID'=>$EID,
            'Date'=>$date,
            'TimeIn'=>$time,
            'ReportingTime'=>$reportingTime,
            'Status'=>$status
            ]);       
}


public static function getAttendance(){
    $data=DB:: select('select * from vw_emoloyeeattendance');
    return $data;
  }


}

  
  
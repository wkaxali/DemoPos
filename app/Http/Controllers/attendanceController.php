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
        $date = Carbon::now()->toDateString();
        $time = Carbon::now()->toTimeString();
        $reportingTime = Carbon::create(0000, 00, 00, 15, 15, 00)->toTimeString();
        $p='15-15-15';
        $status = '';
        if ($time > $p) {
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

  
  
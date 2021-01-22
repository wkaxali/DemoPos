<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use DB;

class taskController extends Controller
{
    public static function insertTasks(Request $request, $CO){

        $ata=json_decode($CO);
        $subject=$ata[1];
        $assignedTo=$ata[2];
        $dueDate=$ata[3];
        $category=$ata[4];
        // $priority=$ata[5];
        // $remarks=$ata[6];
        $st=$ata[0];
        $tid=DB::table('tbl_tasks')->insertGetId([
            'Subject'=>$subject,
            'DueDate'=>$dueDate,
            'AssignedTo'=>$assignedTo,
            //'Status'=>$ts,
            //'Priority'=>$ts,
            'CategoryID'=>$category,
            
            ]);
        foreach ($st as $obj){
            $taskDetails=$obj[0];
            $id=DB::table('tbl_subtasks')->insertGetId([
            'taskDetails'=>$taskDetails,
            'TaskID'=>$tid,
            'DueDate'=>$dueDate,
            'AssignedTo'=>$assignedTo,
        ]);
        }         
}

public static function employeeData(){
    $card="";
    $data=DB:: select('select * from vw_employeetask');
    foreach ($data as $obj){
        $card=$card.'<div class="card" >

        <div class="card-body">
            <div class="mainCardBody">
                <div class="leftCardBody">
                    <button
                        style="border-radius: 20px; background-color: #e61d2f; border-color: #e61d2f; color: #fff;">Sales</button>
                </div>
                <div class="rightCardBody">
                    <span><i class="fa fa-fire"></i></span>
                    <span><i class="fa fa-wifi"></i></span>
                </div>
            </div>
            <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">'.$obj->Subject.'</h4>
            <div class="mainCardBody" style="padding-top: 20px;">
                <div class="leftCardBody">
                    <div
                        style="background-color: #e61d2f; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                        W A</div>
   
                    <span>Waqas Ali</span>
                </div>
                <div class="rightCardBody">
   
                    <div>Overdue</div>
                    <div class="mainDots text-center">
                        <div
                            style="height: 10px;width: 10px;border-radius: 50%; background-color: #e61d2f; display: inline-block;">
                        </div>
                        <div
                            style="height: 10px;width: 10px;border-radius: 50%; background-color: pink; display: inline-block;">
                        </div>
                        <div
                            style="height: 10px;width: 10px;border-radius: 50%; background-color: black; display: inline-block;">
                        </div>
   
                    </div>
                </div>
            </div>
        </div></div>';

    }


    return $card;
     
}

public static function getEmployees(){
    $data=DB:: select('select * from tblemployees');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->FirstName.' '.$d->LastName.'</option>';
      
    }
    return $option;
  }

  public static function getCategory(){
    $data=DB:: select('select * from tblemployees');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->EID.'>'.$d->FirstName.' '.$d->LastName.'</option>';
      
    }
    return $option;
  }


}

  
  
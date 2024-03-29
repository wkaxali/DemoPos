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
        $priority=$ata[5];
        // $remarks=$ata[6];
        $assignedDate=Carbon::now()->toDateString();
        $st=$ata[0];
        $tid=DB::table('tbl_tasks')->insertGetId([
            'Subject'=>$subject,
            'DueDate'=>$dueDate,
            'AssignedTo'=>$assignedTo,
            'Status'=>'Pending',
            'Priority'=>$priority,
            'CategoryID'=>$category,
            'AssignedDate'=>$assignedDate,
            
            ]);
        foreach ($st as $obj){
            $taskDetails=$obj[0];
            $id=DB::table('tbl_subtasks')->insertGetId([
            'taskDetails'=>$taskDetails,
            'TaskID'=>$tid,
            'DueDate'=>$dueDate,
            'AssignedTo'=>$assignedTo,
            'Status'=>'Pending'
        ]);
        }         
}

public static function employeeData(){
    $card="";
    $data=DB:: select('select * from vw_tasks');
    foreach ($data as $obj){
        $card=$card.'<div class="card" >

        <div class="card-body" data-toggle="modal" data-target="#exampleModal" onclick="loadTaskDetails('.$obj->TaskID.')">
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
   
                    <span>'.$obj->FirstName.' '.$obj->LastName.'</span>
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
    $data=DB:: select('select * from tbl_taskcategory');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;

        $option=$option.'
        <option value= '.$d->CategoryID.'>'.$d->Category.'</option>';
      
    }
    return $option;
  }


  public static function searchEmployeeData($EID, $name){
    $card="";
    $data=DB:: select('select * from vw_tasks where EID='.$EID);
    foreach ($data as $obj){
        $card=$card.'<div class="card" >

        <div class="card-body" data-toggle="modal" data-target="#exampleModal" onclick="loadTaskDetails('.$obj->TaskID.')">
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
   
                    <span>'.$name.'</span>
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


public static function searchTaskWithStatus($EID, $status, $name){
    $card="";
    $data=DB:: select('select * from vw_tasks where EID='.$EID.' AND Status="'.$status.'"');
    foreach ($data as $obj){
        $card=$card.'<div class="card" >

        <div class="card-body" data-toggle="modal" data-target="#exampleModal" onclick="loadTaskDetails('.$obj->TaskID.')">
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
   
                    <span>'.$name.'</span>
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

public static function loadTaskDetails($TID){
    $data=DB:: select('select * from vw_subtasks where TaskID='.$TID);
    return $data;
  }

public static function updateTaskStatus(Request $request, $CO){
   
    $ata=json_decode($CO);
    $mainTaskID = $ata[0][0];
    $comment = $ata[1][0];
    $employeeID = $ata[2][0];
    $overallStatus = $ata[3][0];

    DB::table('tbl_tasks')
            ->where('TaskID', '=', $mainTaskID)
            ->update(['Status'=>$overallStatus
            ]);

    for ($i=4; $i<sizeof($ata); $i++) {

            $subTaskID = $ata[$i][0];
            $subTaskStatus = $ata[$i][1];

            DB::table('tbl_subtasks')
            ->where([['TaskID', '=', $mainTaskID ],['STaskID', '=', $subTaskID ]])
            ->update(['Status'=>$subTaskStatus
            ]);
  
    } 

    $dateTime=Carbon::now();
    $chat=DB::table('tbl_chatbox')->insertGetId([
        'TaskID'=>$mainTaskID,
        'Comment'=>$comment,
        'CommentedBy'=>$employeeID,
        'DateTime'=>$dateTime
        ]);

         

    return $employeeID;
  }

  public static function updateAdminTaskStatus(Request $request, $CO){

    $obj=json_decode($CO);
    
    $employeeID = $obj[0][0];
    $mainTaskID = $obj[1][0];
    $remarks = $obj[2][0];
    $status = $obj[3][0];
    $date = $obj[4][0];
    $data = DB::table('tbl_tasks')
            ->where('TaskID', '=', $mainTaskID)
            ->update([
                'Status'=>$status,
                'Remarks'=>$remarks,
                'DueDate'=>$date
            ]);
    

    return $status;
  }

}

  
  
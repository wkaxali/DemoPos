<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
// CPID bigint(20) AI PK 
// CPName varchar(100) 
// Amount float 
// Remarks varchar(500) 
// TType varchar(50) 
// PID bigint(20) 
// CPercent float 
// percentOfAmount float 
// DateStamp date
class AdditionalTaxesAndCommissionsController extends Controller
{
    public static function AddTaxOrComminssion ( $CPName,$amount,$Remarks,$TTYPE,$PID,$CPercent,$POA,
    $dateHere){
        $CID=DB::table('tbladditionalcostandprofits')->insertGetId(['PID'=> $PID, 
        'CPName' =>$CPName,
        'Amount' =>$amount,
        'TType' =>$TTYPE,
        'DateStamp'=>$dateHere,
        'Remarks'=>$Remarks,
        'CPercent'=>$CPercent,
        'percentOfAmount'=>$POA
        ]);
       
return $CID;

      
        

    }
}

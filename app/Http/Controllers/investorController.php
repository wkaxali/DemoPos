<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use DB;

class investorController extends Controller
{
    public static function insertInvestor(Request $request, $CO){

        $obj=json_decode($CO);
        $name=$obj[0];
        $category=$obj[1];
        $investment=$obj[2];
        $contantNo=$obj[3];
        $address=$obj[4];
        $selfRatio=$obj[5];
        $investorRatio=$obj[6];
        $id=DB::table('tblledgerparties')->insertGetId([
        'PartyName'=>$name,
        'Category'=>$category,
        'InitialInvestment'=>$investment,
        'ContantNo'=>$contantNo,
        'Address'=>$address,
        'OurProfitRatio'=>$selfRatio,
        'InvestorProfitRatio'=>$investorRatio
        ]);
        return $id;
}

function getInvestorData(){
    $data=DB:: select('select * from vw_stockdetails where Category = 20');
    return $data;
  }

}


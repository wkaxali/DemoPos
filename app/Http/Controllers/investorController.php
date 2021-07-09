<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\accountsController;
use App\Http\Controllers\LedgerPartiesController;
use Carbon\Carbon;

use DB;

class investorController extends Controller
{
  public static function addInvestorProduct(Request $request, $CO){

    $ata=json_decode($CO);
    $investorID=$ata[0];
    $data=$ata[1];
    $totalProfit=0;
    foreach ($data as $obj){
      $PID=$obj[0];
      $salePrice=$obj[1];
      $purchasePrice=$obj[2];
      $profit=$obj[3];
      $selfProfit=$obj[4];
      $investorProfit=$obj[5];
      $investorProfitRatio=$investorProfit/$profit;
      $selfProfitRatio=$selfProfit/$profit;
      
      $id=DB::table('tbl_investor_product')->insertGetId([
      'PID'=>$PID,
      'LID'=>$investorID,
      'totalProfit'=>$profit,
      'LIDProfit'=>$investorProfit,
      'LIDProfitRatio'=>$investorProfitRatio,
      'SelfProfit'=>$selfProfit,
      'SelfProfitRatio'=>$selfProfitRatio,
      'Status'=>"Pending"
      ]);

      $pid = DB::table('instock')
        ->where('ProductSerial', $PID)
        ->update([
          'Status'=>'Assigned'
          ]);
          
      $totalProfit=$totalProfit+$investorProfit;
      
    }


    $oldCompanyBalance=LedgerPartiesController::getPartyBalance($investorID);
      
      $currentCompanyBalance=floatval($oldCompanyBalance)+floatval($totalProfit);
      LedgerPartiesController::UpdatePartiesBalance($investorID,$currentCompanyBalance);
    return $id;
  }
  
    
/*
    $oldSelfBalance = LedgerPartiesController::getPartyBalance(2);
    $newBalance = $oldSelfBalance - $amount;
    LedgerPartiesController::UpdatePartiesBalance(2, $newBalance);
    $balanceForParty=LedgerPartiesController::getPartyBalance($paidTo);
    $newBalanceOfParty=$balanceForParty-$amount;
    LedgerPartiesController::UpdatePartiesBalance($paidTo, $newBalanceOfParty);

    $oldAccountBalance = accountsController::getAccountBalance($paidBy);
    $newAccountBalance = $oldAccountBalance - $amount;
    accountsController::UpdateNewBalance($paidBy, $newAccountBalance);
*/



    public static function insertInvestor(Request $request, $CO){

        $obj=json_decode($CO);
        $name=$obj[0];
        $investment=$obj[1];
        $contantNo=$obj[2];
        $address=$obj[3];
        $selfRatio=$obj[4];
        $investorRatio=$obj[5];
        $id=DB::table('tblledgerparties')->insertGetId([
        'PartyName'=>$name,
        'Category'=>"Investor",
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


public static function getInvestors(){
    $data=DB:: select('select * from tblledgerparties where Category = "Investor"');
    
    $option='<option value=" "></option>';


    foreach ($data as $d){
      //print $option;
      $option=$option.'
      <option value= '.$d->LID.'>'.$d->LID.') '.$d->PartyName.'</option>';
      
    }
    return $option;
  }


  public static function getInvestorDetails(Request $request, $LID){
  
    $investorDetails=DB:: select('select * from tblledgerparties where LID ='.$LID);
    return $investorDetails;
}


function getInvestorStock($InvestorID){
  $data=DB:: select('select * from vw_investor_product where LID='.$InvestorID);

   $table='';
 
  

foreach ($data as $d){

    $table=$table.'

    <tr>
    <td>'.$d->ProductID.'</td>
    <td>'.$d->ProductName.'</td>
    <td>'.$d->PerUnitSalePrice.'</td>
    <td>'.$d->TotalCost.'</td>
    <td>'.$d->totalProfit.'</td>
    <td>'.$d->SelfProfit.'</td>

    <td>'.$d->LIDProfit.'</td>

    <td>'.$d->EngineNumber.'</td>
    <td>'.$d->ChasisNumber.'</td>
    <td style=" display:none;">1</td>
    </tr>';

}
return $table;



}

public static function getInvestorReceivedAmount(Request $request, $LID){
  $SUM=DB::select('select sum(Amount) as SUM from tbltransactionflow where TransactionCatogery = "Payment" and PaidTo ='.$LID);
  return $SUM;
}

public function viewAllInvestors(){
  $results=DB::select('select * from tblledgerparties where category="Investor"');
  return $results;

}

}


<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
class accountsController extends Controller
{
    public static function loadCategory(){
        $data=DB:: select('select * from tbl_transaction_history_search');
    
        $option='<option value=""></option>';
    
    
        foreach ($data as $d){
          //print $option;
    
            $option=$option.'
            <option value= '.$d->RelatedTable.'>'.$d->TransactionCategory.' </option>';
          
        }
        return $option;


    }
    public static function getAccountHeads(){
        $data=DB:: select('select * from tblaccounts');
    
        $option='<option value=""></option>';
    
    
        foreach ($data as $d){
          //print $option;
    
            $option=$option.'
            <option value= '.$d->AID.'>'.$d->AccountName.'   #    '.$d->AccountNumber.'</option>';
          
        }
        return $option;


    }
    
    public static function getAccountBalance($AID){
       
        $re = DB::table('tblaccounts')
            ->where('AID', '=', $AID)
             ->first()->Balance;

             return $re;

    }
    public static function UpdateNewBalance($AID,$amount){

        
        DB::table('tblaccounts')
        ->where('AID', $AID)
        ->update(['Balance' =>$amount
       
        ]);
        return 'update New Balance';


    }
     public function addAccount(Request $request, $CO){
        
        $obj=json_decode($CO);
        $AccountName=$obj[0];
        $AccountNumber=$obj[1];
        $Balance=$obj[2];
      
        
        $CID=DB::table('tblaccounts')->insertGetId([
            'AccountName'=>$AccountName,
            'AccountNumber'=>$AccountNumber,
            'Balance'=>$Balance
            
            ]);
        return "Account " .$AccountName." is added on ID ".$CID;
    }

    public static function editAccounts(Request $request, $CO){
        $ata=json_decode($CO);
        $AID = $ata[0];
        $accName = $ata[1];
        $accNumber = $ata[2];
        $Balance = $ata[3];
        
        
        $re = DB::table('tblaccounts')
        ->where('AID', $AID)
        ->update([
        'AccountName'=>$accName,
        'AccountNumber'=>$accNumber,
        'Balance'=>$Balance,
        ]);
        
        return $AID;
        
        }


        public function getAccountsData(){
            $data = DB::select('select * from tblaccounts');
            return $data;
            }

        public static function showAccountsSum(){
            $data=DB:: select('select * from tblaccounts');
            $table='<table>';
            $total=0;
            foreach ($data as $d){

                $total=$total+($d->Balance);

                $table=$table.'
                    <tr>
                        <th>'.$d->AccountName.'<br>('.$d->AccountNumber.'):</th>
                        <th>Balance: '.$d->Balance.'</th>
                    </tr>
                    <tr>
                    <th>&nbsp</th>
                    <th>&nbsp</th>
                    </tr>';
            }
            $table=$table.'
                    <tr>
                        <th>Net Balance</th>
                    </tr>
                    <tr>
                        <td>'.$total.'</td>
                    </tr>
                </table>';
            return $table;
        }

        public static function getAccounts(){
            $option='';
            $data=DB:: select('select * from tblaccounts');
                foreach ($data as $d){
                    $option=$option.'
                    <option value='.$d->AID.'>'.$d->AccountName.'</option>';
                }
                return $option;
        }

        public static function getAccountsWithNumbers(){
            $option='';
            $data=DB:: select('select * from tblaccounts');
                foreach ($data as $d){
                    $option=$option.'
                    <option value='.$d->AID.'>'.$d->AccountName.' '.$d->AccountNumber.'</option>';
                }
                return $option;
        }

        public static function getAccountsForHistory(){
            $option='<option value="All">All</option>';
            $data=DB:: select('select * from tblaccounts');
            
                foreach ($data as $d){
                    $option=$option.'
                    <option value='.$d->AID.'>'.$d->AccountName.'</option>';
                }
                return $option;
        }
        

        public static function amountTransfer($UT){
            $ata = json_decode($UT);
            $ATID = $ata[0];
            $amount = $ata[1];
            $acc1 = $ata[2];
            $acc2 = $ata[3];
            $remarks = $ata[4];
            if(!strcmp($acc1,"")){
  
                $ATID=DB::table('tbl_accountstransactions')->insertGetId([
                   
                    'AID2'=>$acc2,
                    'Amount'=>$amount,
                    'Remarks'=>$remarks 
                    
                    ]);
                
                $oldbalance2=self::getAccountBalance($acc2);
                $oldbalance2+= $amount;
                $newbalance2=self::UpdateNewBalance($acc2,$oldbalance2);
        
                $Tcate= "Amount Transfer";
                $dateStamp = Carbon::now()->toDateString();
                $LID=globalVarriablesController::selfLedgerID();
                $oldSelfBalance=LedgerPartiesController::getPartyBalance($LID);
                $newSelfBalance = $amount+ $oldSelfBalance;
                LedgerPartiesController::UpdatePartiesBalance($LID, $newSelfBalance);

                $transactionId2=DB::table('tbltransactionflow')->insertGetId([
                    
                    'TransactionType'=>"Credit",
                    'TransactionCatogery'=>$Tcate ,
                    
                    'Amount'=>$amount,
                    'DateStamp'=>$dateStamp,
                    'SBB'=>$oldSelfBalance,
                    'SBA'=>$oldSelfBalance,
                    'LID'=>$LID, 
                    'PaidVia'=>$acc2,  
                    'Remarks'=>$remarks,
                    'ATID'=>$ATID,        
                    ]);

                // $transactionRecord2=TransactionFlow::addTransaction(Null,"Credit",$Tcate,$amount,$dateStamp,
                // Null,$oldSelfBalance,$oldSelfBalance,Null,Null,$LID,Null,Null,$LID,$acc2,Null,$remarks);

               
            }else{

                $ATID=DB::table('tbl_accountstransactions')->insertGetId([
                    'AID1'=>$acc1,
                    'AID2'=>$acc2, 
                    'Amount'=>$amount,
                    'Remarks'=>$remarks,
                    ]);

                  
                         
    

            $oldbalance1=self::getAccountBalance($acc1);
            $oldbalance1-= $amount;
            $newbalance1=self::UpdateNewBalance($acc1,$oldbalance1);
            

            $oldbalance2=self::getAccountBalance($acc2);
            $oldbalance2+= $amount;
            $newbalance2=self::UpdateNewBalance($acc2,$oldbalance2);
            

            $Tcate= "Amount Transfer";
            $dateStamp = Carbon::now()->toDateString();
            $LID=globalVarriablesController::selfLedgerID();
            $oldSelfBalance=LedgerPartiesController::getPartyBalance($LID);

            $transactionId2=DB::table('tbltransactionflow')->insertGetId([
                    
                'TransactionType'=>"Debit",
                'TransactionCatogery'=>$Tcate ,
                
                'Amount'=>$amount,
                'DateStamp'=>$dateStamp,
                'SBB'=>$oldSelfBalance,
                'SBA'=>$oldSelfBalance,
                'LID'=>$LID, 
                'PaidVia'=>$acc1,  
                'Remarks'=>$remarks,
                'ATID'=>$ATID,        
                ]);  

            $transactionId2=DB::table('tbltransactionflow')->insertGetId([
            
                'TransactionType'=>"Credit",
                'TransactionCatogery'=>$Tcate ,
                
                'Amount'=>$amount,
                'DateStamp'=>$dateStamp,
                'SBB'=>$oldSelfBalance,
                'SBA'=>$oldSelfBalance,
                'LID'=>$LID, 
                'PaidVia'=>$acc2,  
                'Remarks'=>$remarks,
                'ATID'=>$ATID, 
                ]);  
                
            // $transactionId1=TransactionFlow::addTransaction(Null,"Debit",$Tcate,$amount,$dateStamp,
            // Null,$oldSelfBalance,$oldSelfBalance,Null,Null,$LID,Null,Null,$acc2,$acc1,Null,$remarks);
            // $transactionId2=TransactionFlow::addTransaction(Null,"Credit",$Tcate,$amount,$dateStamp,
            // Null,$oldSelfBalance,$oldSelfBalance,Null,Null,$LID,Null,Null,$acc2,$acc1,Null,$remarks);
        }


            return "Amount ".$amount." Is Transfered " ;
        }
        
        public static function editTransactions(Request $request, $UT){
            
            $ata=json_decode($UT);
            $ATID = $ata[0];
            $Amount = $ata[1];
            $AID1 = $ata[2];
            $AID2 = $ata[3];
            $Remarks = $ata[4];
            $LID=globalVarriablesController::selfLedgerID();

            $data=DB:: select('select * from tbl_accountstransactions where ATID='. $ATID);
            $OldAmount=$data[0]->Amount;
            $OldAID1=$data[0]->AID1;
            $OldAID2=$data[0]->AID2;
            $OldRemarks=$data[0]->Remarks;

        if(!strcmp($AID1,"")){
            //previous accounts balance returning
            $OldAccount2Balance=self::getAccountBalance($OldAID2);
            $NewAccount2Balance=$OldAccount2Balance-$OldAmount;
            self::UpdateNewBalance($OldAID2,$NewAccount2Balance);

            $oldSelfBalance=LedgerPartiesController::getPartyBalance($LID);
            $newSelfBalance = $oldSelfBalance-$OldAmount;
            LedgerPartiesController::UpdatePartiesBalance($LID, $newSelfBalance);

        }else{
            //previous accounts1 balance returning
            $OldAccount1Balance=self::getAccountBalance($OldAID1);
            $NewAccount1Balance=$OldAccount1Balance+$OldAmount;
            self::UpdateNewBalance($OldAID1,$NewAccount1Balance);

            //previous accounts2 balance returning
            $OldAccount2Balance=self::getAccountBalance($OldAID2);
            $NewAccount2Balance=$OldAccount2Balance-$OldAmount;
            self::UpdateNewBalance($OldAID2,$NewAccount2Balance);
        }

        //delete previous Transactions
        DB::delete('DELETE FROM tbltransactionflow WHERE ATID ='.$ATID);
        DB::delete('DELETE FROM tbl_accountstransactions WHERE ATID ='.$ATID);

        //Update New Acoounts and Transaction
        self::amountTransfer($UT);
        return "Transaction ".$ATID." is Updated";

    }

        public function getAllTransactions(){
            $data=DB:: select('select * from vw_accountstransactions');
            return $data;
        } 

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

use PDF;

class TransactionFlow extends Controller
{
    
    public static function addTransaction($InvoiceNo,$TType,$Tcate,$amount,$dateStamp,
    $UserID,$SBB,$SBA,$CBB,$CBA,$LID,$pattyCash,$paidBy,$paidTo,$paidVia,$CID)
    {

         // InvoiceNo bigint(20) 
        // TransactionCatogery varchar(50) 
        // Amount,jjjjjjjjjjj8
        // SBB varchar(50) 
        // SBA varchar(50) 
        // CBB varchar(50) 
        // CBA varchar(50) 
        // PaidTo varchar(50) 
        // PaidBy varchar(50) 
        // PaidVia
    
        $dateNow = Carbon::now()->toDateString();
      //$dateNow =  Carbon::createFromFormat('Y-m-d', $dateRaw)->format('d-F-Y');
   
        $TID=DB::table('tbltransactionflow')->insertGetId(['InvoiceNo'=> $InvoiceNo, 
        'TransactionType' =>$TType,
        'TransactionCatogery'=>$Tcate,
        'Amount' =>$amount,
        'DateStamp' =>$dateStamp,
        'ModifiedOn' =>$dateNow,
        'UserID' =>$UserID,
        'LID'=>$LID,
        'SBB' =>$SBB,
        'SBA' =>$SBA,
        'CBB' =>$CBB,
        'CBA' =>$CBA,
        'PattyCash'=>$pattyCash,
        'PaidTo'=>$paidTo,
        'PaidBy'=>$paidBy,
        'PaidVia'=>$paidVia,
        'CID'=>$CID

           
          
           ]);
           return $TID;

    }
        public static  function selectedSearchData($AID,$LID){
            $data=DB:: select('select * from tbltransactionflow where PaidVia='.$AID.' and PaidTo='.$LID);
            return $data;
            
        }
    public static function getTransactionsForAccounts($AID){
        
        $data=DB:: select('select * from tbltransactionflow where PaidVia='.$AID);
        return $data;

    }
    public static function getTransactionsForParties($LID){
        $data=DB:: select('select * from tbltransactionflow where PaidTo='.$LID);
        return $data;
    }
    public static function DebitTransactions(){
        $data=DB:: select('select * from vw_debithistory');
        return $data;
    }
    public static function creditTransactions(){
        $data=DB:: select('select * from vw_credithistory');
        return $data;

    }
    public static function addInTransactionFlowForSales($LID,$invoiceNumber,$dateNow,$AP,$userID,$pattyCash,$CLB,$CCB){

        // [TransactionID]
        
        $TID=DB::table('tblTransactionFlow')->insertGetId(['InvoiceNo'=>$invoiceNumber,
        'TransactionCatogery'=>"Sales",
        'Amount'=>$AP,
        'LID'=>$LID,
        'DateStamp'=>$dateNow,
        'UserID'=>$userID,
        'PattyCash'=>$pattyCash,
        
        'SBB'=>NULL,
        'SBA'=>NULL,
        'CBB'=>$CLB,
        'CBA'=>$CCB
        
        
        
        
        
        
        ]);
      
  
  
      }

    public static function UpdateCaT($PID,$TTname,$amount,$ttype,$dateNow){


        $CID=DB::table('tbladditionalcostandprofits')->insertGetId(['PID'=> $PID, 
        'CPName' =>$TTname,
        'Amount' =>$amount,
        'TType' =>$ttype,
        'DateStamp'=>$dateNow
           
          
           ]);
           return $CID;
    }






    
    public static function getChargesOrComissions($PID,$TTname,$ttype){


        $amount = DB::table('tbladditionalcostandprofits')
            ->where([['PID', '=', $PID],
            ['CPName', '=', $TTname],
            ['TType', '=', $ttype]]         
            
            )
             ->get();

        


        if($amount->isEmpty()){
           
            return 0;

        }else{
          
            return $amount[0]->Amount;
        }
        
    }



 public function printTrasactionHistory($AID,$LID)
    {
        if($AID=="All" || $LID=="All"){
            $data=DB::select('select * from tbltransactionflow');
        }else{
            $data=DB:: select('select TransactionID, InvoiceNo, Amount, TransactionCatogery, DateStamp from tbltransactionflow where PaidVia='.$AID.' and PaidTo='.$LID);
        }
       
        $table='
        <h1 style="text-align:center;">Transaction History</h1><br><br>
        
        <table>
        
          <thead>
              <tr>
                  <th width="100px;" >Transaction ID</th>
                  <th  width="93px;" >Invoice No</th>
                  <th  width="124px;" >Transaction Catogery</th>
                  <th  width="100px;" >Amount</th>
                  <th  width="100px;" >Transaction Date</th>
              </tr>
          </thead>
          <tbody>';
 

        foreach ($data as $d){
             

            $table=$table.'<tbody>
           
            
            <tr>
            <td>'.$d->TransactionID.'</td>
            <td>'.$d->InvoiceNo.'</td>
            <td>'.$d->TransactionCatogery.'</td>
            <td>'.$d->Amount.'</td>
            <td>'.$d->DateStamp.'</td>
            </tr>
            
            

             ';
      
        }
       
        PDF::SetTitle('Transaction History');
        PDF::AddPage();
        PDF::writeHTML($table, true, false, true, false, '');

        PDF::Output('Transaction.pdf');
    }
        
    

}

    



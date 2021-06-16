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
    public static  function selectedDateData($date1,$date2,$category,$table,$value){
        

    
        $columnName='';
        if(!strcmp($value,"All")){
            $data=DB:: select('select * from vw_transaction_flow  where DateStamp between "'.$date1 .'"and"'.$date2.'" and TransactionCatogery="'.$table.'"' );
            return $data;
        }

        if(strcmp($value,"All")){
            if(!strcmp($category,"tblledgerparties")){
                
                $columnName="PaidTo";
        
            }

            else if(!strcmp($category,"customeinformation")){
                
                $columnName="PaidBy";
        
            }
            else if(!strcmp($category,"tblexpenseheads")){
                
                $columnName="ExpenseHeadID";
        
            }

            else if(!strcmp($category,"tblemployees")){
                
                $columnName="EmpID";
        
            }
        }
            $data=DB:: select('select * from vw_transaction_flow  where DateStamp between "'.$date1 .'"and"'.$date2.'" and '.$columnName.'='.$value);
            return $data;
        }

           
        
        
    
    
    


        public static  function selectedSearchData($category, $value, $table){
            if($value!="All"){
                if($table == "tblledgerparties"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'" and PaidTo='.$value );
                    return $data;
                }


                if($table == "tblledgerparties"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'" and PaidTo='.$value );
                    return $data;
                }

                if($table == "customeinformation"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'" and PaidBy='.$value );
                    return $data;
                }

                if($table == "tblexpenseheads"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'" and ExpenseHeadID='.$value );
                    return $data;
                }

                if($table == "tblemployees"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'" and EmpID='.$value );
                    return $data;
                }
                else{
                    return [1,23,4];
                }
            }
            if($value=="All"){
                if($table == "All"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'"');
                    return $data;
                }
                if($table == "tblledgerparties"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'"');
                    return $data;
                }

                if($table == "customeinformation"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'"');
                    return $data;
                }

                if($table == "tblexpenseheads"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'"');
                    return $data;
                }

                if($table == "tblemployees"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'"');
                    return $data;
                }
                else{
                    return "error";
                }
            }
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



 public static function printTrasactionHistory($date1,$date2)
    {
        $data=DB:: select('select * from vw_transaction_flow  where DateStamp between "'.$date1.'" and "'.$date2.'" ');
        
        $table='
        <h1 style="text-align:center;">Transaction History</h1><br>
        
        <table width="550px"  border="1" style="text-align:center;">
        
          <tbody>
              <tr>
                  <th><b>Transaction ID</b></th>
                  <th><b>Party Name</b></th>
                  <th><b>Employee Name</b></th>
                  <th><b>Customer Name</b></th>
                  <th><b>Expense Head</b></th>
                  <th><b>Account Name</b></th>
                  <th><b>Transaction Catogery</b></th>
                  <th><b>Amount</b></th>
                  <th><b>Transaction Date</b></th>
              </tr>
          </tbody>
         
          </table> ';
 

        foreach ($data as $d){
             

            $table=$table.'
           
        <table width="550px"  border="1" style="text-align:center;">
            <tbody>
            <tr>
            <td>'.$d->TransactionID.'</td>
            <td>'.$d->PartyName.'</td>
            <td>'.$d->FirstName.'</td>
            <td>'.$d->CustomerName.'</td>
            <td>'.$d->ExpenseHead.'</td>
            <td>'.$d->AccountName.'</td>
            <td>'.$d->TransactionCatogery.'</td>
            <td>'.$d->Amount.'</td>
            <td>'.$d->DateStamp.'</td>
            </tr>
            </tbody>
        </table> 

             ';
      
        }
       
        PDF::SetTitle('Transaction History');
        PDF::AddPage();
        PDF::writeHTML($table, true, false, true, false, '');

        PDF::Output('Transaction.pdf');
    }
        
    public static function loadCategoryData($table){
        $option='';
        if($table!="All"){
            $data=DB:: select('select * from '.$table);
            if($table == "tblledgerparties"){
                $option='<option value=""></option>';
                foreach ($data as $d){
                    $option=$option.'
                    <option value='.$d->LID.'>'.$d->PartyName.'</option>';
                }
                return $option;
            }
            if($table == "customeinformation"){
                $option='<option value=""></option>';
                foreach ($data as $d){
                    $option=$option.'
                    <option value='.$d->CustomerID.'>'.$d->CustomerName.'</option>';
                }
                return $option;
            }
            if($table == "tblexpenseheads"){
                $option='<option value=""></option>';
                foreach ($data as $d){
                    $option=$option.'
                    <option value='.$d->ID.'>'.$d->ExpenseHead.'</option>';
                }
                return $option;
            }
            if($table == "tblemployees"){
                $option='<option value=""></option>';
                foreach ($data as $d){
                    $option=$option.'
                    <option value='.$d->EID.'>'.$d->FirstName.' '.$d->LastName.'</option>';
                }
                return $option;
            }
            else {
                $option='<option value="">Hola!</option>';
                
                return $option;
            }
        }
        if($table == "All"){
            $option='<option value=""></option>';
            
            return $option;
        }
    }

}

    



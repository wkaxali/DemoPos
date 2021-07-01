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

        if(!strcmp($table,"Everything")){
                
            $data=DB:: select('select * from vw_transaction_flow  where DateStamp between "'.$date1 .'"and"'.$date2.'" ');
            $sum=0;
                    foreach($data as $d){
                        if($d->TransactionType=="Credit"){
                            $sum+= $d->Amount;
                        }else{
                            $sum-= $d->Amount;
                        }
                        }
                      return [$data, $sum];
    
        }else if ((!strcmp($table,"Investors"))&&(!strcmp($value,"All"))){
            $data=DB:: select('select * from vw_transaction_flow where  DateStamp between "'.$date1 .'"and"'.$date2.'" and PaidTo IS NOT NULL and PaidTo <>0 ');
            $sum=0;
            foreach($data as $d){
                  $sum+= $d->Amount;
                }
              return [$data, $sum];
        }
        else if(!strcmp($value,"All")){
            $data=DB:: select('select * from vw_transaction_flow  where DateStamp between "'.$date1 .'"and"'.$date2.'" and TransactionCatogery="'.$table.'"' );
            $sum=0;
                    foreach($data as $d){
                          $sum+= $d->Amount;
                        }
                      return [$data, $sum];
            
           
        }
        
        else if(!strcmp($category,"All")){
                
            $data=DB:: select('select * from vw_transaction_flow  where DateStamp between "'.$date1 .'"and"'.$date2.'" and TransactionCatogery="'.$table.'"' );
            $sum=0;
                    foreach($data as $d){
                          $sum+= $d->Amount;
                        }
                      return [$data, $sum];
        } 


        else if(strcmp($value,"All")){


              if (!strcmp($table,"Investors")){
                $data=DB:: select('select * from vw_transaction_flow where  DateStamp between "'.$date1 .'"and"'.$date2.'" and PaidTo ="'.$value.'"');
                $sum=0;
                foreach($data as $d){
                      $sum+= $d->Amount;
                    }
                  return [$data, $sum];
            }
            
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
            $data=DB:: select('select * from vw_transaction_flow  where DateStamp between "'.$date1 .'"and"'.$date2.'"  and TransactionCatogery="'.$table.'" and '.$columnName.'='.$value );
            $sum=0;
            foreach($data as $d){
                  $sum+= $d->Amount;
                }
              return [$data, $sum];
        }

        
        public static  function selectedSearchData($category, $value, $table){
           // return $value;     
            if($value!="All"){

                if($table == "tblledgerpartiesall"){
                    $data=DB:: select('select * from vw_transaction_flow where PaidTo='.$value );
                    $sum=0;
                    foreach($data as $d){
                          $sum+= $d->Amount;
                        }
                      return [$data, $sum];
                }

                if($table == "tblledgerparties"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'" and PaidTo='.$value );
                    $sum=0;
                    foreach($data as $d){
                          $sum+= $d->Amount;
                        }
                      return [$data, $sum];
                }

                if($table == "tblledgerparties"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'" and PaidTo='.$value );
                    $sum=0;
                    foreach($data as $d){
                          $sum+= $d->Amount;
                        }
                      return [$data, $sum];
                }

                if($table == "customeinformation"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'" and PaidBy='.$value );
                    $sum=0;
                    foreach($data as $d){
                          $sum+= $d->Amount;
                        }
                      return [$data, $sum];
                }

                if($table == "tblexpenseheads"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'" and ExpenseHeadID='.$value );
                    $sum=0;
                    foreach($data as $d){
                          $sum+= $d->Amount;
                        }
                      return [$data, $sum];
                }
    
                if($table == "tblemployees"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'" and EmpID='.$value );
                    $sum=0;
                    foreach($data as $d){
                          $sum+= $d->Amount;
                        }
                      return [$data, $sum];
                }
                else{
                    return [1,23,4];
                }
            }
            if($value=="All"){

                if($category=="Everything"){
                    $data=DB:: select('select * from vw_transaction_flow' );
                    $sum=0;
                    foreach($data as $d){
                        if($d->TransactionType=="Credit"){
                            $sum+= $d->Amount;
                        }else{
                            $sum-= $d->Amount;
                        }
                        }
                      return [$data, $sum];
                }

                if($table=="tblledgerpartiesall"){
                    $data=DB:: select('select * from vw_transaction_flow where PaidTo IS NOT NULL and PaidTo <>0 ');
                    $sum=0;
                    foreach($data as $d){
                          $sum+= $d->Amount;
                        }
                      return [$data, $sum];
                }
                if($table == "All"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'"');
                    $sum=0;
                    foreach($data as $d){
                          $sum+= $d->Amount;
                        }
                      return [$data, $sum];
                }
                if($table == "tblledgerparties"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'"');
                    $sum=0;
                    foreach($data as $d){
                          $sum+= $d->Amount;
                        }
                      return [$data, $sum];
                }

                if($table == "customeinformation"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'"');
                    $sum=0;
                    foreach($data as $d){
                          $sum+= $d->Amount;
                        }
                      return [$data, $sum];
                }

                if($table == "tblexpenseheads"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'"');
                    $sum=0;
                    foreach($data as $d){
                          $sum+= $d->Amount;
                        }
                      return [$data, $sum];
                }

                if($table == "tblemployees"){
                    $data=DB:: select('select * from vw_transaction_flow where TransactionCatogery="'.$category.'"');
                    $sum=0;
                    foreach($data as $d){
                          $sum+= $d->Amount;
                        }
                      return [$data, $sum];
                }
                // else{
                //     return "error";
                // }
            }
            else{
                return "dssd";
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
    public static function printTrasactionHistory2( $table,$category,$value){

        $columnName='';
        if(!strcmp($value,"All")){ 
            if(!strcmp($category,"Everything")){

                $data=DB:: select('select * from vw_transaction_flow' );
              
            }
            else if (!strcmp($table,"tblledgerpartiesall")){
                $data=DB:: select('select * from vw_transaction_flow where PaidTo IS NOT NULL and PaidTo <>0 ');
                
            }
            
            else{
            $data=DB:: select('select * from vw_transaction_flow  where TransactionCatogery="'.$category.'"' );
           
        }
        }
       else if(!strcmp($table,"All")){
            $data=DB:: select('select * from vw_transaction_flow  where  TransactionCatogery="'.$category.'"' );

        }
        
        else if(!strcmp($category,"Everything")){
            $data=DB:: select('select * from vw_transaction_flow' );
           
            
        }

        else if(!strcmp($table,"tblledgerpartiesall")){
            $data=DB:: select('select * from vw_transaction_flow where  PaidTo='.$value );
             
        }
       else if(strcmp($value,"All")){

          
            if(!strcmp($table,"tblledgerparties")){
                
                $columnName="PaidTo";
        
            }

            else if(!strcmp($table,"customeinformation")){
                
                $columnName="PaidBy";
        
            }
            else if(!strcmp($table,"tblexpenseheads")){
                
                $columnName="ExpenseHeadID";
        
            }

            else if(!strcmp($table,"tblemployees")){
                
                $columnName="EmpID";
        
            }

            
            $data=DB:: select('select * from vw_transaction_flow  where   TransactionCatogery="'.$category.'" and '.$columnName.'='.$value );
            
        }
       
        if (!strcmp($table,"tblemployees")){
           
            $sum = 0;
          foreach($data as $d)
          {
             $sum+= $d->Amount;
          }
           
        
        $table='
        <h2 style="text-align:center;" >Transaction History</h2><br>
        <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr><br><br><br><br>
      
        <td max-height="20px" ><h2>Total Amount : '.$sum.' </h2></td>
        
        </tr><tr><td max-height="20px"><h3>Filter by : '.$category.'</h3></td></tr>
        </tbody>
    </table> <br><br>
        <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
          <tbody>
              <tr>
                  <th><b>Transaction ID</b></th>
                  
                  <th><b>Employee Name</b></th>
                 
                  <th><b>Account Name</b></th>
                  <th><b>Category</b></th>
                  <th><b>Transaction Date</b></th>
                  <th><b>Amount</b></th>
                  
                  
              </tr>
          </tbody>
         
          </table> ';
 
         

        foreach ($data as $d){
            

            $table=$table.'
           
        <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
            <tbody>
            <tr>
            <td max-height="20px">'.$d->TransactionID.'</td>
           
            <td >'.$d->FirstName." ".$d->LastName .'</td>
            
            <td>'.$d->AccountName." ($d->AccountNumber)".'</td>
            <td>'.$d->TransactionCatogery.'</td>
            <td>'.$d->DateStamp.'</td>
            <td>'.$d->Amount.'</td>
            
            </tr>
            </tbody>
        </table> 

             ';
            }
             $table=$table.'
       
    <table border="0">
<br>
<br>

<br>
<br>
<br>
<br>
<br>




<tr>


<td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>




</tr>



</table>
     

    
         ';

      
        
        
        PDF::SetTitle('Transaction History');
        PDF::AddPage();
        PDF::writeHTML($table, true, false, true, false, '');

        PDF::Output('Transaction.pdf');
    }

    else if (!strcmp($category,"Everything")){
           
        $sum=0;
        foreach($data as $d){
          if($d->TransactionType=="Credit"){
            $sum+= $d->Amount;
          }else{
            $sum-= $d->Amount;
        }
          }
         
       
    
    $table='
    <h2 style="text-align:center;" >Transaction History</h2><br>
    <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
    <tbody>
    <tr><br><br><br><br>
    
    <td max-height="20px" ><h2>Total Amount : '.$sum.' </h2></td>
    
    </tr><tr><td max-height="20px"><h3>Filter by : '.$category.'</h3></td></tr>
    </tbody>
    </table> <br><br>
    <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
      <tbody>
          <tr>
              <th max-width:50px;><b>Transaction ID</b></th>
              <th max-width:50px;><b>Invoice Number</b></th>
              <th max-width:50px;><b>Party Name</b></th>
              <th max-width:50px;><b>Employee Name</b></th>
              <th max-width:50px;><b>Customer Name</b></th>
              <th max-width:50px;><b>Expense Head</b></th>
              <th max-width:50px;><b>Account Name</b></th>
              <th max-width:50px;><b>Category</b></th>
              <th max-width:50px;><b>Transaction Date</b></th>
              <th max-width:50px;><b>Amount</b></th>
              
          </tr>
      </tbody>
     
      </table> ';
    
     
    
    foreach ($data as $d){
        
    
        $table=$table.'
       
    <table cellpadding = "2" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr>
        <td height:80px;>'.$d->TransactionID.'</td> 
        <td height:80px;>'.$d->InvoiceNo.'</td>
        <td height:80px;>'.$d->PartyName.'</td>
        <td height:80px;>'.$d->FirstName." ".$d->LastName .'</td>
        <td height:80px;>'.$d->CustomerName.'</td>
        <td height:80px;>'.$d->ExpenseHead.'</td>
        <td height:80px;>'.$d->AccountName.'</td>
        <td height:80px;>'.$d->TransactionCatogery.'</td>
        <td height:80px;>'.$d->DateStamp.'</td>
        <td height:80px;>'.$d->Amount.'</td>
        </tr>
        </tbody>
    </table> 
    
         ';}
         $table=$table.'
       
         <table border="0">
     <br>
     <br>
     
     <br>
     <br>
     <br>
     <br>
     <br>
     
     
     
     
     <tr>
     
     
     <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>
     
     
     
     
     </tr>
     
     
     
     </table>
          
     
         
              ';
    
    
    PDF::SetTitle('Transaction History');
    PDF::AddPage();
    PDF::writeHTML($table, true, false, true, false, '');
    
    PDF::Output('Transaction.pdf');
    }

    else if (!strcmp($table,"tblledgerpartiesall")){
           
        $sum = 0;
      foreach($data as $d)
      {
         $sum+= $d->Amount;
      }
       
    
    $table='
    <h2 style="text-align:center;" >Transaction History</h2><br>
    <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
    <tbody>
    <tr><br><br><br><br>
    
    <td max-height="20px" ><h2>Total Amount : '.$sum.' </h2></td>
    
    </tr><tr><td max-height="20px"><h3>Filter by : '.$category.'</h3></td></tr>
    </tbody>
    </table> <br><br>
    <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
      <tbody>
          <tr>
              <th max-width:50px;><b>Transaction ID</b></th>
              <th max-width:50px;><b>Invoice Number</b></th>
              <th max-width:50px;><b>Party Name</b></th>
            
              <th max-width:50px;><b>Account Name</b></th>
              <th max-width:50px;><b>Category</b></th>
              <th max-width:50px;><b>Transaction Date</b></th>
              <th max-width:50px;><b>Amount</b></th>
              
          </tr>
      </tbody>
     
      </table> ';
    
     
    
    foreach ($data as $d){
        
    
        $table=$table.'
       
    <table cellpadding = "2" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr>
        <td height:80px;>'.$d->TransactionID.'</td> 
        <td height:80px;>'.$d->InvoiceNo.'</td>
        <td height:80px;>'.$d->PartyName.'</td>
       
        <td height:80px;>'.$d->AccountName.'</td>
        <td height:80px;>'.$d->TransactionCatogery.'</td>
        <td height:80px;>'.$d->DateStamp.'</td>
        <td height:80px;>'.$d->Amount.'</td>
        </tr>
        </tbody>
    </table> 
    
         ';}
         $table=$table.'
       
         <table border="0">
     <br>
     <br>
     
     <br>
     <br>
     <br>
     <br>
     <br>
     
     
     
     
     <tr>
     
     
     <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>
     
     
     
     
     </tr>
     
     
     
     </table>
          
     
         
              ';
    
    
    PDF::SetTitle('Transaction History');
    PDF::AddPage();
    PDF::writeHTML($table, true, false, true, false, '');
    
    PDF::Output('Transaction.pdf');
    }
    
    else if ((!strcmp($table,"All"))&&(!strcmp($category,"Transportation Charges"))){
           
        $sum = 0;
      foreach($data as $d)
      {
         $sum+= $d->Amount;
      }
       
    
    $table='
    <h2 style="text-align:center;" >Transaction History</h2><br>
    <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
    <tbody>
    <tr><br><br><br><br>
     
    <td max-height="20px" ><h2>Total Amount : '.$sum.' </h2></td>
    
    </tr><tr><td max-height="20px"><h3>Filter by : '.$category.'</h3></td></tr>
    </tbody>
</table> <br><br>
    <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
      <tbody>
          <tr>
              <th><b>Transaction ID</b></th>
              <th><b>Invoice Number</b></th>
              <th><b>Account Name</b></th>
              <th><b>Category</b></th>
              <th><b>Transaction Date</b></th>
              <th><b>Amount</b></th>
              
              
          </tr>
      </tbody>
     
      </table> ';

     

    foreach ($data as $d){
        

        $table=$table.'
       
    <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr>
        <td max-height="20px">'.$d->TransactionID.'</td> 
        <td max-height="20px">'.$d->InvoiceNo.'</td> 
        <td>'.$d->AccountName." ($d->AccountNumber)".'</td>
        <td>'.$d->TransactionCatogery.'</td>
        <td>'.$d->DateStamp.'</td>
        <td>'.$d->Amount.'</td>
        
        </tr>
        </tbody>
    </table> 

         ';}
         $table=$table.'
       
         <table border="0">
     <br>
     <br>
     
     <br>
     <br>
     <br>
     <br>
     <br>
     
     
     
     
     <tr>
     
     
     <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>
     
     
     
     
     </tr>
     
     
     
     </table>
          
     
         
              ';
    
    
    PDF::SetTitle('Transaction History');
    PDF::AddPage();
    PDF::writeHTML($table, true, false, true, false, '');

    PDF::Output('Transaction.pdf');
}

 

    else if (!strcmp($table,"tblexpenseheads")){
                
        $sum = 0;
        foreach($data as $d)
        {
           $sum+= $d->Amount;
        }
         
      
      $table='
      <h2 style="text-align:center;" >Transaction History</h2><br>
      <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
      <tbody>
      <tr><br><br><br><br>
      
      <td max-height="20px" ><h2>Total Amount : '.$sum.' </h2></td>
      
      </tr><tr><td max-height="20px"><h3>Filter by : '.$category.'</h3></td></tr>
      </tbody>
  </table> <br><br>
      <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
        <tbody>
            <tr>
                <th><b>Transaction ID</b></th>
                
                <th><b>Expense Name</b></th>
               
                <th><b>Account Name</b></th>
                <th><b>Category</b></th>
                <th><b>Transaction Date</b></th>
                <th><b>Amount</b></th>
                
                
            </tr>
        </tbody>
       
        </table> ';


    foreach ($data as $d){
        

        $table=$table.'
       
    <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr>
        <td max-height="20px">'.$d->TransactionID.'</td>
       
        <td>'.$d->ExpenseHead.'</td>
        <td>'.$d->AccountName." ($d->AccountNumber)".'</td>
        <td>'.$d->TransactionCatogery.'</td>
        <td>'.$d->DateStamp.'</td>
        <td>'.$d->Amount.'</td>
        
        </tr>
        </tbody>
    </table> 

         ';


    }$table=$table.'
       
    <table border="0">
<br>
<br>

<br>
<br>
<br>
<br>
<br>




<tr>


<td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>




</tr>



</table>
     

    
         ';
    
    PDF::SetTitle('Transaction History');
    PDF::AddPage();
    PDF::writeHTML($table, true, false, true, false, '');

    PDF::Output('Transaction.pdf');
}



else if (!strcmp($table,"customeinformation")){
                
    $sum = 0;
    foreach($data as $d)
    {
       $sum+= $d->Amount;
    }
     
  
  $table='
  <h2 style="text-align:center;" >Transaction History</h2><br>
  <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
  <tbody>
  <tr><br><br><br><br>
   
  <td max-height="20px" ><h2>Total Amount : '.$sum.' </h2></td>
  
  </tr><tr><td max-height="20px"><h3>Filter by : '.$category.'</h3></td></tr>
  </tbody>
</table> <br><br>
  <table cellpadding = "1" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
    <tbody>
        <tr>
            <th height="15"><b>Transaction ID</b></th>
            <th height="15"><b>Invoice Number</b></th>
            <th height="15 "><b>Customer Name</b></th>
           
            <th height="15"><b>Account Name</b></th>
            <th height="15"><b>Category</b></th>
            <th height="15 "><b>Transaction Date</b></th>
            <th height="15"><b>Amount</b></th>
            
            
        </tr>
    </tbody>
   
    </table> ';


    foreach ($data as $d){
        

        $table=$table.'
       
    <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr>
        <td max-height="20px">'.$d->TransactionID.'</td>
        <td>'.$d->InvoiceNo.'</td>
        <td>'.$d->CustomerName.'</td>
        
        <td>'.$d->AccountName." ($d->AccountNumber)".'</td>
        <td>'.$d->TransactionCatogery.'</td>
        <td>'.$d->DateStamp.'</td>
        <td>'.$d->Amount.'</td>
        
        </tr>
        </tbody>
    </table> 
     

    
         ';

           

  
    }

    $table=$table.'
       
    <table border="0">
<br>
<br>

<br>
<br>
<br>
<br>
<br>




<tr>


<td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>




</tr>



</table>
     

    
         ';


    PDF::SetTitle('Transaction History');
    PDF::AddPage();
    PDF::writeHTML($table, true, false, true, false, '');

    PDF::Output('Transaction.pdf');
}


else if (!strcmp($table,"tblledgerparties")){
    $sum = 0;
          foreach($data as $d)
          {
             $sum+= $d->Amount;
          }
           
        
        $table='
        <h2 style="text-align:center;" >Transaction History</h2><br>
        <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr><br><br><br><br>
         
        <td max-height="20px" ><h2>Total Amount : '.$sum.' </h2></td>
        
        </tr><tr><td max-height="20px"><h3>Filter by : '.$category.'</h3></td></tr>
        </tbody>
        </table> 
        <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
          <tbody>
              <tr>
                  <th><b>Transaction ID</b></th>
                  <th><b>Invoice Number</b></th>
                  <th><b>Employee Name</b></th>
                 
                  <th><b>Account Name</b></th>
                  <th><b>Category</b></th>
                  <th><b>Transaction Date</b></th>
                  <th><b>Amount</b></th>
                  
                  
              </tr>
          </tbody>
         
          </table> ';
 

    foreach ($data as $d){
        

        $table=$table.'
       
    <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr>
        <td max-height="20px">'.$d->TransactionID.'</td>
        <td>'.$d->InvoiceNo.'</td>
        <td>'.$d->PartyName.'</td>
       
        <td>'.$d->AccountName." ($d->AccountNumber)".'</td>
        <td>'.$d->TransactionCatogery.'</td>
        <td>'.$d->DateStamp.'</td>
        <td>'.$d->Amount.'</td>
        
        </tr>
        </tbody>
    </table> 

         ';

         

  
    }
    $table=$table.'
       
    <table border="0">
<br>
<br>

<br>
<br>
<br>
<br>
<br>




<tr>


<td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>




</tr>



</table>
     

    
         ';
    PDF::SetTitle('Transaction History');
    PDF::AddPage();
    PDF::writeHTML($table, true, false, true, false, '');

    PDF::Output('Transaction.pdf');
}
else if(!strcmp($table,"All")){
                
            $data=DB:: select('select * from vw_transaction_flow  where   TransactionCatogery="'.$category.'"' );
            
        }


    }


 public static function printTrasactionHistory($date1,$date2,$category,$table,$value)
    {
        $columnName='';
        if(!strcmp($value,"All")){ 
             
             if (!strcmp($category,"tblledgerpartiesall")){
                $data=DB:: select('select * from vw_transaction_flow where  DateStamp between "'.$date1 .'"and"'.$date2.'" and PaidTo IS NOT NULL and PaidTo <>0 ');
               
            }
            
            
            else{
            $data=DB:: select('select * from vw_transaction_flow  where DateStamp between "'.$date1.'"and"'.$date2.'" and TransactionCatogery="'.$table.'"' );
           
        }
        }
       
       else if (!strcmp($category,"tblledgerpartiesall")){
            $data=DB:: select('select * from vw_transaction_flow where  DateStamp between "'.$date1 .'"and"'.$date2.'" and PaidTo="'.$value.'"');
            
        }
       else if(strcmp($value,"All")){
          
        
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

            
            $data=DB:: select('select * from vw_transaction_flow  where DateStamp between "'.$date1 .'"and"'.$date2.'"  and TransactionCatogery="'.$table.'" and '.$columnName.'='.$value );
            
        }
       
        if (!strcmp($category,"tblemployees")){
           
            $sum = 0;
          foreach($data as $d)
          {
             $sum+= $d->Amount;
          }
           
        
        $table='
        <h2 style="text-align:center;" >Transaction History</h2><br>
        <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr><br><br><br><br>
        <td max-height="20px"><h3>From: '.$date1.'</h3></td>
        <td max-height="20px"><h3>To: '.$date2.' </h3></td>
        <td max-height="20px" ><h2>Total Amount : '.$sum.' </h2></td>
        
        </tr><tr><td max-height="20px"><h3>Filter by : '.$table.'</h3></td></tr>
        </tbody>
    </table> <br><br>
        <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
          <tbody>
              <tr>
                  <th><b>Transaction ID</b></th>
                  
                  <th><b>Employee Name</b></th>
                 
                  <th><b>Account Name</b></th>
                  <th><b>Category</b></th>
                  <th><b>Transaction Date</b></th>
                  <th><b>Amount</b></th>
                  
                  
              </tr>
          </tbody>
         
          </table> ';
 
         

        foreach ($data as $d){
            

            $table=$table.'
           
        <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
            <tbody>
            <tr>
            <td max-height="20px">'.$d->TransactionID.'</td>
           
            <td>'.$d->FirstName." ".$d->LastName .'</td>
            
            <td>'.$d->AccountName." ($d->AccountNumber)".'</td>
            <td>'.$d->TransactionCatogery.'</td>
            <td>'.$d->DateStamp.'</td>
            <td>'.$d->Amount.'</td>
            
            </tr>
            </tbody>
        </table> 

             ';
            }
             $table=$table.'
       
    <table border="0">
<br>
<br>

<br>
<br>
<br>
<br>
<br>




<tr>


<td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>




</tr>



</table>
     

    
         ';

      
        
        
        PDF::SetTitle('Transaction History');
        PDF::AddPage();
        PDF::writeHTML($table, true, false, true, false, '');

        PDF::Output('Transaction.pdf');
    }
    else if (!strcmp($category,"tblledgerpartiesall")){
           
        $sum = 0;
      foreach($data as $d)
      {
         $sum+= $d->Amount;
      }
       
    
    $table='
    <h2 style="text-align:center;" >Transaction History</h2><br>
    <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
    <tbody>
    <tr><br><br><br><br>
    
    <td max-height="20px" ><h2>Total Amount : '.$sum.' </h2></td>
    <td max-height="20px"><h3>From: '.$date1.'</h3></td>
    <td max-height="20px"><h3>To: '.$date2.' </h3></td>
    </tr><tr><td max-height="20px"><h3>Filter by : '.$table.'</h3></td></tr>
    </tbody>
    </table> <br><br>
    <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
      <tbody>
          <tr>
              <th max-width:50px;><b>Transaction ID</b></th>
              <th max-width:50px;><b>Invoice Number</b></th>
              <th max-width:50px;><b>Party Name</b></th>
            
              <th max-width:50px;><b>Account Name</b></th>
              <th max-width:50px;><b>Category</b></th>
              <th max-width:50px;><b>Transaction Date</b></th>
              <th max-width:50px;><b>Amount</b></th>
              
          </tr>
      </tbody>
     
      </table> ';
    
     
    
    foreach ($data as $d){
        
    
        $table=$table.'
       
    <table cellpadding = "2" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr>
        <td height:80px;>'.$d->TransactionID.'</td> 
        <td height:80px;>'.$d->InvoiceNo.'</td>
        <td height:80px;>'.$d->PartyName.'</td>
       
        <td height:80px;>'.$d->AccountName.'</td>
        <td height:80px;>'.$d->TransactionCatogery.'</td>
        <td height:80px;>'.$d->DateStamp.'</td>
        <td height:80px;>'.$d->Amount.'</td>
        </tr>
        </tbody>
    </table> 
    
         ';}
         $table=$table.'
       
         <table border="0">
     <br>
     <br>
     
     <br>
     <br>
     <br>
     <br>
     <br>
     
     
     
     
     <tr>
     
     
     <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>
     
     
     
     
     </tr>
     
     
     
     </table>
          
     
         
              ';
    
    
    PDF::SetTitle('Transaction History');
    PDF::AddPage();
    PDF::writeHTML($table, true, false, true, false, '');
    
    PDF::Output('Transaction.pdf');
    }

   else if ((!strcmp($category,"All"))&&(!strcmp($table,"Transportation Charges"))){
           
        $sum = 0;
      foreach($data as $d)
      {
         $sum+= $d->Amount;
      }
       
    
    $table='
    <h2 style="text-align:center;" >Transaction History</h2><br>
    <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
    <tbody>
    <tr><br><br><br><br>
    <td max-height="20px"><h3>From: '.$date1.'</h3></td>
    <td max-height="20px"><h3>To: '.$date2.' </h3></td>
    <td max-height="20px" ><h2>Total Amount : '.$sum.' </h2></td>
    
    </tr><tr><td max-height="20px"><h3>Filter by : '.$table.'</h3></td></tr>
    </tbody>
</table> <br><br>
    <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
      <tbody>
          <tr>
              <th><b>Transaction ID</b></th>
              <th><b>Account Name</b></th>
              <th><b>Category</b></th>
              <th><b>Transaction Date</b></th>
              <th><b>Amount</b></th>
              
              
          </tr>
      </tbody>
     
      </table> ';

     

    foreach ($data as $d){
        

        $table=$table.'
       
    <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr>
        <td max-height="20px">'.$d->TransactionID.'</td> 
        <td>'.$d->AccountName." ($d->AccountNumber)".'</td>
        <td>'.$d->TransactionCatogery.'</td>
        <td>'.$d->DateStamp.'</td>
        <td>'.$d->Amount.'</td>
        
        </tr>
        </tbody>
    </table> 

         ';}
         $table=$table.'
       
         <table border="0">
     <br>
     <br>
     
     <br>
     <br>
     <br>
     <br>
     <br>
     
     
     
     
     <tr>
     
     
     <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>
     
     
     
     
     </tr>
     
     
     
     </table>
          
     
         
              ';
    
    
    PDF::SetTitle('Transaction History');
    PDF::AddPage();
    PDF::writeHTML($table, true, false, true, false, '');

    PDF::Output('Transaction.pdf');
}

else if (!strcmp($table,"Everything")){
           
    $sum = 0;
  foreach($data as $d)
  {
     $sum+= $d->Amount;
  }
   

$table='
<h2 style="text-align:center;" >Transaction History</h2><br>
<table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
<tbody>
<tr><br><br><br><br>
<td max-height="20px"><h3>From: '.$date1.'</h3></td>
<td max-height="20px"><h3>To: '.$date2.' </h3></td>
<td max-height="20px" ><h2>Total Amount : '.$sum.' </h2></td>

</tr><tr><td max-height="20px"><h3>Filter by : '.$table.'</h3></td></tr>
</tbody>
</table> <br><br>
<table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
  <tbody>
      <tr>
          <th><b>Transaction ID</b></th>
          <th><b>Invoice Number</b></th>
          <th><b>Party Name</b></th>
          <th><b>Employee Name</b></th>
          <th><b>Customer Name</b></th>
          <th><b>Expense Head</b></th>
          <th><b>Account Name</b></th>
          <th><b>Category</b></th>
          <th><b>Transaction Date</b></th>
          <th><b>Amount</b></th>
          
      </tr>
  </tbody>
 
  </table> ';

 

foreach ($data as $d){
    

    $table=$table.'
   
<table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
    <tbody>
    <tr>
    <td max-height="20px">'.$d->TransactionID.'</td> 
    <td>'.$d->InvoiceNo.'</td>
    <td>'.$d->PartyName.'</td>
     <td>'.$d->FirstName." ".$d->LastName .'</td>
    <td>'.$d->CustomerName.'</td>
    <td>'.$d->ExpenseHead.'</td>
    <td>'.$d->AccountName.'</td>
    <td>'.$d->TransactionCatogery.'</td>
    <td>'.$d->DateStamp.'</td>
    <td>'.$d->Amount.'</td>
    </tr>
    </tbody>
</table> 

     ';}
     $table=$table.'
   
     <table border="0">
 <br>
 <br>
 
 <br>
 <br>
 <br>
 <br>
 <br>
 
 
 
 
 <tr>
 
 
 <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>
 
 
 
 
 </tr>
 
 
 
 </table>
      
 
     
          ';


PDF::SetTitle('Transaction History');
PDF::AddPage();
PDF::writeHTML($table, true, false, true, false, '');

PDF::Output('Transaction.pdf');
}


    else if (!strcmp($category,"tblexpenseheads")){
                
        $sum = 0;
        foreach($data as $d)
        {
           $sum+= $d->Amount;
        }
         
      
      $table='
      <h2 style="text-align:center;" >Transaction History</h2><br>
      <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
      <tbody>
      <tr><br><br><br><br>
      <td max-height="20px"><h3>From: '.$date1.'</h3></td>
      <td max-height="20px"><h3>To: '.$date2.' </h3></td>
      <td max-height="20px" ><h2>Total Amount : '.$sum.' </h2></td>
      
      </tr><tr><td max-height="20px"><h3>Filter by : '.$table.'</h3></td></tr>
      </tbody>
  </table> <br><br>
      <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
        <tbody>
            <tr>
                <th><b>Transaction ID</b></th>
                
                <th><b>Expense Name</b></th>
               
                <th><b>Account Name</b></th>
                <th><b>Category</b></th>
                <th><b>Transaction Date</b></th>
                <th><b>Amount</b></th>
                
                
            </tr>
        </tbody>
       
        </table> ';


    foreach ($data as $d){
        

        $table=$table.'
       
    <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr>
        <td max-height="20px">'.$d->TransactionID.'</td>
       
        <td>'.$d->ExpenseHead.'</td>
        <td>'.$d->AccountName." ($d->AccountNumber)".'</td>
        <td>'.$d->TransactionCatogery.'</td>
        <td>'.$d->DateStamp.'</td>
        <td>'.$d->Amount.'</td>
        
        </tr>
        </tbody>
    </table> 

         ';


    }$table=$table.'
       
    <table border="0">
<br>
<br>

<br>
<br>
<br>
<br>
<br>




<tr>


<td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>




</tr>



</table>
     

    
         ';
    
    PDF::SetTitle('Transaction History');
    PDF::AddPage();
    PDF::writeHTML($table, true, false, true, false, '');

    PDF::Output('Transaction.pdf');
}



else if (!strcmp($category,"customeinformation")){
                
    $sum = 0;
    foreach($data as $d)
    {
       $sum+= $d->Amount;
    }
     
  
  $table='
  <h2 style="text-align:center;" >Transaction History</h2><br>
  <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
  <tbody>
  <tr><br><br><br><br>
  <td max-height="20px"><h3>From: '.$date1.'</h3></td>
  <td max-height="20px"><h3>To: '.$date2.' </h3></td>
  <td max-height="20px" ><h2>Total Amount : '.$sum.' </h2></td>
  
  </tr><tr><td max-height="20px"><h3>Filter by : '.$table.'</h3></td></tr>
  </tbody>
</table> <br><br>
  <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
    <tbody>
        <tr>
            <th><b>Transaction ID</b></th>
            <th><b>Invoice Number</b></th>
            <th><b>Customer Name</b></th>
           
            <th><b>Account Name</b></th>
            <th><b>Category</b></th>
            <th><b>Transaction Date</b></th>
            <th><b>Amount</b></th>
            
            
        </tr>
    </tbody>
   
    </table> ';


    foreach ($data as $d){
        

        $table=$table.'
       
    <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr>
        <td max-height="20px">'.$d->TransactionID.'</td>
        <td>'.$d->InvoiceNo.'</td>
        <td>'.$d->CustomerName.'</td>
        
        <td>'.$d->AccountName." ($d->AccountNumber)".'</td>
        <td>'.$d->TransactionCatogery.'</td>
        <td>'.$d->DateStamp.'</td>
        <td>'.$d->Amount.'</td>
        
        </tr>
        </tbody>
    </table> 
     

    
         ';

           

  
    }

    $table=$table.'
       
    <table border="0">
<br>
<br>

<br>
<br>
<br>
<br>
<br>




<tr>


<td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>




</tr>



</table>
     

    
         ';


    PDF::SetTitle('Transaction History');
    PDF::AddPage();
    PDF::writeHTML($table, true, false, true, false, '');

    PDF::Output('Transaction.pdf');
}


else if (!strcmp($category,"tblledgerparties")){
    $sum = 0;
          foreach($data as $d)
          {
             $sum+= $d->Amount;
          }
           
        
        $table='
        <h2 style="text-align:center;" >Transaction History</h2><br>
        <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr><br><br><br><br>
        <td max-height="20px"><h3>From: '.$date1.'</h3></td>
        <td max-height="20px"><h3>To: '.$date2.' </h3></td>
        <td max-height="20px" ><h2>Total Amount : '.$sum.' </h2></td>
        
        </tr><tr><td max-height="20px"><h3>Filter by : '.$table.'</h3></td></tr>
        </tbody>
        </table> 
        <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
          <tbody>
              <tr>
                  <th><b>Transaction ID</b></th>
                  <th><b>Invoice Number</b></th>
                  <th><b>Employee Name</b></th>
                 
                  <th><b>Account Name</b></th>
                  <th><b>Category</b></th>
                  <th><b>Transaction Date</b></th>
                  <th><b>Amount</b></th>
                  
                  
              </tr>
          </tbody>
         
          </table> ';
 

    foreach ($data as $d){
        

        $table=$table.'
       
    <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
        <tbody>
        <tr>
        <td max-height="20px">'.$d->TransactionID.'</td>
        <td>'.$d->InvoiceNo.'</td>
        <td>'.$d->PartyName.'</td>
       
        <td>'.$d->AccountName." ($d->AccountNumber)".'</td>
        <td>'.$d->TransactionCatogery.'</td>
        <td>'.$d->DateStamp.'</td>
        <td>'.$d->Amount.'</td>
        
        </tr>
        </tbody>
    </table> 

         ';

         

  
    }
    $table=$table.'
       
    <table border="0">
<br>
<br>

<br>
<br>
<br>
<br>
<br>




<tr>


<td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>




</tr>



</table>
     

    
         ';
    PDF::SetTitle('Transaction History');
    PDF::AddPage();
    PDF::writeHTML($table, true, false, true, false, '');

    PDF::Output('Transaction.pdf');
}
else if(!strcmp($category,"All")){
                
            $data=DB:: select('select * from vw_transaction_flow  where DateStamp between "'.$date1 .'"and"'.$date2.'" and TransactionCatogery="'.$table.'"' );
            
        }


} 
    public static function loadCategoryData($table){
        $option='';
        if($table=="tblledgerpartiesall"){
            $data=DB:: select('select * from tblledgerparties');
            $option='<option value=""></option>';
                foreach ($data as $d){
                    $option=$option.'
                    <option value='.$d->LID.'>'.$d->PartyName.'</option>';
                }
                return $option;
        }
        if($table!="All" AND $table!="tblledgerpartiesall"){
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

    



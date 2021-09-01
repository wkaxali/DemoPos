<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class supplierHistoryController extends Controller
{
    public static function getSupplierHistory(){
        $data=DB:: select('select * from vw_transaction_flow where Category="Supplier" and TransactionCatogery <> "Amount Transfer"');
       
        return $data ;
    }

    public static function filterSupplierData($sup){
        $data=0;
        if($sup=="All"){
            $data=DB:: select('select * from vw_transaction_flow where Category="Supplier" and TransactionCatogery <> "Amount Transfer"');
        
        }
        else if($sup!="All"){
            $data=DB:: select('select * from vw_transaction_flow where Category="Supplier"  and TransactionCatogery <> "Amount Transfer" and PartyName ="'.$sup.'"');
        
        }

        return $data ;
    }

    public static function filterSupplierDateData($date1,$date2,$sup){
        $data=0;
        if($sup=="All"){
            $data=DB:: select('select * from vw_transaction_flow where Category="Supplier"  and TransactionCatogery <> "Amount Transfer" and DateStamp between "'.$date1.'"and"'.$date2.'"');
        
        }
        else if($sup!="All"){
            $data=DB:: select('select * from vw_transaction_flow where Category="Supplier"  and TransactionCatogery <> "Amount Transfer" and PartyName="'.$sup.'" and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }
        
        return $data ;
    }

    public static function getDetails($id){
       
        $table='<h1 align="center"> Supplier Transactions Details</h1>
        <br><br><br>
    
        <table  align="center" cellpadding = "7" cellspacing = "0"  border="1" style="font-size:22.2px margin-left:49px;"><thead></thead>
          <tbody>
              <tr>
              <th style="text-align:center;">Transaction ID</th>
              <th style="text-align:center;">Party Name</th> 
              <th style="text-align:center;">Account Name</th>
           
              <th style="text-align:center;">Total Purchase Amount</th>
          
           
              <th style="text-align:center;">Transaction Date</th> 
                  
                  
              </tr>
           
         
            ';
 
         
          $data=DB::select('select * from vw_transaction_flow where Category="Supplier"  and TransactionCatogery <> "Amount Transfer" and TransactionID ="'.$id.'"');
        foreach ($data as $d){
            

            $table=$table.'
           
            
            <tr>
            <td style="text-align:center;" height:80px;>'.$d->TransactionID.'</td> 
              <td style="text-align:center;" height:80px;>'.$d->PartyName.'</td>
              <td style="text-align:center;" height:80px;>'.$d->AccountName.' ('.$d->AccountNumber.')</td>
        
              <td style="text-align:center;" height:80px;>'.$d->Amount.'</td>
              
             
            
              
              <td height:80px;>'.$d->DateStamp.'</td>
            
            </tr>
            
        

             ';}
             return $table;
     
    }

    
}

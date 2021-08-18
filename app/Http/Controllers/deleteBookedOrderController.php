<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deleteBookedOrderController extends Controller
{
    public function deleteOrder(Request $request,$OID){
        
        $purchaseData=DB:: select('select * from tblpurchaseorder where SupplierID = 1 and InvoiceNumber='.$orderID);
        $transactionData=DB:: select('select * from tbltransactionflow where TransactionCatogery = "Booking Order" and InvoiceNo='.$orderID);
        
        $orderID = $OID;
        $LID=globalVarriablesController::selfLedgerID();
        $totlpaid=$purchaseData->AmountPaid;
        $totRemaining=$purchaseData->Balance;
        $AID=$transactionData->PaidVia;

        $oldSelfBalance=LedgerPartiesController::getPartyBalance($LID);
        $selfBalance=floatval($oldSelfBalance)+floatval($totlpaid);
        LedgerPartiesController::UpdatePartiesBalance($LID,$selfBalance);

        $oldCompanyBalance=LedgerPartiesController::getPartyBalance(1);
        $currentCompanyBalance=floatval($oldCompanyBalance)-floatval($totRemaining);
        LedgerPartiesController::UpdatePartiesBalance(1,$currentCompanyBalance);

        $OldAccBalance=accountsController::getAccountBalance($AID);
        $newAccountBalance=floatval($OldAccBalance)+floatval($totlpaid);
        accountsController::UpdateNewBalance($AID,$newAccountBalance);

        $deleteOrder = DB:: delete("delete from tblpurchaseorder where SupplierID = 1 and InvoiceNumber=".$orderID);
        $deleteOrderDetails = DB:: delete("delete from tblpurchaseoorderdetaile where InvoiceNumber=".$orderID);
        $deleteTransaction = DB:: delete("delete from tbltransactionflow where TransactionCatogery = 'Booking Order' and InvoiceNo=".$orderID);
       
        return "Order ".$orderID." is deleted";
     }
}

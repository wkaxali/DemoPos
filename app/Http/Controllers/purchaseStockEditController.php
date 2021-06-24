<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Http\Controllers\UpdateStocksController;
use App\Http\Controllers\LedgerPartiesController;
use App\Http\Controllers\accountsController;

use PDF;
use NumberToWords\NumberToWords;


class purchaseStockEditController extends Controller
{
    public function updatePurchasedStock(Request $request,$data,$InvoiceID){

        $Array=json_decode($data);
        $tot=$Array[1];
        $OverAllDiscount= $Array[2];
        $AmountAfterDiscount=$Array[3];
        $tax =$Array[4];
        $netTotal=$Array[5];
        $AP=$Array[6];
        $RBI=$Array[7];
        $SID=$Array[8];
        $CLB=$Array[9];
        $CCB=$Array[10];
        $AID=$Array[11];
        $ProductsInTable=$Array[0];
        $dateNow = Carbon::now()->toDateString();
        ////getAllInvoiceDetails
        $oldPusrchase=UpdateStocksController::getInvoiceStock($InvoiceID);
        foreach($oldPusrchase as $product){
        $qty=$product->OrderedQuantiy;
        $PID=$product->ProductSerial;
        $oldStock= UpdateStocksController::getCurrentStock($PID);
        $newStock= floatval($oldStock)-floatval($qty);
        UpdateStocksController::updateStock($PID,$newStock);

        }
        
        $LID=globalVarriablesController::selfLedgerID();
        
        $amount = DB::table('tblpurchaseorder')
            ->where('InvoiceNumber', '=', $InvoiceID)
             ->first()->AmountPaid;
        $OldSID = DB::table('tblpurchaseorder')
            ->where('InvoiceNumber', '=', $InvoiceID)
             ->first()->SupplierID;
        $OldRmb = DB::table('tblpurchaseorder')
             ->where('InvoiceNumber', '=', $InvoiceID)
              ->first()->Balance;

       
        //Old customer balance Update
        $oldSupplierBalance=LedgerPartiesController::getSupplierBalance($OldSID);
        $currentSupplierBalance=floatval($oldSupplierBalance)-floatval($OldRmb);
        LedgerPartiesController::UpdateSupplierBalance($OldSID,$currentSupplierBalance);


       
       
        // Account is changed
        $OldAID = DB::table('tbltransactionflow')
        ->where([['InvoiceNo', '=', $InvoiceID],['TransactionCatogery', '=', 'Stock Purchased']])
        ->first()->PaidVia;

        $OldAccBalance=accountsController::getAccountBalance($OldAID);
        $newAccountBalance=floatval($OldAccBalance)+floatval($amount);
        accountsController::UpdateNewBalance($OldAID ,$newAccountBalance);
        
        //Party Balance
        $SelfBalance = LedgerPartiesController::getPartyBalance($LID);
        $newSelfBalance =floatval($SelfBalance) + floatval($amount);
        LedgerPartiesController::UpdatePartiesBalance($LID, $newSelfBalance);
      
        $oldSupplierBalance=LedgerPartiesController::getSupplierBalance($SID);
        $currentSuppierBalance=floatval($oldSupplierBalance)-floatval($RBI);
        LedgerPartiesController::UpdateSupplierBalance($SID,$currentSuppierBalance);

        //  //Parties Balance
        $oldSelfBalance= LedgerPartiesController::getPartyBalance($LID);
        $newSelfBalance=floatval($oldSelfBalance)-floatval($AP);
        LedgerPartiesController::UpdatePartiesBalance($LID, $newSelfBalance);

        //  //Accounts Balance
        $OldAccBalance=accountsController::getAccountBalance($AID);
        $newAccountBalance=floatval($OldAccBalance)-floatval($AP);
        accountsController::UpdateNewBalance($AID,$newAccountBalance);

        self::deleteInTblPurchaseOrderDetail($InvoiceID);
        self::insertInDetailedOrder($Array[0],$InvoiceID,$dateNow);
        self::updateInTblPurchaseOrder($InvoiceID,$tot,$OverAllDiscount,$tax,$netTotal,$AP,$RBI,$SID,$AID);

    }

    public function insertInDetailedOrder($OrderDetails,$InvoiceID,$date){
        foreach ($OrderDetails as $row){
            $DSID=DB::table('tblpurchaseoorderdetaile')->insertGetId([
                'InvoiceNumber'=>$InvoiceID,
                'ProductSerial'=>$row[0],
                'PurchasePricePerUnit'=>$row[1],
                'OrderedQuantiy'=>$row[2],
                'DiscountOffered'=>$row[3],
                'DateStamp'=>$date,
                'TotalAmount'=>$row[4],
                'NetAmount'=>$row[4],
                'Activity'=>"Purchased Stock"
            ]);

            $oldStock= UpdateStocksController::getCurrentStock($row[0]);
            $newStock= floatval($oldStock)+floatval($row[2]);
            UpdateStocksController::updateStock($row[0],$newStock);
        }
        return $InvoiceID;
    }
      
    public function deleteInTblPurchaseOrderDetail($IID){
        $Deleted = DB:: delete("delete from tblpurchaseoorderdetaile where InvoiceNumber=".$IID); 
        print($Deleted);
    }

    public function updateInTblPurchaseOrder($InvoiceID,$tot,$OverAllDiscount,$tax,$netTotal,$AP,$RBI,$SID,$AID){
        DB::table('tblpurchaseorder')
        ->where('InvoiceNumber', $InvoiceID)
        ->update([
            'TotalAmount'=>$tot,
            'Discount'=>$OverAllDiscount,
            'VAT'=>$tax,
            'NetTotal'=>$netTotal,
            'AmountPaid'=>$AP,
            'Balance'=>$RBI,
            'SupplierID'=>$SID
        ]);

        //Balance before this transaction and ater this transaction will be edited there
        DB::table('tbltransactionflow')
        ->where([['InvoiceNo', '=', $InvoiceID],['TransactionCatogery', '=', 'Stock Purchased']])
        ->update([
            'Amount'=>$tot,
            'PaidTo'=>$SID,
            'PaidVia'=>$AID
        ]); 
    }

}

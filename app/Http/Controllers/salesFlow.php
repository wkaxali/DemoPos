<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use NumberToWords\NumberToWords;
//https://github.com/kwn/number-to-words
use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\saleRequestController;
use App\Http\Controllers\UpdateStocksController;
use App\Http\Controllers\TransactionFlow;
use App\Http\Controllers\LedgerPartiesController;
use App\Http\Controllers\accountsController;
use DB;
use PDF;


class salesFlow extends Controller
{
    function viewSales(){
      $data=DB:: select('select * from vw_customersale_invoice');
      return $data;
    }
    

    public function SalesFlow(Request $request,$data){
     // order = [pid,totwT,discount,netTotal,amp,rmb,CID];
      $Array=json_decode($data);
      $pid=$Array[0];
      $tot=$Array[1];
      $OverAllDiscount= $Array[2];
      $AmountAfterDiscount=$Array[3];
      $amp =$Array[4];
      $rmb=$Array[5];
      $CID=$Array[6];
      $TransactionMode=$Array[7];
      $AID=$Array[8];
      $customerName =$Array[9];
      $CNIC=$Array[10];
      $address=$Array[11];
      $contact=$Array[12];
      $fatherName=$Array[13];
      $engineNo=$Array[14];
      $chassisNo=$Array[15];
      $color=$Array[16];
      $description=$Array[17];
      $productName=$Array[18];
      $city=$Array[19];
      $receivedBy=$Array[20];
      $totalCost=$Array[21];
      

       //return $TransactionMode;
         
      $dateNow= Carbon::now()->toDateString();//->format('Y-m-d h:iA');

      
       // $d= Carbon::createFromFormat('dd/mm/YYYY HH:MM:SS', $dateNow);
         //return $dateNow;
        
          //tot,discount,gross,tax,netTotal,amp,rmb,CID,CLB,CCB
        //insert into sales order
        
       
        if( $rmb>0){
          $invoiceStatus="Not Cleared";

        }
        else{
          $invoiceStatus="CLEARED";
        }
        $invoiceNumber=DB::table('tblsaleinvoice')->insertGetId([
        'CustomerID'=>$CID,
        'TotalAmount'=>$tot,
        'Discount'=>$OverAllDiscount,
        'DateStamp'=>$dateNow,
        'VAT'=>NULL,
        'NetTotal'=>$AmountAfterDiscount,
        'AmountPaid'=>$amp,
        'Balance'=>$rmb,
        'BillStatus'=>$invoiceStatus,
        'HoldStatus'=>'0',
        'CustomerBalanceBeforeInvoiceBill'=>NULL,
        'CustomerBalanceAfterInvoiceBill'=>NULL,
        'CashPaidBack'=>NULL,
        'CashNote'=>NULL,
        'Remarks'=>NULL,
        'dliveryDate'=>NULL,
        'returnDate' =>NULL,
        'salesPerson'=>$receivedBy
        
        ]);
       // $TransactionMode='2';
        $detailedOrder=array($pid,$tot,"1",$OverAllDiscount,$AmountAfterDiscount,$tot);
       // return  $detailedOrder[1];
        self::insertInDetailedOrder($detailedOrder,$invoiceNumber,$dateNow);
       // TransactionFlow::addInTransactionFlowForSales("1",$invoiceNumber,$dateNow,$amp,"1",NULL,NULL,NULL);
       $oldSelfBalance= LedgerPartiesController::getPartyBalance(2);
        $oldCompanyBalance= LedgerPartiesController::getPartyBalance(1); 
       $LID=2;
        $paidVia=$AID;
        $selfBalance=$oldSelfBalance+$amp;
        TransactionFlow::addTransaction($invoiceNumber,"Credit","Sales",
        $amp,$dateNow,"1",$oldSelfBalance,$selfBalance,NULL,NULL,$LID,"0",$CID,"0",$paidVia,NULL);
       
        LedgerPartiesController::UpdatePartiesBalance(2, $selfBalance);
        $OldAccBalance=accountsController::getAccountBalance($AID);
        $newAccountBalance=floatval($OldAccBalance)+floatval($amp);
        
        accountsController::UpdateNewBalance($AID,$newAccountBalance);
        if($TransactionMode==2){
          $LID=2;
          $paidVia=$AID;
          $oldBalance= LedgerPartiesController::getPartyBalance($LID);
          $currentBalance=floatval ($oldBalance)-floatval ($amp);
          TransactionFlow::addTransaction($invoiceNumber,"Credit","Customer Paid to Company",
          $amp,$dateNow,"2", $oldBalance,$currentBalance,NULL,NULL,$LID,"0",$CID,"1",$paidVia,NULL);
          $oldSelfBalance= LedgerPartiesController::getPartyBalance(2);
          $companyBalance=$oldCompanyBalance-$amp;
        $selfBalance=$oldSelfBalance-$amp;
        LedgerPartiesController::UpdatePartiesBalance(1, $companyBalance);
        LedgerPartiesController::UpdatePartiesBalance(2, $selfBalance);
        $OldAccBalance=accountsController::getAccountBalance($AID);
        $newAccountBalance=floatval($OldAccBalance)-floatval($amp);
       // accountsController::getAccountBalance($AID);
        accountsController::UpdateNewBalance($AID,$newAccountBalance);
          
        }
        $oldCustomerBalance = CustomerController::getCustomerBalance($CID);
        $newCustomerBalance = $oldCustomerBalance + $rmb;
        $updateBalance = CustomerController::UpdateCustomerBalance($CID, $newCustomerBalance);

        UpdateStocksController::UpdateStockStatus($pid,"Sold");

        saleRequestController::getInvoiceSaleRequest($invoiceNumber);

      
        return $invoiceNumber;
    }
    public function insertInDetailedOrder($row,$InvoiceID,$date){
     
       

      $DSID=DB::table('tblsaledetailedinvoice')->insertGetId(['InvoiceNumber'=>$InvoiceID,
      'ProductSerial'=>$row[0],
      'SalePrice'=>$row[1],
      'Quantity'=>$row[2],
      'DiscountOffered'=>$row[3],
      'DateStamp'=>$date,
      
      'TotalAmount'=>$row[5],
      'NetAmount'=>$row[4],
      
      'Activity'=>"Sales",
      'RentedDays'=>0

      ]);
      
      return $DSID;
      

    }
    public function apiCheck()
    {
      $obj = (object) [
        'aString' => 'some string',
        'anArray' => [ 1, 2, 3 ]
    ];
    
    return json_encode($obj);
      # code...
    }
   


    public function getInvoiceNewID(){
      $IID=DB::table('tblsaleinvoice')->max("InvoiceNumber");
     return $IID+1;
     


    }
  public static function getAllInvoiceDetails($InvoiceNo){
      $results=DB::select('select * from vw_customersale_invoice where InvoiceNumber= '.$InvoiceNo);
      return $results;

  }
  public function printSaleInvoice()
  {
      
      

      $newHTML='<table border="0">
      <thead>
          <tr>
              <th><br><h1>FORLAND MODREN MOTORS</h1></th>
              
             
          </tr>
      </thead>
      
      <tbody>
      <tr>
      <br>
      <td>
     
      NTN:82588676-6 <br>

      STRN:3277876204764 <br>
      Customer\'s Copy
      </td>




      
      
      </tr>
      <tr><td align="center"><h1>Sales Invoice</h1></td></tr>


      
      </tbody>


          
  </table>
  <br>
  <br>
  <br>

  <table border="0">
      <tbody>
          <tr>
              <td><br><span style="font-size: medium;">Customer Name</span></td>
              <td align="center"><br>____________</td>
              <td><br><span style="font-size: medium;">Booking No</span></td>
              <td align="center"><br>____________</td>
              
             
          </tr>
          <tr>
              <td><br><span style="font-size: medium;">Address</span></td>
              <td align="center"><br>____________</td>
              <td><br><span style="font-size: medium;">Invoice Number</span></td>
              <td align="center"><br>____________</td>
              
             
          </tr>
          <tr>
              <td><br><span style="font-size: medium;">CNIC/NTN</span></td>
              <td align="center"><br>____________</td>
              <td><br><span style="font-size: medium;">Invoice Date</span></td>
              <td align="center"><br>____________</td>
              
             
          </tr>
          <tr>
              <td><br><span style="font-size: medium;">Contact</span></td>
              <td align="center"><br>____________</td>
              <td><br><span style="font-size: medium;"></span></td>
              <td align="center"><br>____________</td>
              
             
          </tr>
      </tbody>
      </table>
  


<br>
<br>
<br>
<br>
<table border="1" >
<tr ><td>
      <table border="0">
      <thead>
      <tr>
          <td  align="left" bgcolor="#C0C0C0" >
             Description </td>
             <td align="center" bgcolor="#C0C0C0" >color</td>
             <td align="center"bgcolor="#C0C0C0" >Engine No</td>
             <td align="center" bgcolor="	#C0C0C0">Chassis No</td>
             <td align="center" bgcolor="	#C0C0C0">Amount</td>
       
      </tr>
  </thead>
          <tbody >
              <tr >
                  <td ></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
          <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
          <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
      </tbody>
  </table>
  </td>
</tr>
</table>
  


<table border="0">
  <thead>
  <tr>
      <th width="60%" border="1" align="center">
         Total in Word </th>
    
      <th  width="40%" border="1" align="center"> Tootal PKR</th>
    
  </tr>
</thead>
      <tbody>
      <tr>
          <td width="60%" border="1" align="center">1000</td>
          <td width="40%" border="1" align="center">10000</td>
         
        
      </tr>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
     
      <br>
      <tr>
      <td width="60%" border="0"></td>
      <td width="40%" align="center" border="0">_______________________</td>
      
     
    
  </tr>
  <tr>
  <br>
     
      <td width="60%" border="0"></td>
      <td width="40%" align="center" border="0">Sign and Signature</td>
      
     
    
  </tr>
  
  
   
   
  </tbody>
</table>
<br><br> <br>
<br>
<table border="0">

<tr>
  
     
      <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Milat Tractors Limited,Lahore,Tel:0300-0600061  </h4></td>
      
      
     
    
  </tr>
  <tr>
  
     
      <td bgcolor="crimson" align="center" border="0"><h5> Email Adress: forlandmodernmotoprs@yahoo.com </h5></td>
      
      
     
    
  </tr>
  
</table>

  
  
  
  
  
  ';     // $html= $htmldata;

      
      PDF::SetTitle('Sale Invoice');
      PDF::AddPage();
      PDF::writeHTML($newHTML, true, false, true, false, '');

      PDF::Output('saleInvoice.pdf');
     
  }
    
}

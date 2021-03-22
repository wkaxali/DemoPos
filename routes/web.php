<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signInSignUPcontroller;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\saleInvoiceEditController;
use App\Http\Controllers\AddMenucontroller;

use App\Http\Controllers\CustomerViewcotroller;
use App\Http\Controllers\OrderFlowController;
use App\Http\Controllers\CustomerViewController;
use App\Http\Controllers\printServiceSaleInvoice;
use App\Http\Controllers\UpdateStocksController;
use App\Http\Controllers\quotationController;
use App\Http\Controllers\payController;
use App\Http\Controllers\salePrintInvoice;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\assesoriesController;
use App\Http\Controllers\TransactionFlow;
use App\Http\Controllers\printDocuments;
use App\Http\Controllers\userAccountController;

use App\Http\Controllers\expenseController;
use App\Http\Controllers\investorController;
use App\Http\Controllers\salesFlow;
use App\Http\Controllers\taskController;
use App\Http\Controllers\attendanceController;
use App\Http\Controllers\accountsController;
use App\Http\Controllers\getProducts;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\serviceSalesFlow;
use App\Http\Controllers\AdditionalTaxesAndCommissionsController;
use App\Http\Controllers\LedgerPartiesController;
use App\Http\Controllers\AISessionController;
use App\Http\Controllers\saleRequestController;
use App\Http\Controllers\TEST;
use App\Http\Controllers\printServiceInvoice;
use App\Http\Controllers\deliverLetterPrintController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/getsignin1/{data}',[signInSignUPcontroller::class, 'signIn']);
Route::get('/printGatePass/{ID}',[TEST::class, 'gatePass']);
Route::get('/invoiceDetails/{ID}',[serviceSalesFlow::class, 'getAllInvoiceDetails']);
Route::get('/InvoiceRequest',[TEST::class, 'InvoiceRequest']);
Route::get('/deliveryLetter/{ID}',[deliverLetterPrintController::class, 'deliveryLetter']);


Route::get('/editEmployee/{UE}',[employeeController::class, 'editEmployee']);
Route::get('/getDocuments',[printDocuments::class, 'getDocuments']);
Route::get('/fetchAllmenu',[AddMenucontroller::class, 'fetchAllMenu']);
Route::get('/fetchCategories',[AddMenucontroller::class, 'getCategories']);
Route::get('/fetchMenu/{CID}',[AddMenucontroller::class, 'fetchMenu']);
Route::get('/fetchCategoriesInOptions',[AddMenucontroller::class, 'getCategoriesForSelectMenu']);

Route::get('/addNewEmployee/{data}',[employeeController::class, 'addNewEmployee']);
Route::get('/getAllEmployees',[employeeController::class, 'getAllEmployees']);
Route::get('/getsignin/{data}',[signInSignUPcontroller::class, 'InsertAdmin']);
Route::get('/placeOrder/{data}',[OrderFlowController::class, 'OrderFlow']);
Route::get('/getOrderId/{oid}',[OrderFlowController::class, 'getOrderItem']);
Route::get('/getAllProducts',[getProducts::class, 'getAllProducts']);
Route::get('/getProductByCategory/{CID}',[getProducts::class, 'getProductByCategory']);
Route::get('/updateTaskStatus/{data}',[taskController::class, 'updateTaskStatus']);
Route::get('/getPartsAndServices',[getProducts::class, 'getPartsAndServices']);
Route::get('/getAllSupliers',[LedgerPartiesController::class, 'getAllSuplierParties']);
Route::get('/testpdf',[TEST::class, 'getInfo']);
Route::get('/addExpenseHead/{EH}',[expenseController::class, 'addExpenseHead']);
Route::get('/addTaskCategory/{data}',[taskController::class, 'addTaskCategory']);
Route::get('/testpdf/2',[printSaleInvoice::class, 'printSaleInvoice']);

Route::get('/testpdf/3',[TEST::class, 'saleInvoiceRequest']);
//qutationRequest
Route::get('/testpdf/4',[TEST::class, 'gatePass']);

Route::get('/testpdf/5',[TEST::class, 'qutationRequestFinal']);

Route::get('/oqp',[quotationController::class, 'qoutationToPDF']);

//---------------------------//LedgerPartiesController
Route::get('/addCustomer/{data}',[CustomerController::class, 'check']);
Route::get('/insertCustomer/{data}',[CustomerController::class, 'addCustomer']);

Route::get('/getAllCustomers/',[CustomerController::class, 'getAllCustomers']);
Route::get('/getCustomerNames/',[CustomerViewController::class, 'getCustomerNames']);
//Route::get('/getAllSupliers/',[CustomerController::class, 'getAllCustomers']);
Route::get('/getCustomersInfo/{CID}',[CustomerController::class, 'getCustomerDetail']);
Route::get('/getCustomers',[CustomerController::class, 'getCustomers']);

Route::get('/getSuppliersInfo/{SID}',[LedgerPartiesController::class, 'getPartyDetail']);
//__________________________Sales Flow___________________________________
Route::get('/addSalesForSS/{data}',[serviceSalesFlow::class, 'SalesFlow']);
//getInvoiceCustomer/{data}

Route::get('/getSaleInvReq/{id}',[saleRequestController::class, 'getInvoiceSaleRequest']);
Route::get('/addPurchaseForSS/{data}',[OrderFlowController::class, 'PurchaseOrderWithStockUpdate']);
Route::get('/getInvoiceID',[salesFlow::class, 'getInvoiceNewID']);
Route::get('/loadComissionHeads',[AdditionalTaxesAndCommissionsController::class, 'getComissionHeads']);
Route::get('/getInvoiceCustomer/{data}',[serviceSalesFlow::class, 'printSaleRequestOnInvoiceNumber']);
Route::get('/getQuotation/{data}',[quotationController::class, 'getQuotation']);
Route::get('/AddProduct/{data}',[CUDproduct::class, 'insertProduct']);
Route::get('/invetorDetails/{data}',[investorController::class, 'getInvestorDetails']);
Route::get('/getAllInvoiceDetails/{data}',[salesFlow::class, 'getAllInvoiceDetails']);
Route::get('/getInvoiceStock/{data}',[UpdateStocksController::class, 'getInvoiceStock']);
Route::get('/addUser/{data}',[userController::class, 'addnewuser']);

Route::get('/addInvestorProduct/{data}',[investorController::class, 'addInvestorProduct']);
Route::get('/getsignin/{data}',[signInSignUPcontroller::class, 'InsertAdmin']);
Route::get('/placeOrder/{data}',[OrderFlowController::class, 'OrderFlow']);
Route::get('/getOrderId/{oid}',[OrderFlowController::class, 'getOrderItem']);
Route::get('/getOrderId',[OrderFlowController::class, 'getOrderID']);
Route::get('/viewCustomer',[OrderFlowController::class, 'viewCustomer']);
Route::get('/transactionHistory',[OrderFlowController::class, 'transactionHistory']);
Route::get('/transactionHistoryAccounts/{AID}',[TransactionFlow::class, 'getTransactionsForAccounts']);
Route::get('/transactionHistoryParties/{LID}',[TransactionFlow::class, 'getTransactionsForParties']);
Route::get('/debitTransactions',[TransactionFlow::class, 'debitTransactions']);
Route::get('/creditTransactions',[TransactionFlow::class, 'creditTransactions']);
Route::get('/companyLedger',[OrderFlowController::class, 'companyLedger']);
Route::get('/viewStock',[OrderFlowController::class, 'viewStock']);
Route::get('/viewSales',[salesFlow::class, 'viewSales']);
Route::get('/viewExpense',[expenseController::class, 'viewExpense']);
Route::get('/viewAllStock',[OrderFlowController::class, 'viewAllStock']);
Route::get('/spareParts',[OrderFlowController::class, 'spareParts']);
Route::get('/getInvestorData',[investorController::class, 'getInvestorData']);
Route::get('/getExpenseHeads',[expenseController::class, 'getExpenseHeads']);
Route::get('/getAccountHeads',[accountsController::class, 'getAccountHeads']);
Route::get('/customer/{data}',[CustomerViewcotroller::class, 'customerinfo']);
Route::get('/getAllSoldProducts',[UpdateStocksController::class, 'getAllSoldProducts']);
Route::get('/getAllAutos/{CID}',[UpdateStocksController::class, 'getAllAutos']);
Route::get('/viewSoldStock',[UpdateStocksController::class, 'viewSoldStock']);
Route::get('/getInvestors',[investorController::class, 'getInvestors']);
Route::get('/insertProducts/{data}',[AddMenucontroller::class, 'insertProducts']);
Route::get('/dailySaleAmount',[AISessionController::class, 'dailySaleAmount']);
Route::get('/loadAutos',[getProducts::class, 'getAutosNames']);

// Test Functions
Route::get('/getTransaction',[OrderFlowController::class, 'getTransaction']);
Route::get('/scratchFunc',[OrderFlowController::class, 'scratchFunc']);
Route::get('/setStockIdeal/{data}',[UpdateStocksController::class, 'UpdateInStock']);
Route::get('/AddAcessories/{UC}',[assesoriesController::class, 'AddAcessories']);

Route::get('/editAutoModels/{UC}',[UpdateStocksController::class, 'editAutoModels']);
Route::get('/getAutoModel',[UpdateStocksController::class, 'getAutoModel']);

Route::get('/addAutoModels/{AA}',[UpdateStocksController::class, 'addAutoModels']);


Route::get('/ruautos/{data}',[UpdateStocksController::class, 'updateStockDetails']);
Route::get('/getAvailableProducts',[UpdateStocksController::class, 'getAllAvailableProducts']);
Route::get('/addSales/{data}',[salesFlow::class, 'SalesFlow']);

Route::get('/addInvestor/{data}',[investorController::class, 'insertInvestor']);
Route::get('/addExpense/{data}',[expenseController::class, 'insertExpense']);
Route::get('/addPayment/{data}',[payController::class, 'insertPayment']);
Route::get('/getPaymentHistory/{data}',[payController::class, 'getPayRecivingHistory']);
Route::get('/addTasks/{data}',[taskController::class, 'insertTasks']);
Route::get('/updateAdminStatus/{data}',[taskController::class, 'updateAdminTaskStatus']);
Route::get('/markAttendance/{data}',[attendanceController::class, 'markAttendance']);
Route::get('/getEmployeeData',[taskController::class, 'employeeData']);
Route::get('/getAttendance',[attendanceController::class, 'getAttendance']);
Route::get('/getEmpbyID/{id}',[payController::class, 'getEmpbyID']);
Route::get('/getEmployeeName',[payController::class, 'getEmployeeName']);
Route::get('/getEmployeeCNIC',[payController::class, 'getEmployeeCNIC']);
Route::get('/getEmployeeID',[payController::class, 'getEmployeeID']);
Route::get('/getEmployeeContact',[payController::class, 'getEmployeeContact']);
Route::get('/loadProductCategory',[AddMenuController::class, 'loadProductCategory']);
Route::get('/getEmployee',[expenseController::class, 'getEmployee']);
Route::get('/updatePay/{data}',[payController::class, 'updatePay']);
Route::get('/getTotalPay/{EID}',[payController::class, 'getTotalPay']);
Route::get('/getTaskcatagory',[payController::class, 'getTaskcatagory']);
Route::get('/addTaskCategory/{data}',[taskController::class, 'addTaskCategory']);
Route::get('/insertInCommission/{data}',[AdditionalTaxesAndCommissionsController::class, 'AddTaxOrCommission']);


Route::get('/ruautos/{data}',[UpdateStocksController::class, 'updateStockDetails']);
Route::get('/getAvailableProducts',[UpdateStocksController::class, 'getAllAvailableProducts']);
Route::get('/addSales/{data}',[salesFlow::class, 'SalesFlow']);

Route::get('/editCustomer/{data}',[CustomerController::class, 'editCustomer']);
Route::get('/addInvestor/{data}',[investorController::class, 'insertInvestor']);
Route::get('/addExpense/{data}',[expenseController::class, 'insertExpense']);
Route::get('/addTasks/{data}',[taskController::class, 'insertTasks']);
Route::get('/markAttendance/{data}',[attendanceController::class, 'markAttendance']);
Route::get('/getEmployeeData',[taskController::class, 'employeeData']);
Route::get('/searchEmployeeData/{EID}/{name}',[taskController::class, 'searchEmployeeData']);
Route::get('/searchTaskWithStatus/{EID}/{status}/{name}',[taskController::class, 'searchTaskWithStatus']);
Route::get('/loadTaskDetails/{TID}',[taskController::class, 'loadTaskDetails']);
Route::get('/getAttendance',[attendanceController::class, 'getAttendance']);
Route::get('/getEmpbyID/{id}',[payController::class, 'getEmpbyID']);
Route::get('/getEmployeeName',[payController::class, 'getEmployeeName']);
Route::get('/getEmployeeCNIC',[payController::class, 'getEmployeeCNIC']);
Route::get('/getEmployeeID',[payController::class, 'getEmployeeID']);
Route::get('/getEmployeeContact',[payController::class, 'getEmployeeContact']);
Route::get('/loadProductCategory',[AddMenuController::class, 'loadProductCategory']);
Route::get('/getPartyNames',[expenseController::class, 'getPartyNames']);
Route::get('/getAccounts',[expenseController::class, 'getAccounts']);
Route::get('/getCategory',[taskController::class, 'getCategory']);
Route::get('/addcustomer/{AC}',[CustomerController::class, 'addcustomer']);

Route::get('/updatecategory/{ID}/{oldcategory}',[taskController::class, 'updateTaskCategory']);

Route::get('/getEmployees',[taskController::class, 'getEmployees']);
Route::get('/getInvestorStock/{data}',[investorController::class, 'getInvestorStock']);
Route::get('/createQuotation/{data}',[quotationController::class, 'createQuotation']);
Route::get('/getAutoData/{data}',[getProducts::class, 'getAutoData']);

Route::get('/login/{un}/{pass}',[userAccountController::class, 'singIn']);
Route::get('/updateInvoice/{data}/{id}',[saleInvoiceEditController::class, 'UpdateSaleInvoice']);
Route::get('/viewQuotations',[quotationController::class, 'viewQuotations']);
Route::get('/addUsers/{AU}',[userAccountController::class, 'addUsers']);
Route::get('/editUsers/{AU}',[userAccountController::class, 'editUsers']);
Route::get('/getUsers',[userAccountController::class, 'getUsers']);

Route::get('/negativeComission/{data}',[AdditionalTaxesAndCommissionsController::class, 'AddTaxOrCommissionNegative']);
Route::get('/PostiveCommision/{data}',[AdditionalTaxesAndCommissionsController::class, 'AddTaxOrCommissionPositive']);

Route::get('/AddProduct/{data}',[AddMenucontroller::class, 'insertProduct']);
Route::post('/Checkout/{token}',[StripeController::class, 'postCheckout']);
Route::get('/testpdf',[TEST::class, 'getInfo']);
Route::get('/testpdf/2',[salePrintInvoice::class, 'printSaleInvoice']);
Route::get('/testpdf/as',[printServiceSaleInvoice::class, 'afterSalesServicePrint']);

Route::get('/viewDocuments',[printDocuments::class, 'getDocuments']);

Route::get('/printSaleInvReq',[TEST::class, 'saleInvoiceRequest']);
//qutationRequest
Route::get('/printGatePass',[TEST::class, 'gatePass']);

Route::get('/testpdf/5',[TEST::class, 'qutationRequestFinal']);

Route::get('/testpdf/6',[salePrintInvoice::class, 'serviceSalesRequest']);


Route::get('/', function () {

return view('signInSignUp');
});
// Route::get('/stripe', function () {
// return view('stripe');
// });


Route::get('/ed', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('EmpDashboard');
    }else{
    return view("signInSignUp");
    }
});

Route::get('/sh', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('stockHistory');
    }else{
    return view("signInSignUp");
    }
});

Route::get('/chksessions',function(){

// $request->session()->forget('name');
session(['key' => '88888888']);
// $request->session()->put('key', '8');
$value = session()->get('CID');

echo $value;

});
Route::get('/ss', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"||$UN=="User"){
    return view('sales');
    }else{
    return view("signInSignUp");
    }
});
Route::get('/qt', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('quotation'); 
    }else{
    return view("signInSignUp");
    }
});

//61bd06c
Route::get('/logout', function () {
session(['Designation' =>null]);


return view('signInSignUp');
});
Route::get('/db', function () {
$UN = session()->get('Designation');
if($UN=="Admin"){
return view('dashboard');
}
else if($UN=="User"){
return view("EmployeeTaskView");
}
});


Route::get('/ps', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('PurchaseStock'); 
    }else{
    return view("signInSignUp");
    }

});
Route::get('/bo', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('bookorder'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/cl', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('companyLedger'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/dl', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('deliveryLetter'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/ip', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('increaseInPrice'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/is', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('invoiceServices'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/psi', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('printSaleInvoice'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/rec', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('Receiving'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/sc', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('salesandc'); 
    }else{
    return view("signInSignUp");
    }

});
Route::get('/stock', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"||$UN=="User"){
    return view('stock'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/th', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('transactionHistory'); 
    }else{
    return view("signInSignUp");
    }
});
// Route::get('/loop', function () {
// return view('forLoopCheck');
// });

Route::get('/vc', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('viewCustomers'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/sp', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('viewSpareParts'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/vs', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('viewStock'); 
    }else{
    return view("signInSignUp");
    }
});
// Route::get('/ajax', function () {
// return view('ajax');
// });
Route::get('/scratch', function () {
return view('scratch');

});
Route::get('/ex', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('expense'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/ct', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('comissionAndTaxes'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/s', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('salesAndComission'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/ev', function () {
    $UN = session()->get('Designation');
    if($UN=="User"||$UN=="Admin"){
    return view('employerView'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/etv', function () {
    $UN = session()->get('Designation');
    session(['EmpID' => '1']);

    if($UN=="Admin"){
        
        return view('EmployeeTaskView');
  
   }else{
       return "Invalid Username Or Password";
   }

});
Route::get('/emptv', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('employertaskViews'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/e', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('Employee'); 
    }else{
    return view("signInSignUp");
    };
});
Route::get('/at', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('attendance'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/atv', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('attendanceView'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/l', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('investorLedger'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/igl', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('investorGeneralLedger'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/pr', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('payRoll'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/inv', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('investors'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/pr', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('payRoll'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/es', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('editStock'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/cr', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('cr'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/d', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('delivery'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/nd', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('newdashboard'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/SalarySlip', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('SalarySlip'); 
    }else{
    return view("signInSignUp");
    };
});
Route::get('/l', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('investorLedger'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/ql', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('quotation'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/prc', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('paymentReceipt'); 
    }else{
    return view("signInSignUp");
    }
});


Route::get('/fgp', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('ForlandGatePass'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/slip', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('SalarySlip'); 
    }else{
    return view("signInSignUp");
    };
});
Route::get('/sheet', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('inventorysheet'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/vd', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"||$UN=="User"){
    return view('vehicleDetails'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/sir', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('solutions'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/ql', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('quotationList'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/ac', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('addcategory'); 
    }else{
    return view("signInSignUp");
    };
});

Route::get('/vc', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('viewCustomers'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/gb', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('generateBarcode'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/adc', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('addcustomer'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/ads', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('addsuplier'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/dp', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('dailypurchase'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/pay', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('payments'); 
    }else{
    return view("signInSignUp");
    };
});

Route::get('/ep', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('employeePayment'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/sales', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('viewSales'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/exv', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('viewExpenses'); 
    }else{
    return view("signInSignUp");
    };
});



Route::get('/pdfvs', function () {
ini_set('max_execution_time', 60);
$data=TransactionFlow::getTransactionsForAccounts(1);
view()->share('viewExpenses',$data);
$pdf = PDF::loadView('viewExpenses', $data);

// download PDF file with download method
return $pdf->download('pdf_file.pdf');
});
Route::get('/vd', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('vehicleDetails'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/ssi2', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('printSaleInvoice'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/ssi', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('servicesalesinvoice'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/ed', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('EmpDashboard'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/ae', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('addEmployees'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/ee', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('editEmployee'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/ec', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('editCustomer'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/pdf', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('test'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/tc', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('taskCategory'); 
    }else{
    return view("signInSignUp");
    };
});


Route::get('/ds', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('dailysales'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/au', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('addusers'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/eam', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('editAutoModels'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/aam', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('addAutoModels'); 
    }else{
    return view("signInSignUp");
    };
});

Route::get('/eu', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('editUsers'); 
    }else{
    return view("signInSignUp");
    }
});

route::get('/pds', function(){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('printDocuments');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/logout', function(){
    session()->forget('Designation');
  return view('signInSignUp');
   }
);
    

Route::get('/aam', function () {
    return view('addAutoModels');
});

Route::get('/ans', function () {
    return view('addNewStock');
});


Route::get('/eu', function () {
    return view('editUsers');
});

Route::get('/dls', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('deliveryletters'); 
    }else{
    return view("signInSignUp");
    }
});
  

route::get('/acc', function(){
    return view('accesoriest');
});
route::get('/aeh', function(){
    return view('addExpenseHeads');
});
route::get('/dt', function(){
    return view('debitTransactions');
});
route::get('/ct', function(){
    return view('creditTransactions');
});

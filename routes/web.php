<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

use App\Http\Controllers\signInSignUPcontroller;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\saleInvoiceEditController;
use App\Http\Controllers\AddMenucontroller;
use App\Http\Controllers\deliverLetterPrintController;

use App\Http\Controllers\OrderFlowController;
use App\Http\Controllers\CustomerViewController;
use App\Http\Controllers\printServiceSaleInvoice;
use App\Http\Controllers\UpdateStocksController;
use App\Http\Controllers\quotationController;
use App\Http\Controllers\payController;
use App\Http\Controllers\salePrintInvoice;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\printDocuments;
use App\Http\Controllers\TransactionFlow;
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


Route::get('/qutationRequestFinal',[TEST::class, 'qutationRequestFinal']);
Route::get('/editEmployee/{UE}',[employeeController::class, 'editEmployee']);
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
Route::get('/companyLedger',[OrderFlowController::class, 'companyLedger']);
Route::get('/viewStock',[OrderFlowController::class, 'viewStock']);
Route::get('/viewSales',[salesFlow::class, 'viewSales']);
Route::get('/viewExpense',[expenseController::class, 'viewExpense']);
Route::get('/viewAllStock',[OrderFlowController::class, 'viewAllStock']);
Route::get('/spareParts',[OrderFlowController::class, 'spareParts']);
Route::get('/getInvestorData',[investorController::class, 'getInvestorData']);
Route::get('/getExpenseHeads',[expenseController::class, 'getExpenseHeads']);
Route::get('/getAccountHeads',[accountsController::class, 'getAccountHeads']);
Route::get('/customer/{data}',[CustomerViewController::class, 'customerinfo']);
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
Route::get('/AddProduct/{data}',[AddMenucontroller::class, 'insertProduct']);


Route::get('/', function () {   
  
    return view('signInSignUp');
});

Route::get('/stripe', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('stripe');
   }else{
       return "Invalid Username Or Password";
   }
});


Route::get('/ed', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('empDashboard');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/sh', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('stockHistory');
   }else{
       return "Invalid Username Or Password";
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
    if($UN=="Admin"){
   return view('sales');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/qt', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('quotation');
   }else{
       return "Invalid Username Or Password";
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
    }else{
        return view("signInSignUp");
    }
});


Route::get('/ps', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('PurchaseStock');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/as', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('addNewStock');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/bo', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('bookorder');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/cl', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('companyLedger');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/dl', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('deliveryLetter');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/ip', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('increaseInPrice');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/is', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('invoiceServices');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/psi', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('printSaleInvoice');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/rec', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('Receiving');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/sc', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('salesandc');
   }else{
       return "Invalid Username Or Password";
   }

});
Route::get('/stock', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('stock');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/th', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('transactionHistory');
    }else{
        return "Invalid Username Or Password";
    }
});
Route::get('/loop', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('forlLoopCheck');
   }else{
       return "Invalid Username Or Password";
   };
});

Route::get('/vc', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('viewCustomers');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/sp', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('viewSpareParts');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/vs', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('viewStock');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/ajax', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('ajax');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/scratch', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('scratch');
   }else{
       return "Invalid Username Or Password";
   }

});
Route::get('/ex', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('expense');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/ct', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('comissionAndtaxes');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/s', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('salesAndComsission');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/ev', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('employerView');
   }else{
       return "Invalid Username Or Password";
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
       return "Invalid Username Or Password";
   }
});
Route::get('/e', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('Employee');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/at', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('attendance');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/atv', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('attendanceView');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/l', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('investorLedger');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/igl', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('investorGeneralLedger');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/pr', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('payRoll');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/inv', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('investors');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/pr', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('payRoll');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/es', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('editStock');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/cr', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('cr');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/d', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('delivery');
   }else{
       return "Invalid Username Or Password";
   };
});
Route::get('/nd', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('newDashboard');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/SalarySlip', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('SalarySlip');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/l', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('investorLedger');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/ql', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('quotation');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/prc', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('paymentReceipt');
   }else{
       return "Invalid Username Or Password";
   }
});


Route::get('/fgp', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('ForlandGatePass');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/slip', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('SalarySlip');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/sheet', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('inventorysheet');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/vd', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('vehicleDetail');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/sir', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('solutions');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/ql', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('quotationList');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/ac', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('addcategory');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/vc', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('viewCustomers');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/gb', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('generateBarcode');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/adc', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('addcustomer');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/ads', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('addsuplier');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/dp', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('dailypurchase');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/pay', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('payments');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/ep', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('employeePayment');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/sales', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('viewSales');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/exv', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('viewExpenses');
   }else{
       return "Invalid Username Or Password";
   }
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
   return view('vehicleDetail');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/ssi2', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('printSaleInvoice');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/ssi', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('servicesalesinvoice');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/ed', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('EmpDashboard');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/ae', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('addEmployees');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/ee', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('editEmployee');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/ec', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('editCustomer');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/pdf', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('test');
   }else{
       return "Invalid Username Or Password";
   }
});
Route::get('/tc', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('taskCategory');
   }else{
       return "Invalid Username Or Password";
   }
});


Route::get('/ds', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('dailysales');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/au', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('addusers');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/eam', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('editAutoModels');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/aam', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('addAutoModels');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/eu', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
   return view('editUsers');
   }else{
       return "Invalid Username Or Password";
   }
});

Route::get('/pds', function(){
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

Route::get('/eu', function () {
    return view('editUsers');
});

route::get('/pds', function(){
        return view('printDocuments');
});

route::get('/acc', function(){
    return view('accesoriest');
});
route::get('/aeh', function(){
    return view('addExpenseHeads');
});

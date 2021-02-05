<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signInSignUPcontroller;
use App\Http\Controllers\saleInvoiceEditController;
use App\Http\Controllers\AddMenucontroller;
use App\Http\Controllers\CustomerViewcotroller;
use App\Http\Controllers\OrderFlowController;
use App\Http\Controllers\CustomerViewController;
use App\Http\Controllers\UpdateStocksController;
use App\Http\Controllers\quotationController;
use App\Http\Controllers\payController;

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



Route::get('/fetchAllmenu',[AddMenucontroller::class, 'fetchAllMenu']);
Route::get('/fetchCategories',[AddMenucontroller::class, 'getCategories']);
Route::get('/fetchMenu/{CID}',[AddMenucontroller::class, 'fetchMenu']);
Route::get('/fetchCategoriesInOptions',[AddMenucontroller::class, 'getCategoriesForSelectMenu']);


Route::get('/getsignin/{data}',[signInSignUPcontroller::class, 'InsertAdmin']);
Route::get('/placeOrder/{data}',[OrderFlowController::class, 'OrderFlow']);
Route::get('/getOrderId/{oid}',[OrderFlowController::class, 'getOrderItem']);
Route::get('/getAllProducts',[getProducts::class, 'getAllProducts'] );
Route::get('/getProductByCategory/{CID}',[getProducts::class, 'getProductByCategory'] );
Route::get('/getPartsAndServices',[getProducts::class, 'getPartsAndServices'] );
Route::get('/getAllSupliers',[LedgerPartiesController::class, 'getAllSuplierParties'] );

//---------------------------//LedgerPartiesController
Route::get('/addCustomer/{data}',[CustomerController::class, 'check'] );
Route::get('/insertCustomer/{data}',[CustomerController::class, 'addCustomer'] );

Route::get('/getAllCustomers/',[CustomerController::class, 'getAllCustomers'] );
Route::get('/getCustomerNames/',[CustomerViewController::class, 'getCustomerNames'] );
//Route::get('/getAllSupliers/',[CustomerController::class, 'getAllCustomers'] );
Route::get('/getCustomersInfo/{CID}',[CustomerController::class, 'getCustomerDetail'] );

Route::get('/getSuppliersInfo/{SID}',[LedgerPartiesController::class, 'getPartyDetail'] );
//__________________________Sales Flow___________________________________
Route::get('/addSalesForSS/{data}',[serviceSalesFlow::class, 'SalesFlow'] );
//getInvoiceCustomer/{data}

Route::get('/getSaleInvReq/{id}',[saleRequestController::class, 'getInvoiceSaleRequest'] );
Route::get('/addPurchaseForSS/{data}',[OrderFlowController::class, 'PurchaseOrderWithStockUpdate'] );
Route::get('/getInvoiceID',[salesFlow::class, 'getInvoiceNewID'] );
Route::get('/loadComissionHeads',[AdditionalTaxesAndCommissionsController::class, 'getComissionHeads'] );
Route::get('/getInvoiceCustomer/{data}',[CustomerController::class, 'getInvoiceCustomer'] );
Route::get('/AddProduct/{data}',[CUDproduct::class, 'insertProduct'] );
Route::get('/invetorDetails/{data}',[investorController::class, 'getInvestorDetails'] );
Route::get('/getAllInvoiceDetails/{data}',[salesFlow::class, 'getAllInvoiceDetails'] );
Route::get('/getInvoiceStock/{data}',[UpdateStocksController::class, 'getInvoiceStock'] );

Route::get('/addInvestorProduct/{data}',[investorController::class, 'addInvestorProduct'] );
Route::get('/getsignin/{data}',[signInSignUPcontroller::class, 'InsertAdmin'] );
Route::get('/placeOrder/{data}',[OrderFlowController::class, 'OrderFlow'] );
Route::get('/getOrderId/{oid}',[OrderFlowController::class, 'getOrderItem'] );
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

Route::get('/ruautos/{data}',[UpdateStocksController::class, 'updateStockDetails']);
Route::get('/getAvailableProducts',[UpdateStocksController::class, 'getAllAvailableProducts']);
Route::get('/addSales/{data}',[salesFlow::class, 'SalesFlow']);

Route::get('/addInvestor/{data}',[investorController::class, 'insertInvestor']);
Route::get('/addExpense/{data}',[expenseController::class, 'insertExpense']);
Route::get('/addPayment/{data}',[payController::class, 'insertPayment']);
Route::get('/addTasks/{data}',[taskController::class, 'insertTasks']);
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


Route::get('/insertInCommission/{data}',[AdditionalTaxesAndCommissionsController::class, 'AddTaxOrCommission']);


Route::get('/ruautos/{data}',[UpdateStocksController::class, 'updateStockDetails'] );
Route::get('/getAvailableProducts',[UpdateStocksController::class, 'getAllAvailableProducts'] );
Route::get('/addSales/{data}',[salesFlow::class, 'SalesFlow'] );

//Route::get('/addSales/{data}',[salesFlow::class, 'SalesFlow'] );
Route::get('/addInvestor/{data}',[investorController::class, 'insertInvestor'] );
Route::get('/addExpense/{data}',[expenseController::class, 'insertExpense'] );
Route::get('/addTasks/{data}',[taskController::class, 'insertTasks'] );
Route::get('/markAttendance/{data}',[attendanceController::class, 'markAttendance'] );
Route::get('/getEmployeeData',[taskController::class, 'employeeData'] );
Route::get('/getAttendance',[attendanceController::class, 'getAttendance'] );
Route::get('/getEmpbyID/{id}',[payController::class, 'getEmpbyID'] );
Route::get('/getEmployeeName',[payController::class, 'getEmployeeName'] );
Route::get('/getEmployeeCNIC',[payController::class, 'getEmployeeCNIC'] );
Route::get('/getEmployeeID',[payController::class, 'getEmployeeID'] );
Route::get('/getEmployeeContact',[payController::class, 'getEmployeeContact'] );
Route::get('/loadProductCategory',[AddMenuController::class, 'loadProductCategory'] );
Route::get('/getPartyNames',[expenseController::class, 'getPartyNames'] );
Route::get('/getAccounts',[expenseController::class, 'getAccounts'] );
Route::get('/getCategory',[taskController::class, 'getCategory'] );
Route::get('/getEmployees',[taskController::class, 'getEmployees'] );
Route::get('/getInvestorStock/{data}',[investorController::class, 'getInvestorStock']);
Route::get('/createQuotation/{data}',[quotationController::class, 'createQuotation']);

Route::get('/login/{un}/{pass}',[userAccountController::class, 'singIn']);
Route::get('/updateInvoice/{data}/{id}',[saleInvoiceEditController::class, 'UpdateSaleInvoice']);


Route::get('/negativeComission/{data}',[AdditionalTaxesAndCommissionsController::class, 'AddTaxOrCommissionNegative'] );
Route::get('/PostiveCommision/{data}',[AdditionalTaxesAndCommissionsController::class, 'AddTaxOrCommissionPositive'] );


Route::get('/', function () {
    
    return view('signInSignUp');
});
Route::get('/sh', function () {
    
    return view('StockHistory');
});

Route::get('/chksessions',function(){

   // $request->session()->forget('name');
   session(['key' => '88888888']);
   // $request->session()->put('key', '8');
    $value = session()->get('CID');

    echo $value;
   

});
Route::get('/ss', function () {
    return view('sales');
});
Route::get('/qt', function () {
    return view('quotation');
});

//61bd06c
Route::get('/logout', function () {
    session(['userName' =>null]);

    return view('signInSignUp');
});
Route::get('/db', function () {
    // $UN = session()->get('userName');
    // if($UN!=NULL){
    return view('dashboard');
    // }else{
    //     return "Invalid Username Or Password";
    // }
});
Route::get('/AddProduct/{data}',[AddMenucontroller::class, 'insertProduct']);

Route::get('/ps', function () {
    return view('PurchaseStock');
});
Route::get('/as', function () {
    return view('addNewStock');
});

Route::get('/bo', function () {
    return view('bookorder');
});

Route::get('/cl', function () {
    return view('companyLedger');
});
Route::get('/dl', function () {
    return view('deliveryLetter');
});
Route::get('/ip', function () {
    return view('increaseInPrice');
});
Route::get('/is', function () {
    return view('invoiceServices');
});
Route::get('/psi', function () {
    return view('printSaleInvoice');
});
Route::get('/rec', function () {
    return view('Receiving');
});
Route::get('/sc', function () {

    return view('salesandc');

});
Route::get('/stock', function () {
    return view('stock');
});
Route::get('/th', function () {
    return view('transactionHistory');
});

Route::get('/vc', function () {
    return view('viewCustomers');
});
Route::get('/sp', function () {
    return view('viewSpareParts');
});
Route::get('/vs', function () {
    return view('viewStock');
});
Route::get('/ajax', function () {
    return view('ajax');
});
Route::get('/scratch', function () {
    return view('scratch');

});
Route::get('/ex', function () {
    return view('expense');
});
Route::get('/ct', function () {
    return view('comissionAndTaxes');
});
Route::get('/s', function () {
    return view('salesAndComission');
});
Route::get('/ev', function () {
    return view('employerView');
});
Route::get('/etv', function () {
    return view('EmployeeTaskView');
});
Route::get('/at', function () {
    return view('attendance');
});
Route::get('/atv', function () {
    return view('attendanceView');
});

Route::get('/l', function () {
    return view('investorLedger');
});

Route::get('/igl', function () {
    return view('investorGeneralLedger');
});
Route::get('/pr', function () {
    return view('payRoll');
});
Route::get('/inv', function () {
    return view('investors');
});
Route::get('/pr', function () {
    return view('payRoll');
});
Route::get('/es', function () {
    return view('editStock');
});
Route::get('/cr', function () {
    return view('cr');
});

Route::get('/d', function () {
    return view('delivery');
});
Route::get('/nd', function () {
    return view('newDashboard');
});

Route::get('/SalarySlip', function () {
    return view('SalarySlip');
});
Route::get('/l', function () {
    return view('investorLedger');
});

Route::get('/ql', function () {
    return view('quotation');
});

Route::get('/e', function () {
    return view('Employee');
});

Route::get('/vd', function () {
    return view('vehicleDetail');
});

Route::get('/prc', function () {
    return view('paymentReceipt');
});


Route::get('/fgp', function () {
    return view('ForlandGatePass');
});
Route::get('/slip', function () {
    return view('SalarySlip');
});
Route::get('/sheet', function () {
    return view('inventorysheet');
});
Route::get('/vd', function () {
    return view('vehicleDetail');
});
Route::get('/sir', function () {
    return view('solutions');
});
Route::get('/ql', function () {
    return view('quotationList');
});

Route::get('/ac', function () {
    return view('addcategory');
});
Route::get('/gb', function () {
    return view('generateBarcode');
});

Route::get('/adc', function () {
    return view('addcustomer');
});

Route::get('/ads', function () {
    return view('addsuplier');
});

Route::get('/dp', function () {
    return view('dailypurchase');
});

Route::get('/pay', function () {
    return view('payments');
});

Route::get('/sales', function () {
    return view('viewSales');
});

Route::get('/exv', function () {
    return view('viewExpenses');
});

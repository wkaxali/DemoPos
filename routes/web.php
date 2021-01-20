<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signInSignUPcontroller;

use App\Http\Controllers\AddMenucontroller;
use App\Http\Controllers\CustomerViewcotroller;
use App\Http\Controllers\OrderFlowController;

use App\Http\Controllers\UpdateStocksController;

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
//Route::get('/getsignin1/{data}',[signInSignUPcontroller::class, 'signIn'] );



Route::get('/fetchAllmenu',[AddMenucontroller::class, 'fetchAllMenu'] );
Route::get('/fetchCategories',[AddMenucontroller::class, 'getCategories'] );
Route::get('/fetchMenu/{CID}',[AddMenucontroller::class, 'fetchMenu'] );
Route::get('/fetchCategoriesInOptions',[AddMenucontroller::class, 'getCategoriesForSelectMenu'] );


Route::get('/getAllProducts',[getProducts::class, 'getAllProducts'] );
Route::get('/getProductByCategory/{CID}',[getProducts::class, 'getProductByCategory'] );
Route::get('/getPartsAndServices',[getProducts::class, 'getPartsAndServices'] );
Route::get('/getAllSupliers',[LedgerPartiesController::class, 'getAllSuplierParties'] );

//---------------------------//LedgerPartiesController
Route::get('/addCustomer/{data}',[CustomerController::class, 'check'] );

Route::get('/getAllCustomers/',[CustomerController::class, 'getAllCustomers'] );
//Route::get('/getAllSupliers/',[CustomerController::class, 'getAllCustomers'] );
Route::get('/getCustomersInfo/{CID}',[CustomerController::class, 'getCustomerDetail'] );

Route::get('/getSuppliersInfo/{SID}',[LedgerPartiesController::class, 'getPartyDetail'] );
//__________________________Sales Flow___________________________________
Route::get('/addSalesForSS/{data}',[serviceSalesFlow::class, 'SalesFlow'] );

Route::get('/addPurchaseForSS/{data}',[OrderFlowController::class, 'PurchaseOrderWithStockUpdate'] );
Route::get('/getInvoiceID',[salesFlow::class, 'getInvoiceNewID'] );


Route::get('/AddProduct/{data}',[CUDproduct::class, 'insertProduct'] );
Route::get('/invetorDetails/{data}',[investorController::class, 'getInvestorDetails'] );



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
Route::get('/spareParts',[OrderFlowController::class, 'spareParts']);
Route::get('/getInvestorData',[investorController::class, 'getInvestorData']);
Route::get('/getExpenseHeads',[expenseController::class, 'getExpenseHeads']);
Route::get('/getAccountHeads',[accountsController::class, 'getAccountHeads']);
Route::get('/getAllSoldProducts',[UpdateStocksController::class, 'getAllSoldProducts']);
Route::get('/getAllAutos/{CID}',[UpdateStocksController::class, 'getAllAutos']);
Route::get('/viewSoldStock',[UpdateStocksController::class, 'viewSoldStock']);
Route::get('/getInvestors',[investorController::class, 'getInvestors']);
Route::get('/insertProducts/{data}',[AddMenucontroller::class, 'insertProducts']);


// Test Functions
Route::get('/getTransaction',[OrderFlowController::class, 'getTransaction']);
Route::get('/scratchFunc',[OrderFlowController::class, 'scratchFunc']);


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
Route::get('/login/{un}/{pass}',[userAccountController::class, 'singIn']);


Route::get('/negativeComission/{data}',[AdditionalTaxesAndCommissionsController::class, 'AddTaxOrCommissionNegative'] );
Route::get('/PostiveCommision/{data}',[AdditionalTaxesAndCommissionsController::class, 'AddTaxOrCommissionPositive'] );


Route::get('/', function () {
    
    return view('signInSignUp');
});

Route::get('/chksessions',function(){

   // $request->session()->forget('name');
   session(['key' => '58']);
   // $request->session()->put('key', '8');
    $value = session()->get('CID');

    echo $value;
   

});
Route::get('/ss', function () {
    return view('sales');
});
Route::get('/db', function () {
    return view('dashboard');
});
Route::get('/AddProduct/{data}',[AddMenucontroller::class, 'insertProduct'] );

Route::get('/ps', function () {
    return view('PurchaseStock');
});
Route::get('/as', function () {
    return view('addNewStock');
});

Route::get('/bo', function () {
    return view('bookOrder');
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
Route::get('/customer/{data}',[CustomerViewcotroller::class, 'customerinfo'] );
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
Route::get('/il', function () {
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



Route::get('/ivs', function () {
    return view('inventorysheet');
});

Route::get('/d', function () {
    return view('delivery');
});
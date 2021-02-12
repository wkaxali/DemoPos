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
//use PDF;


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
Route::get('/getAllProducts',[getProducts::class, 'getAllProducts']);
Route::get('/getProductByCategory/{CID}',[getProducts::class, 'getProductByCategory']);
Route::get('/getPartsAndServices',[getProducts::class, 'getPartsAndServices']);
Route::get('/getAllSupliers',[LedgerPartiesController::class, 'getAllSuplierParties']);

//---------------------------//LedgerPartiesController
Route::get('/addCustomer/{data}',[CustomerController::class, 'check']);
Route::get('/insertCustomer/{data}',[CustomerController::class, 'addCustomer']);

Route::get('/getAllCustomers/',[CustomerController::class, 'getAllCustomers']);
Route::get('/getCustomerNames/',[CustomerViewController::class, 'getCustomerNames']);
//Route::get('/getAllSupliers/',[CustomerController::class, 'getAllCustomers']);
Route::get('/getCustomersInfo/{CID}',[CustomerController::class, 'getCustomerDetail']);

Route::get('/getSuppliersInfo/{SID}',[LedgerPartiesController::class, 'getPartyDetail']);
//__________________________Sales Flow___________________________________
Route::get('/addSalesForSS/{data}',[serviceSalesFlow::class, 'SalesFlow']);
//getInvoiceCustomer/{data}

Route::get('/getSaleInvReq/{id}',[saleRequestController::class, 'getInvoiceSaleRequest']);
Route::get('/addPurchaseForSS/{data}',[OrderFlowController::class, 'PurchaseOrderWithStockUpdate']);
Route::get('/getInvoiceID',[salesFlow::class, 'getInvoiceNewID']);
Route::get('/loadComissionHeads',[AdditionalTaxesAndCommissionsController::class, 'getComissionHeads']);
Route::get('/getInvoiceCustomer/{data}',[CustomerController::class, 'getInvoiceCustomer']);
Route::get('/getQuotation/{data}',[quotationController::class, 'getQuotation']);
Route::get('/AddProduct/{data}',[CUDproduct::class, 'insertProduct']);
Route::get('/invetorDetails/{data}',[investorController::class, 'getInvestorDetails']);
Route::get('/getAllInvoiceDetails/{data}',[salesFlow::class, 'getAllInvoiceDetails']);
Route::get('/getInvoiceStock/{data}',[UpdateStocksController::class, 'getInvoiceStock']);

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
Route::get('/updatePay/{data}',[payController::class, 'updatePay']);

Route::get('/insertInCommission/{data}',[AdditionalTaxesAndCommissionsController::class, 'AddTaxOrCommission']);


Route::get('/ruautos/{data}',[UpdateStocksController::class, 'updateStockDetails']);
Route::get('/getAvailableProducts',[UpdateStocksController::class, 'getAllAvailableProducts']);
Route::get('/addSales/{data}',[salesFlow::class, 'SalesFlow']);

//Route::get('/addSales/{data}',[salesFlow::class, 'SalesFlow']);
Route::get('/addInvestor/{data}',[investorController::class, 'insertInvestor']);
Route::get('/addExpense/{data}',[expenseController::class, 'insertExpense']);
Route::get('/addTasks/{data}',[taskController::class, 'insertTasks']);
Route::get('/markAttendance/{data}',[attendanceController::class, 'markAttendance']);
Route::get('/getEmployeeData',[taskController::class, 'employeeData']);
Route::get('/searchEmployeeData/{EID}',[taskController::class, 'searchEmployeeData']);
Route::get('/searchTaskWithStatus/{EID}/{status}',[taskController::class, 'searchTaskWithStatus']);

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
Route::get('/getEmployees',[taskController::class, 'getEmployees']);
Route::get('/getInvestorStock/{data}',[investorController::class, 'getInvestorStock']);
Route::get('/createQuotation/{data}',[quotationController::class, 'createQuotation']);

Route::get('/login/{un}/{pass}',[userAccountController::class, 'singIn']);
Route::get('/updateInvoice/{data}/{id}',[saleInvoiceEditController::class, 'UpdateSaleInvoice']);
Route::get('/viewQuotations',[quotationController::class, 'viewQuotations']);

Route::get('/negativeComission/{data}',[AdditionalTaxesAndCommissionsController::class, 'AddTaxOrCommissionNegative']);
Route::get('/PostiveCommision/{data}',[AdditionalTaxesAndCommissionsController::class, 'AddTaxOrCommissionPositive']);


Route::get('/', function () {   
    session(['userCategory' =>1]);
    return view('signInSignUp');
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
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('dashboard');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/AddProduct/{data}',[AddMenucontroller::class, 'insertProduct']);

Route::get('/ps', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('PurchaseStock');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/as', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('addNewStock');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/bo', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('bookorder');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/cl', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('CompanyLedger');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/dl', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('deliveryLetter');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/ip', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('increaseInPrice');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/is', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('invoiceServices');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/psi', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('printSaleInvoice');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/rec', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('Receiving');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/sc', function () {

    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('salesandc');
    }else{
        return "Unauthorized Access ";
    }

});
Route::get('/stock', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('stock');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/th', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('transactionHistory');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/loop', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('froLoopCheck');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/vc', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('viewCustomers');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/sp', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('viewSpareParts');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/vs', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('viewStock');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/ajax', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('ajax');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/scratch', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('scratch');
    }else{
        return "Unauthorized Access ";
    }

});
Route::get('/ex', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('expense');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/ct', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('comissionAndTaxes');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/s', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('salesAndComission');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/ev', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('employerView');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/etv', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('EmployeeTaskView');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/emptv', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('employertasksViews');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/e', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('Employee');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/at', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('attendance');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/atv', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('attendanceView');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/l', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('investorLedger');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/igl', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('investorGeneralLedger');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/pr', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('payRoll');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/inv', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('investors');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/pr', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('payRoll');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/es', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('editStock');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/cr', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('cr');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/d', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('delivery');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/nd', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('newDashBoard');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/SalarySlip', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('atteSalarySlipndanceView');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/l', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('investorLedger');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/ql', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('quotation');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/e', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('Employee');
    }else{
        return "Unauthorized Access ";
    }
});



Route::get('/prc', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('paymentReceipt');
    }else{
        return "Unauthorized Access ";
    }
});


Route::get('/fgp', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('ForlandGatePass');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/slip', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('SalarySlip');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/sheet', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('inventorysheet');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/vd', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('VehicleDetail');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/sir', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('solutions');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/ql', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('quotationList');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/ac', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('addcategory');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/gb', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('generateBarcode');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/adc', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('addcustomer');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/ads', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('addsuplier');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/dp', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('dailypurchase');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/pay', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('payments');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/sales', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('viewSales');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/exv', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('viewExpenses');
    }else{
        return "Unauthorized Access ";
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
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('vehicleDetail');
    }else{
        return "Unauthorized Access ";
    }
});

Route::get('/ssi2', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('printSaleInvoice');
    }else{
        return "Unauthorized Access ";
    }
});
Route::get('/ssi', function () {
    $UN=session()->get('userType');
    if ($UN=='1'){
    return view('servicesalesinvoice');
    }else{
        return "Unauthorized Access ";
    }
});
// Route::get('/sh', function () {
//     return view('StockHistory');
// });


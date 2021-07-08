<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signInSignUPcontroller;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\saleInvoiceEditController;
use App\Http\Controllers\AddMenucontroller;
use App\Http\Controllers\deleteExpenseController;
use App\Http\Controllers\deletePaymentController;
use App\Http\Controllers\CustomerViewController;
use App\Http\Controllers\globalVarriablesController;
use App\Http\Controllers\OrderFlowController;
use App\Http\Controllers\productCategoryController;
use App\Http\Controllers\printSalarySlip;
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
use App\Http\Controllers\printMonthlySaleController;
use App\Http\Controllers\expenseController;
use App\Http\Controllers\investorController;
use App\Http\Controllers\salesFlow;
use App\Http\Controllers\dashBoardDisplayData;
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
use App\Http\Controllers\summaryReportController;
use App\Http\Controllers\employeeAllowanceController;
use App\Http\Controllers\purchaseStockEditController;
use App\Http\Controllers\salesHistoryController;
use App\Http\Controllers\purchaseHistoryController;
use App\Http\Controllers\expenseHistoryController;
use App\Http\Controllers\accountHistoryController;
use App\Http\Controllers\partyPaymentHistory;
use App\Http\Controllers\purchaseHistoryPrintController;
use App\Http\Controllers\expenseHistoryPrintController;
use App\Http\Controllers\accountsHistoryPrintController;
use App\Http\Controllers\partyPaymentHistoryPrintController;
use App\Http\Controllers\saleHistoryPrintController;

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
Route::get('/deleteEmpPay/{TID}',[employeeController::class, 'deleteEmployeePayments']);
Route::get('/filterDateData/{date1}/{date2}/{ID} ',[partyPaymentHistory::class, 'filterPartyPaymentDateData']);
Route::get('/filterPartyData/{ID}',[partyPaymentHistory::class, 'filterPartyPaymentHistory']);
Route::get('/partyHistory',[partyPaymentHistory::class, 'getPartyPaymentHistory']);
Route::get('/printPartyHistory2/{partyID}/{party} ',[partyPaymentHistoryPrintController::class, 'printPartyHistory2']);
Route::get('/printPartyHistory/{date1}/{date2}/{partyID}/{party} ',[partyPaymentHistoryPrintController::class, 'printPartyHistory']);



Route::get('/filterSalesHistory/{cat}/{cus}',[salesHistoryController::class, 'filterSalesHistory']);
Route::get('/salesHistory',[salesHistoryController::class, 'getSalesHistory']);
Route::get('/updatePurchasedStock/{array}/{InvoiceNo}',[purchaseStockEditController::class, 'updatePurchasedStock']);
Route::get('/empProgress',[dashBoardDisplayData::class, 'employeeProgress']);
Route::get('/barGraphForTransactions',[dashBoardDisplayData::class, 'getTransactions']);
Route::get('/checkAbsents',[attendanceController::class, 'checkAbsents']);
Route::get('/autosPieChart',[dashBoardDisplayData::class, 'autoStock']);
Route::get('/signUp/{data}',[userAccountController::class, 'signUp']);
Route::get('/paySalary/{data}',[payController::class, 'paySalary']);
Route::get('/getCommissionData/{year}/{month}/{EID}',[payController::class, 'getCommissionData']);
Route::get('/getEmpPay/{eid}',[payController::class, 'getEmpPay']);
Route::get('/partyData',[LedgerPartiesController::class, 'partyData']);
Route::get('/addAllowances/{data}',[employeeAllowanceController::class, 'addAllowances']);
Route::get('/getAllownceHeads',[employeeAllowanceController::class, 'getAllownceHeads']);
Route::get('/showAccountsSum',[accountsController::class, 'showAccountsSum']);
Route::get('/investorReceivedAmount/{LID}',[investorController::class, 'getInvestorReceivedAmount']);
Route::get('/sd',[summaryReportController::class, 'stockDetails']);
Route::get('/sum',[summaryReportController::class, 'summaryReport']);
// Route::get('/sum2',[summaryReportController::class, 'summaryReportTabularBase']);
Route::get('/soldUnits/{dates}',[summaryReportController::class, 'soldUnits']);
Route::get('/transactions/{dates}',[summaryReportController::class, 'transactions']);
Route::get('/getUsers',[userAccountController::class, 'getUsers']);
Route::get('/editUsers/{data}',[userAccountController::class, 'editUsers']);
Route::get('/addUsers/{data}',[userAccountController::class, 'addUsers']);
Route::get('/printGatePass/{ID}',[TEST::class, 'gatePass']);
Route::get('/invoiceDetails/{ID}',[serviceSalesFlow::class, 'getAllInvoiceDetails']);
Route::get('/InvoiceRequest',[TEST::class, 'InvoiceRequest']);
Route::get('/deliveryLetter/{ID}',[deliverLetterPrintController::class, 'deliveryLetter']);
Route::get('/editEmployee/{UE}',[employeeController::class, 'editEmployee']);
Route::get('/printSalaries/{ID}/{adv}',[printSalarySlip::class, 'printsalarySlip']);
Route::get('/printsse/{ID}/{adv}',[printSalarySlip::class, 'printsalarySlip']);
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
Route::get('/addExpenseHead/{expTable}',[expenseController::class, 'addExpenseHead']);
Route::get('/getExpenses',[expenseController::class, 'getExpenses']);
Route::get('/getEmployeePayment',[payController::class, 'getEmployeePayment']);
Route::get('/getPartyPayment',[payController::class, 'getPartyPayment']);
Route::get('/editExpense',[expenseController::class, 'editExpense']);
Route::get('/addTaskCategory/{data}',[taskController::class, 'addTaskCategory']);
Route::get('/testpdf/2',[printSaleInvoice::class, 'printSaleInvoice']);
Route::get('/testpdf/3',[TEST::class, 'saleInvoiceRequest']);
Route::get('/testpdf/4',[TEST::class, 'gatePass']);
Route::get('/oqp',[quotationController::class, 'qoutationToPDF']);
//---------------------------//LedgerPartiesController
Route::get('/insertCustomer/{data}',[CustomerController::class, 'addCustomer']);
Route::get('/getAllCustomers',[CustomerController::class, 'getAllCustomers']);
Route::get('/getCustomerNames',[CustomerViewController::class, 'getCustomerNames']);
//Route::get('/getAllSupliers/',[CustomerController::class, 'getAllCustomers']);
Route::get('/getCustomersInfo/{CID}',[CustomerController::class, 'getCustomerDetail']);
Route::get('/getCustomers',[CustomerController::class, 'getCustomers']);
Route::get('/getSuppliersInfo/{SID}',[LedgerPartiesController::class, 'getPartyDetail']);
Route::get('/addSupplier/{empData}',[LedgerPartiesController::class, 'addSupplier']);
Route::get('/viewAllSupplier',[LedgerPartiesController::class, 'viewAllSupplier']);
Route::get('/editSupplier/{ES}',[LedgerPartiesController::class, 'editSupplier']);
//__________________________Sales Flow___________________________________
Route::get('/addSalesForSS/{data}',[serviceSalesFlow::class, 'SalesFlow']);
//getInvoiceCustomer/{data}
Route::get('/getSaleInvReq/{id}',[saleRequestController::class, 'getInvoiceSaleRequest']);
Route::get('/addPurchaseForSS/{data}',[OrderFlowController::class, 'PurchaseOrderWithStockUpdate']);
Route::get('/getInvoiceID',[salesFlow::class, 'getInvoiceNewID']);
Route::get('/loadComissionHeads',[AdditionalTaxesAndCommissionsController::class, 'getComissionHeads']);
Route::get('/getComission/{PID}',[AdditionalTaxesAndCommissionsController::class, 'getComission']);
Route::get('/getProfit/{PID}',[AdditionalTaxesAndCommissionsController::class, 'getComission']);
Route::get('/addAccount/{accData}',[accountsController::class, 'addAccount']);
Route::get('/getAccountsData',[accountsController::class, 'getAccountsData']);
Route::get('/editAccounts/{EA}',[accountsController::class, 'editAccounts']);
Route::get('/getInvoiceCustomer/{data}',[serviceSalesFlow::class, 'printSaleRequestOnInvoiceNumber']);
Route::get('/getQuotation/{data}',[quotationController::class, 'getQuotation']);
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
Route::get('/transactionHistoryfe',[OrderFlowController::class, 'transactionHistoryforExpance']);
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
Route::get('/loadCategory',[accountsController::class, 'loadCategory']);
Route::get('/customer/{data}',[CustomerViewController::class, 'customerinfo']);
Route::get('/getAllSoldProducts',[UpdateStocksController::class, 'getAllSoldProducts']);
Route::get('/getAllAutos/{CID}',[UpdateStocksController::class, 'getAllAutos']);
Route::get('/viewSoldStock',[UpdateStocksController::class, 'viewSoldStock']);
Route::get('/getInvestors',[investorController::class, 'getInvestors']);
Route::get('/insertProducts/{data}',[AddMenucontroller::class, 'insertProducts']);
Route::get('/dailySaleAmount',[AISessionController::class, 'dailySaleAmount']);
Route::get('/loadAutos',[getProducts::class, 'getAutosNames']);
Route::get('/getAccountHeads',[accountsController::class, 'getAccountHeads']);
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
Route::get('/addPayment/{data}/{paidTo}',[payController::class, 'insertPayment']);
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
Route::get('/deleteExpense/{data}',[deleteExpenseController::class, 'deleteExpense']);
Route::get('/deletePayment/{EID}',[deletePaymentController::class, 'deletePayment']);
Route::get('/editCustomer/{data}',[CustomerController::class, 'editCustomer']);
Route::get('/addTasks/{data}',[taskController::class, 'insertTasks']);
Route::get('/markAttendance/{data}',[attendanceController::class, 'markAttendance']);
Route::get('/getEmployeeData',[taskController::class, 'employeeData']);
Route::get('/searchEmployeeData/{EID}/{name}',[taskController::class, 'searchEmployeeData']);
Route::get('/searchTaskWithStatus/{EID}/{status}/{name}',[taskController::class, 'searchTaskWithStatus']);
Route::get('/searchTaskWithStatus/{EID}/{date}/{name}',[taskController::class, 'searchTaskWithDate']);
Route::get('/loadTaskDetails/{TID}',[taskController::class, 'loadTaskDetails']);
Route::get('/getAttendance',[attendanceController::class, 'getAttendance']);
Route::get('/getEmpbyID/{id}',[payController::class, 'getEmpbyID']);
Route::get('/getEmployeeName',[payController::class, 'getEmployeeName']);
Route::get('/getEmployeeCNIC',[payController::class, 'getEmployeeCNIC']);
Route::get('/getEmployeeID',[payController::class, 'getEmployeeID']);
Route::get('/getEmployeeContact',[payController::class, 'getEmployeeContact']);
Route::get('/loadProductCategory',[AddMenuController::class, 'loadProductCategory']);
Route::get('/getPartyNames',[LedgerPartiesController::class, 'getPartyNames']);
Route::get('/getAccountsForHistory',[accountsController::class, 'getAccountsForHistory']);
Route::get('/getCategory',[taskController::class, 'getCategory']);
Route::get('/updatecategory/{ID}/{oldcategory}',[taskController::class, 'updateTaskCategory']);
Route::get('/getEmployees',[taskController::class, 'getEmployees']);
Route::get('/getInvestorStock/{data}',[investorController::class, 'getInvestorStock']);
Route::get('/createQuotation/{data}',[quotationController::class, 'createQuotation']);
Route::get('/getAutoData/{data}',[getProducts::class, 'getAutoData']);
Route::get('/login/{un}/{pass}',[userAccountController::class, 'signIn']);
Route::get('/addNewUsers/{AU}',[userAccountController::class, 'addUsers']);
Route::get('/addCategory/{Category}',[productCategoryController::class, 'addCategory']);
Route::get('/getPCategory',[productCategoryController::class, 'getCategory']);
Route::get('/editCategory/{EC}',[productCategoryController::class, 'editCategory']);
Route::get('/addEmpPay/{AP}',[payController::class, 'addEmpPay']);
Route::get('/updateInvoice/{data}/{id}',[saleInvoiceEditController::class, 'UpdateSaleInvoice']);
Route::get('/viewQuotations',[quotationController::class, 'viewQuotations']);
Route::get('/negativeComission/{data}',[AdditionalTaxesAndCommissionsController::class, 'AddTaxOrCommissionNegative']);
Route::get('/PostiveCommision/{data}',[AdditionalTaxesAndCommissionsController::class, 'AddTaxOrCommissionPositive']);
Route::get('/AddProduct/{data}',[AddMenucontroller::class, 'insertProduct']);
Route::post('/Checkout/{token}',[StripeController::class, 'postCheckout']);
Route::get('/testpdf',[TEST::class, 'getInfo']);
Route::get('/testpdf/2',[salePrintInvoice::class, 'printSaleInvoice']);
Route::get('/monthlyReport',[printMonthlySaleController::class, 'PrintMonthlySale']);
Route::get('/testpdf/as',[printServiceSaleInvoice::class, 'afterSalesServicePrint']);
Route::get('/addAllowanceHead/{allowName}',[employeeAllowanceController::class, 'addAllowanceHead']);
Route::get('/getAllowance',[employeeAllowanceController::class, 'getAllowance']);
Route::get('/editAllowance/{UA}',[employeeAllowanceController::class, 'editAllowance']);
Route::get('/viewDocuments',[printDocuments::class, 'getDocuments']);
Route::get('/printSaleInvReq',[TEST::class, 'saleInvoiceRequest']);
Route::get('/printq',[quotationController::class, 'qoutationToPDF']);
Route::get('/testpdf/6',[salePrintInvoice::class, 'serviceSalesRequest']);
Route::get('/searchAttendance/{month}/{year}',[attendanceController::class, 'searchAttendance']);
Route::get('/getMonthlySales',[dashBoardDisplayData::class, 'getMonthlySales']);
Route::get('/getMonthlyExpenses',[dashBoardDisplayData::class, 'getMonthlyExpenses']);
Route::get('/getPendingOrders',[OrderFlowController::class, 'getPendingOrders']);
Route::get('/getBalance',[LedgerPartiesController::class, 'getBalance']);
Route::get('/getCustomerSales',[CustomerController::class, 'getCustomerSales']);
Route::get('/getEmpPayments',[payController::class, 'getEmpPayments']);
Route::get('/printTrasactionHistory/{date1}/{date2}/{table}/{category}/{value}',[TransactionFlow::class, 'printTrasactionHistory']);
Route::get('/selectedSearchData/{category}/{value}/{table}',[TransactionFlow::class, 'selectedSearchData']);
Route::get('/selectedDateData/{DATE1}/{DATE2}/{table}/{category}/{value}',[TransactionFlow::class, 'selectedDateData']);
Route::get('/loadCategoryData/{table}',[TransactionFlow::class, 'loadCategoryData']);
Route::get('/printEmployee',[CustomerController::class, 'printEmployee']);
Route::get('/printStockData',[OrderFlowController::class, 'printStockData']);
Route::get('/printTrasactionHistory2/{table}/{category}/{value}',[TransactionFlow::class, 'printTrasactionHistory2']);
Route::get('/selectedMonthData/{month}',[summaryReportController::class, 'selectedMonthData']);
Route::get('/printMonthlyTrasaction/{month}/{monthname} ',[summaryReportController::class, 'summaryReportTabularBase']);
Route::get('/getAccounts',[accountsController::class, 'getAccounts']);
Route::get('/amountTransfer/{acc1}/{acc2}/{amount}/{remarks}',[accountsController::class, 'amountTransfer']);


Route::get('/loadAllParties',[LedgerPartiesController::class, 'getPartyNames']);
Route::get('/getPurchasesHistory',[purchaseHistoryController::class, 'getPurchasesHistory']); 
Route::get('/filterPurchaseData/{catId}/{partyId}',[purchaseHistoryController::class, 'filterPurchaseData']);
Route::get('/filterPurchaseDateData/{date1}/{date2}/{catId}/{partyId}',[purchaseHistoryController::class, 'filterPurchaseDateData']);
Route::get('/loadAllExpenseHead',[expenseController::class, 'getExpenseHeads']);
Route::get('/getExpenseHistory',[expenseHistoryController::class, 'getExpenseHistory']);
Route::get('/filterSalesDateData/{date1}/{date2}/{catId}/{cusId}',[salesHistoryController::class, 'filterSalesDateData']);
Route::get('/printSaleHistory2/{category}/{partyId} ',[saleHistoryPrintController::class, 'printSaleHistory2']);
Route::get('/printSaleHistory/{date1}/{date2}/{category}/{partyId} ',[saleHistoryPrintController::class, 'printSaleHistory']);



Route::get('/filterExpenseData/{catId} ',[expenseHistoryController::class, 'filterExpenseData']);
Route::get('/printPurchaseHistory2/{category}/{partyId} ',[purchaseHistoryPrintController::class, 'printPurchaseHistory2']);
Route::get('/printPurchaseHistory/{date1}/{date2}/{category}/{partyId} ',[purchaseHistoryPrintController::class, 'printPurchaseHistory']);


Route::get('/loadAllExpenseHead',[expenseHistoryController::class, 'getExpenseHeads']);
Route::get('/getExpenseHistory',[expenseHistoryController::class, 'getExpenseHistory']);
Route::get('/filterExpenseData/{catId} ',[expenseHistoryController::class, 'filterExpenseData']); 
Route::get('/filterExpenseDateData/{date1}/{date2}/{catId} ',[expenseHistoryController::class, 'filterExpenseDateData']);
Route::get('/printExpenseHistory2/{catID}/{cat} ',[expenseHistoryPrintController::class, 'printExpenseHistory2']);
Route::get('/printExpenseHistory/{date1}/{date2}/{catID}/{cat} ',[expenseHistoryPrintController::class, 'printExpenseHistory']);


Route::get('/loadAllAccounts',[accountsController::class, 'getAccounts']);
Route::get('/getAccountsHistory',[accountHistoryController::class, 'getAccountsHistory']);
Route::get('/filterAccountData/{catId} ',[accountHistoryController::class, 'filterAccountData']); 
Route::get('/filterAccountHistoryData/{date1}/{date2}/{catId} ',[accountHistoryController::class, 'filterAccountHistoryData']);
Route::get('/printAccountHistory2/{catID}/{cat}',[accountsHistoryPrintController::class, 'printAccountHistory2']);
Route::get('/printAccountHistory/{date1}/{date2}/{catID}/{cat}',[accountsHistoryPrintController::class, 'printAccountHistory']);













Route::get('/', function () {

return view('signInSignUp');
});
// Route::get('/stripe', function () {
// return view('stripe');
// });

Route::get('/ed', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"||$UN=="User"){
    return view('EmpDashboard');
    }else{
    return view("signInSignUp");
    }
});

// Route::get('/sh', function () {
//     $UN = session()->get('Designation');
//     if($UN=="Admin"){
//     return view('stockHistory');
//     }else{
//     return view("signInSignUp");
//     }
// });

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


Route::get('/aep', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('addEmployeePay'); 
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
else if($UN=="Admin"){
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
    if($UN=="Admin"||$UN=="User"){
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
    if($UN=="Admin"||$UN=="User"){
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
    if($UN=="Admin"||$UN=="User"){
    return view('viewCustomers'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/sp', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"||$UN=="User"){
    return view('viewSpareParts'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/vs', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"||$UN=="User"){
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
    if($UN=="Admin"){
    return view('employerView'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/etv', function () {
    $UN = session()->get('Designation');

    if($UN=="Admin"||$UN=="User"){
        
        return view('EmployeeTaskView');
  
   }else{
       return "Invalid Adminname Or Password";
   }

});
// Route::get('/emptv', function () {
//     $UN = session()->get('Designation');
//     if($UN=="Admin"){
//     return view('employertaskViews'); 
//     }else{
//     return view("signInSignUp");
//     }
// });
// Route::get('/e', function () {
//     $UN = session()->get('Designation');
//     if($UN=="Admin"){
//     return view('Employee'); 
//     }else{
//     return view("signInSignUp");
//     };
// });
Route::get('/at', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"||$UN=="User"){
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

Route::get('/dpay', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('deletePayments'); 
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
Route::get('/npr', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('payRoll'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/eat', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('editAttendance'); 
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

Route::get('/esp', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('editSupplier'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/au', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('addUsers'); 
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
    if($UN=="Admin"||$UN=="User"){
    return view('ForlandGatePass'); 
    }else{
    return view("signInSignUp");
    }
});
 
Route::get('/sheet', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('inventorysheet'); 
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

Route::get('/adal', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('addAllowance');
    }else{
    return view("signInSignUp");
    }
});
Route::get('/edal', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('editAllowance'); 
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

Route::get('/ans', function (){
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('addNewStock'); 
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

Route::get('/dex', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('deleteExpense'); 
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
       return "Invalid Adminname Or Password";
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

Route::get('/sumrep', function () {
    return view('summaryreport');
});

Route::get('/ans', function () {
    return view('addNewStock');
});

Route::get('/dls', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"||$UN=="User"){
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
route::get('/ch', function(){
    return view('customerHistory');
});
route::get('/dk', function(){
    return view('dontKnow');
});
route::get('/abc', function(){
    return view('abc');
});
route::get('/ssr', function(){
    return view('saleSummaryReport');
});
route::get('/dEPay', function(){
    return view('deleteEmployeePayments');
});

route::get('/suu', function(){
    return view('signUpUser');
});

route::get('/dbo', function(){
    return view('dashboardOld');
});

route::get('/eph', function(){
    return view('empPaymentHistory');
});
route::get('/amt', function(){
    return view('amountTransfer');
});
Route::get('/aa', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('addAccount'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/ea', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('editAccount'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/sh', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('salesHistory'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/ph', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('purchaseHistory'); 
    }else{
    return view("signInSignUp");
    }
});
Route::get('/dt', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('datatable'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/eh', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('expenseHistory'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/pr', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('NewPayRoll');
    }
});

Route::get('/ah', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('accountHistory'); 
    }else{
    return view("signInSignUp");
    }
});

Route::get('/pph', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('partyPaymentHistory'); 
    }else{
    return view("signInSignUp");
    }
});

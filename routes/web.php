<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signInSignUPcontroller;
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
Route::get('/getsignin/{data}',[signInSignUPcontroller::class, 'InsertAdmin'] );
Route::get('/', function () {
    return view('signInSignUp');
});

Route::get('/db', function () {
    return view('dashboard');
});

Route::get('/addMenu', function () {
    return view('addMenu');
});
Route::get('/viewStock', function () {
    return view('viewStock');
});

Route::get('/bookOrder', function () {
    return view('bookOrder');
});

Route::get('/companyLedger', function () {
    return view('companyLedger');
});
Route::get('/delivery', function () {
    return view('delivery');
});
Route::get('/deliveryLetter', function () {
    return view('deliveryLetter');
});
Route::get('/increaseInPrice', function () {
    return view('increaseInPrice');
});
Route::get('/invoiceServices', function () {
    return view('invoiceServices');
});
Route::get('/ledger', function () {
    return view('ledger');
});
Route::get('/printSaleInvoice', function () {
    return view('printSaleInvoice');
});
Route::get('/Receiving', function () {
    return view('Receiving');
});
Route::get('/SalesAndComission', function () {
    return view('SalesAndComission');
});
Route::get('/stock', function () {
    return view('stock');
});
Route::get('/transactionHistory', function () {
    return view('transactionHistory');
});
Route::get('/viewCustomers', function () {
    return view('viewCustomers');
});
Route::get('/investorLedger', function () {
    return view('investorLedger');
});
Route::get('/investors', function () {
    return view('investors');
});

Route::get('/investorGeneralLedger', function () {
    return view('investorGeneralLedger');
});

Route::get('/expense', function () {
    return view('expense');
});

Route::get('/attendance', function () {
    return view('attendance');
});


Route::get('/payRoll', function () {
    return view('payRoll');
});

Route::get('/employerView', function () {
    return view('employerView');
});

Route::get('/EmployeeTaskView', function () {
    return view('EmployeeTaskView');
});

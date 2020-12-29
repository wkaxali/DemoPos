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

Route::get('/am', function () {
    return view('addMenu');
});
Route::get('/vs', function () {
    return view('viewStock');
});

Route::get('/bo', function () {
    return view('bookOrder');
});

Route::get('/cl', function () {
    return view('companyLedger');
});
Route::get('/deli', function () {
    return view('delivery');
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
Route::get('/L', function () {
    return view('ledger');
});
Route::get('/psi', function () {
    return view('printSaleInvoice');
});
Route::get('/Rec', function () {
    return view('Receiving');
});
Route::get('/sc', function () {
    return view('salesandcommission');
});
Route::get('/S', function () {
    return view('stock');
});
Route::get('/th', function () {
    return view('transactionHistory');
});
Route::get('/vc', function () {
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
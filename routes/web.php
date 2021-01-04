<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signInSignUPcontroller;

use App\Http\Controllers\OrderFlowController;
use App\Http\Controllers\UpdateStocksController;

use App\Http\Controllers\AddMenucontroller;
use App\Http\Controllers\CustomerViewcotroller;
use App\Http\Controllers\salesFlow;

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


Route::get('/getsignin/{data}',[signInSignUPcontroller::class, 'InsertAdmin'] );
Route::get('/placeOrder/{data}',[OrderFlowController::class, 'OrderFlow'] );
Route::get('/getOrderId/{oid}',[OrderFlowController::class, 'getOrderItem'] );
Route::get('/getOrderId',[OrderFlowController::class, 'getOrderID'] );

Route::get('/ruautos/{data}',[UpdateStocksController::class, 'updateStockDetails'] );
Route::get('/getAllProducts',[UpdateStocksController::class, 'getAllProducts'] );
Route::get('/addSales/{data}',[salesFlow::class, 'SalesFlow'] );


Route::get('/', function () {
    return view('signInSignUp');
});

Route::get('/db', function () {
    return view('dashboard');
});
Route::get('/AddProduct/{data}',[AddMenucontroller::class, 'fetchMenu'] );


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
Route::get('/dl', function () {
    return view('delivery');
});
Route::get('/d', function () {
    return view('deliveryLetter');
});
Route::get('/ip', function () {
    return view('increaseInPrice');
});
Route::get('/is', function () {
    return view('invoiceServices');
});
Route::get('/l', function () {
    return view('ledger');
});
Route::get('/psi', function () {
    return view('printSaleInvoice');
});
Route::get('/rec', function () {
    return view('Receiving');
});
Route::get('/sandc', function () {
    return view('salesandcommission');
});
Route::get('/sc', function () {
    return view('sac');
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
Route::get('/vs', function () {
    return view('viewStock');
});

Route::get('/ex', function () {
    return view('expense');
});

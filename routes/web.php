<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signInSignUPcontroller;

<<<<<<< HEAD
use App\Http\Controllers\AddMenucontroller;
use App\Http\Controllers\CustomerViewcotroller;
use App\Http\Controllers\OrderFlowController;
=======
use App\Http\Controllers\OrderFlowController;
use App\Http\Controllers\UpdateStocksController;

use App\Http\Controllers\AddMenucontroller;
use App\Http\Controllers\CustomerViewcotroller;
use App\Http\Controllers\salesFlow;
>>>>>>> c740b7f4d3ff63ef7ef17d1b119885fb631f4548

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
<<<<<<< HEAD
=======


>>>>>>> c740b7f4d3ff63ef7ef17d1b119885fb631f4548
Route::get('/getsignin/{data}',[signInSignUPcontroller::class, 'InsertAdmin'] );
Route::get('/placeOrder/{data}',[OrderFlowController::class, 'OrderFlow'] );
Route::get('/getOrderId/{oid}',[OrderFlowController::class, 'getOrderItem'] );
Route::get('/getOrderId',[OrderFlowController::class, 'getOrderID']);
Route::get('/viewCustomer',[OrderFlowController::class, 'viewCustomer']);
Route::get('/transactionHistory',[OrderFlowController::class, 'transactionHistory']);
Route::get('/companyLedger',[OrderFlowController::class, 'companyLedger']);
Route::get('/viewStock',[OrderFlowController::class, 'viewStock']);


// Test Functions
Route::get('/getTransaction',[OrderFlowController::class, 'getTransaction']);
Route::get('/scratchFunc',[OrderFlowController::class, 'scratchFunc']);


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
Route::get('/l', function () {
    return view('ledger');
});
Route::get('/printSaleInvoice', function () {
    return view('printSaleInvoice');
});
Route::get('/rec', function () {
    return view('Receiving');
});
// Route::get('/sc', function () {
//     return view('salesandcommission');
// });
Route::get('/sc', function () {
<<<<<<< HEAD
    return view('SalesAndComission');
=======
    return view('sac');
>>>>>>> c740b7f4d3ff63ef7ef17d1b119885fb631f4548
});
Route::get('/stock', function () {
    return view('stock');
});
Route::get('/transactionHistory', function () {
    return view('transactionHistory');
});
Route::get('/customer/{data}',[CustomerViewcotroller::class, 'customerinfo'] );
Route::get('/vc', function () {
    return view('viewCustomers');
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
<<<<<<< HEAD
Route::get('/test', function () {
    return view('test');
});
=======
Route::get('/ex', function () {
    return view('expense');
});
>>>>>>> c740b7f4d3ff63ef7ef17d1b119885fb631f4548

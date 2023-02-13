<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SserviceController;
use App\Http\Controllers\SserviceadminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\PythonController;
use App\Http\Controllers\AdminmanageuserController;
use App\Http\Controllers\AdminmanagevendorController;
use App\Http\Controllers\StripePaymentController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/guest', 'App\Http\Controllers\GuestController');
Route::resource('/plan', 'App\Http\Controllers\PlanController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('vservice/sservice', SserviceController::class);
Route::resource('admin/sserviceadmin', SserviceadminController::class);
Route::resource('admin/state', StateController::class);
Route::resource('admin/category', CategoryController::class);
Route::resource('admin/quotescrap', QuoteController::class);
Route::resource('/checkout', CheckoutController::class);
Route::resource('/cart', CartController::class);
Route::resource('/order', OrderController::class);
Route::resource('/receipt', ReceiptController::class);


Route::post('/',[ App\Http\Controllers\PythonController::class, 'testPythonScript']);

#service
Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index']);
Route::get('/service/detail/{id}', [App\Http\Controllers\ServiceController::class, 'show']);
Route::get('service/category/{id}', [App\Http\Controllers\ServiceController::class, 'category']);
Route::get('service/state/{id}', [App\Http\Controllers\ServiceController::class, 'state']);



Route::resource('admin/adminmanagevendor', AdminmanagevendorController::class);
Route::resource('admin/adminmanageuser', AdminmanageuserController::class);






Route::get('/fullcalender', [EventController::class, 'index']);
Route::post('/fullcalenderAjax', [EventController::class, 'ajax']);

Route::resource('/stripe', StripePaymentController::class);

Route::post('/stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');



Route::get('dclock', 'Digital\Clock\DigitalClockController@dateAdd');
Route::get('date_add/{days}/{format}', 'Digital\Clock\DigitalClockController@dateAdd');
Route::get('date_sub/{days}/{format}', 'Digital\Clock\DigitalClockController@dateSub');
Route::get('date_diff/{date1}/{date2}', 'Digital\Clock\DigitalClockController@dateDiff');
Route::get('date_format/{date}/{format}', 'Digital\Clock\DigitalClockController@dateFormat');
Route::get('getdate/{format}', 'Digital\Clock\DigitalClockController@getDate');
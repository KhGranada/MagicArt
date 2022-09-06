<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/portada', function () {
    return view('portada');
});


Route::resource('products', ProductController::class);
Route::resource('facturacions', ProductController::class);
Route::resource('users', UserController::class);
Route::resource('settings', SettingController::class);


//contact form 
Route::get('/contact', [ContactController::class, 'createForm']);
Route::post('/contact', [ContactController::class, 'ContactUsForm'])->name('contact.store');

//order/invoices
Route::resource('invoices', InvoiceController::class);
Route::get('/getPrice/{id}', 'RecieptController@getPrice'); // for get city list

//chartJS
Route::get('chart-js', [ChartJSController::class, 'index']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

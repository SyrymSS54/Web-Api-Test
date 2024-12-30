<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\IncomeController;
use App\Http\Controllers\Api\OrdersController;
use App\Http\Controllers\Api\SalesController;
use App\Http\Controllers\Api\StocksController;

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

Route::get("/api/orders",[OrdersController::class,'get_orders'])->name('orders')->middleware('CheckKey');
Route::get('/api/incomes',[IncomeController::class,'get_income'])->name('incomes')->middleware('CheckKey');
Route::get("/api/sales",[SalesController::class,'get_sales'])->name('sales')->middleware('CheckKey');
Route::get("/api/stocks",[StocksController::class,'get_stocks'])->name('stocks')->middleware('CheckKey');
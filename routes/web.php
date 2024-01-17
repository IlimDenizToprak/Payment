<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [App\Http\Controllers\admin\UsersController::class, 'index'])->name('users');

Route::get('/failed_transactions', [App\Http\Controllers\admin\FailedTransactionsController::class, 'index'])->name('failed.transactions');

Route::get('/logs', [App\Http\Controllers\admin\LogsController::class, 'index'])->name('logs');

Route::get('/document', [App\Http\Controllers\admin\DocumentController::class, 'index'])->name('document');

Route::get('/check_minute', [App\Http\Controllers\crons\CheckMinute::class, 'index']);

Route::get('/check_failed_users', [App\Http\Controllers\crons\CheckFailedUsers::class, 'index']);

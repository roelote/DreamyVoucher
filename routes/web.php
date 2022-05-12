<?php

use App\Http\Controllers\ControllerVoucher;
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

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('login');
});

Route::get('/',[ControllerVoucher::class,'index'])->name('voucher.index');
Route::get('/crear',[ControllerVoucher::class,'crear'])->name('voucher.crear');
Route::post('/crear',[ControllerVoucher::class,'store']);

Route::get('/voucher-pdf/{id}', [ControllerVoucher::class,'exportPdf'] )->name('voucher.pdf');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

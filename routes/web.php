<?php

use App\Http\Controllers\payment\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\dashboard\DetailsController;
use App\Http\Controllers\dashboard\challenge_status;
use App\Http\Controllers\dashboard\web_traderController;
use App\Http\Controllers\dashboard\payoutsController;

use App\Http\Controllers\dashboard\ProfileController;

Route::get('/home', function () {
  return  redirect('/dashboard');
});

Route::get('/', function () {
  return view('body');
});


// Route::get('/logout', function () {

//   return redirect('/login');
// })->name('logout');

Route::get('/payment', function () {
  return  view('payment.payment');
});



Route::post('/make-payment', [PaymentController::class, 'makePayment'])->name('make.payment');



Auth::routes();

Route::middleware('ip.security')->group(function () {

  // IP-based security middleware

Route::get('/dashboard', [Analytics::class, 'index'])->name('dashboard-analytics')->middleware('auth');
Route::get('/details', [DetailsController::class, 'index'])->name('dashboard-details')->middleware('auth');
Route::get('/challenge-status', [challenge_status::class, 'index'])->middleware('auth');
Route::get('/web-trader', [web_traderController::class, 'index'])->middleware('auth');
Route::get('/payouts', [payoutsController::class, 'index'])->middleware('auth');

Route::resource('/profiles', ProfileController::class)->middleware('auth');


});

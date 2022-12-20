<?php

use Illuminate\Support\Facades\Route;
// fronsite
use App\Http\Controllers\Frontsite\AppointmentController;
use App\Http\Controllers\Frontsite\PaymentController;
use App\Http\Controllers\Frontsite\LandingController;
// backsite
use App\Http\Controllers\Frontsite\PermissionController;
use App\Models\Operational\Appointment;

/*
|-----------------------------------------------`---------------------------
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
route :: resource('/', LandingController::class);

route :: group(['middleware' =>['auth:sanctum','verified']], function(){

    // appointment page
    route :: resource('appointment', AppointmentController::class);
    
    // payment page
    route :: resource('payment', PaymentController::class);
});

route :: group(['prefix' => 'backsite', 'as' => 'backsite',
 'middleware' =>['auth:sanctum','verified']], function(){

    return view('dashboard');

});
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

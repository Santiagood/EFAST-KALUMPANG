<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangayOfficials\SMSTemplateController;
use App\Http\Controllers\BarangayOfficials\ReportGeneratorController;
use App\Http\Controllers\BarangayOfficials\RiverMonitoringController;
use App\Http\Controllers\BarangayOfficials\ResidentsAccountController;
use App\Http\Controllers\Residents\ResidentsRiverMonitoringController;




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

// Route::get('/', function () {
//     return view('welcome');
// })->name('homepage');

Route::get('/', function () {
    return view('frontpage.home');
})->name('homepage');

Route::get('/home', function () {
    return view('frontpage.home');
})->name('homepage');

Route::get('/about-us', function () {
    return view('frontpage.about-us');
})->name('about-us');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['middleware' => 'auth', 'middleware' => 'verified'], function() {
    //Route for Residents
    Route::group(['middleware' => 'role:Resident', 'prefix' => 'Residents', 'as' => 'Residents.'], function() {
        Route::resource('RiverMonitoring', ResidentsRiverMonitoringController::class);
    });

    //Route for BarangayOfficials
    Route::group(['middleware' => 'role:BarangayOfficial', 'prefix' => 'Barangay', 'as' => 'BarangayOfficials.'], function() {
        Route::resource('RiverMonitoring', RiverMonitoringController::class);
        // Route::resource('ManualRegistration', ManualRegistrationController::class);
        Route::resource('ReportGenerator', ReportGeneratorController::class);
        // Route::resource('SMSDirectMessage', SMSDirectMessageController::class);
        Route::resource('SMSTemplate', SMSTemplateController::class);
        Route::resource('ResidentsAccount', ResidentsAccountController::class);
    });
});

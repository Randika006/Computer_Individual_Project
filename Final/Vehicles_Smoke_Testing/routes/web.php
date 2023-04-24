<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VDetailsController;
use App\Http\Controllers\ViewVehiclesController;
use App\Http\Controllers\VehiclesUpdateController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterOfficerController;
use App\Http\Controllers\CustomerLoginController;
use App\Http\Controllers\RegisterCustomerController;
use App\Http\Controllers\ReportController;




Route::get('/', function () {
    return view('home');
});

Route::get('/HGV', function () {
    return view('HarmfulGasVariation');
});

Route::get('/EPC', function () {
    return view('EPollutionChart');
});

Route::get('/CusError', function () {
    return view('CustomerLoginError');
});

Route::get('/OfficerError', function () {
    return view('OfficerLoginError');
});

Route::get('/service', function () {
    return view('Services');
});

Route::get('/Importance', function () {
    return view('ImportanceTest');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/freport', function () {
    return view('FinalReport');
});

Route::get('/GV', function () {
    return view('GasVariations');
});

Route::view('add','VehiclesDetails');
Route::post('add',[VDetailsController::class,'addData']);

Route::view('view','VehiclesDetails');
Route::get('view',[ViewVehiclesController::class,'show']);

Route::get('edit/{id}',[VehiclesUpdateController::class,'show2']);

Route::post('edit/{id}',[VehiclesUpdateController::class,'edit']);

Route::get('remove/{id}',[VehiclesUpdateController::class,'destroy']);

Route::get('/search',[SearchController::class,'search'])->name('web.search');

Route::view('login','Login');
Route::post('login',[LoginController::class,'LoginSystem']);


Route::view('RegisterOfficer','Rofficer');
Route::post('RegisterOfficer',[RegisterOfficerController::class,'OfficerReg']);


Route::view('CusLog','CustomerLogin');
Route::post('CusLog',[CustomerLoginController::class,'CustomerLoginSystem']);


Route::view('CusReg','CustomerRegister');
Route::post('CusReg',[RegisterCustomerController::class,'CustomerReg']);



/*Petrol vehicles report*/
Route::view('display','report');
Route::get('display',[ReportController::class,'ShowReport']);


Route::get('delete/{id}',[ReportController::class,'destroy']);

?>

<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientsController;
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
Route::get('/home', function () {
    return view('publicPage/home');
});
Route::get('/', function () {
    return view('superAdmin/superAdminBoard');
});
Route::get('/services', function () {
    return view('publicPage/services');
});
Route::get('/register_patient', function () {
    return view('superAdmin/register_patient');
});

Route::get('/login', function () {
    return view('publicPage/login');
});
Route::get('/patients', [AdminsController::class, 'view_patients'] );
Route::get('/patient_profile/{profile}', [AdminsController::class, 'view_patients_profile'] );
Route::post('/signup', [AdminsController::class, 'register_patient']);
Route::post('/login', [PatientsController::class, 'login']);
Route::post('/register_doctor', [AuthController::class, 'register_doctor']);
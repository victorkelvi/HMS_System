<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;    
use App\Http\Controllers\AdminController;


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




Route::get('/home', [Homecontroller::class , 'redirect']);


Route::get('/', [Homecontroller::class , 'index']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/add_doctor_view', [AdminController::class , 'addview']);

Route::post('/upload_doctor', [AdminController::class , 'upload']);


Route::post('/apponitment', [Homecontroller::class , 'apponitment']);



Route::get('/myappointment', [Homecontroller::class , 'myappointment']);

Route::get('/cancel_appoint/{id}', [Homecontroller::class , 'cancel_appoint']);

Route::get('/showappoitment', [AdminController::class , 'showappoitment']);

Route::get('/approved/{id}', [AdminController::class , 'approved']);

Route::get('/Cancelled/{id}', [AdminController::class , 'Cancelled']);

Route::get('/showdoctor', [AdminController::class , 'showdoctor']);


Route::get('/deletedoctor/{id}', [AdminController::class , 'deletedoctor']);


Route::get('/updatedoctor/{id}', [AdminController::class , 'updatedoctor']);


Route::post('/edit_doctor/{id}', [AdminController::class , 'edit_doctor']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return view('welcome');
// });


//INDEX PAGE
Route::get('/', function () {
    return view('admin.login');
})->name('login');



//REGISTER
Route::get('/register0101',[AuthController::class,'register'])->name('user');
Route::post('/register',[AuthController::class,'userregister'])->name('adduser');
//LOGIN
Route::post('/userlogin',[AuthController::class,'userlogin'])->name('userlogin');
//Logout
Route::get('/logout',[AuthController::class,'logout']);


//DASHBOARD
Route::get('/home',[AuthController::class,'dashboard'])->middleware('auth');
//Allfiles
Route::get('/allfiles',[DashboardController::class,'filelist'])->middleware('auth');
//Upload Files
Route::POST('/useruploadanyfile',[DashboardController::class,'uploadviewform']);

//DELETE
Route::GET('/deleted/{id}',[DashboardController::class,'remove']);

//DOWNLOAD
Route::get('/download-file/{file}', [AuthController::class, 'downloadFile'])->middleware('auth');

//VIEW IFRAME
Route::get('/iframe-file/{file}', [DashboardController::class, 'iframeFile'])->middleware('auth');


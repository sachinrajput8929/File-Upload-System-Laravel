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
Route::GET('/deleted/{id}',[DashboardController::class,'remove'])->middleware('auth');

//DOWNLOAD
Route::get('/download-file/{foldername}/{file}', [AuthController::class, 'downloadFile'])->middleware('auth');

//VIEW IFRAME
Route::get('/iframe-file/{foldername}/{file}', [DashboardController::class, 'iframeFile'])->middleware('auth');



//Create Folder
Route::POST('/createfolder',[DashboardController::class,'folder']);
//Folder Wise File
Route::GET('/folderfile/{id}/{fn}',[DashboardController::class,'folderwisefile'])->middleware('auth');
//Folder Delete
Route::GET('/folderdelete/{id}',[DashboardController::class,'deletefolder'])->middleware('auth');
//Rename Folder
Route::GET('/rename/{id}',[DashboardController::class,'renamefolder'])->middleware('auth');
Route::POST('/renamefolder',[DashboardController::class,'changefolder'])->middleware('auth');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\SmartController;
use App\Http\Controllers\MohstaffController;
use App\Http\Controllers\AnnocementController;
use App\Http\Controllers\PersonHistoryController;




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
    return view('welcome');
});
Route::get('/', [LoginController::class,'index']);
Route::post('/check',[LoginController::class,'checklogin']);
Route::get('/logout',[LoginController::class,'logout']);

Route::get('/createMoh',[AdminController::class,'createMoh']);
Route::post('/storeMoh',[AdminController::class,'storeMoh']);

Route::get('/register',[PeopleController::class,'createPeople']);
Route::post('/storePeople',[PeopleController::class,'storePeople']);
Route::get('/detail/{people}',[PeopleController::class,'detail']);
Route::get('/smart/{people}',[PeopleController::class,'smart']);
Route::get('/anno/{people}',[PeopleController::class,'anno']);

Route::post('/storeSmartVaccine/{people}',[SmartController::class,'storeSmart']);

Route::get('/smart',[MohstaffController::class,'smart']);

Route::get('/annoncement',[AnnocementController::class,'annoncement']);
Route::post('/storeAnno',[AnnocementController::class,'storeAnno']);

Route::get('/history',[PersonHistoryController::class,'history']);
Route::post('/storeHistory',[PersonHistoryController::class,'storeHistory']);

<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\CorporateController;
use App\Http\Controllers\CorporateInfoController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\JobInfoController;
use App\Http\Controllers\NiceController;
use App\Http\Controllers\NiceListController;

use App\Http\Controllers\SelectionManageController;

use App\Http\Controllers\SelectionFlowController;

use App\Http\Controllers\EngineerController;
use App\Http\Controllers\EngineerInfoController;

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

Route::get('/', function () {return view('welcome');});

Route::get('/corporate/', [CorporateController::class,'index'])->middleware(['auth'])->name('corporate.top');
require __DIR__.'/auth.php';

Route::get('/corporate/search/',[SearchController::class,'corporateSearch'])->name('corporate.search');

Route::get('/corporate/search/nice/{id}',[NiceController::class,'corporateNice'])->name('corporate.nice');
Route::get('/corporate/search/unnice/{id}',[NiceController::class,'corporateUnnice'])->name('corporate.unnice');

Route::get('/corporate/nice/',[NiceListController::class,'corporateNiceList'])->name('corporate.nice-list');

Route::get('/corporate/selection/',[SelectionManageController::class,'corporateSelectionName'])->name('corporate.selection');
Route::post('/corporate/selection/',[SelectionManageController::class,'messageSend'])->name('corporate.message');


Route::get('/corporate/job-info-index/',[JobInfoController::class,'index'])->name('corporate.job-info-index');
Route::get('/corporate/job-info-register',[JobInfoController::class,'register'])->name('corporate.job-info-register');
Route::post('/corporate/job-info-create',[JobInfoController::class,'create'])->name('corporate.job-info-create');
Route::get('/corporate/job-info-edit/{id}',[JobInfoController::class,'edit'])->name('corporate.job-info-edit');
Route::post('/corporate/job-info-update',[JobInfoController::class,'update'])->name('corporate.job-info-update');

Route::get('/corporate/corporate-info-index/',[CorporateInfoController::class,'index'])->name('corporate.corporate-info-index');
Route::get('/corporate/corporate-info-register',[corporateInfoController::class,'register'])->name('corporate.corporate-info-register');
Route::post('/corporate/corporate-info-create',[corporateInfoController::class,'create'])->name('corporate.corporate-info-create');
Route::get('/corporate/corporate-info-edit/{id}',[corporateInfoController::class,'edit'])->name('corporate.corporate-info-edit');
Route::post('/corporate/corporate-info-update',[corporateInfoController::class,'update'])->name('corporate.corporate-info-update');

Route::get('/corporate/selection-flow-register/',[SelectionFlowController::class,'register'])->name('corporate.selection-flow-register');
Route::post('/corporate/selection-flow-create/',[SelectionFlowController::class,'create'])->name('corporate.selection-flow-create');
Route::get('/corporate/selection-flow-edit/{id}',[SelectionFlowController::class,'edit'])->name('corporate.selection-flow-edit');
Route::post('/corporate/selection-flow-update/',[SelectionFlowController::class,'update'])->name('corporate.selection-flow-update');


//engineer!

Route::get('/engineer/',[EngineerController::class,'index'])->name('engineer.top');
Route::get('/engineer/search/',[SearchController::class,'engineerSearch'])->name('engineer.search');

Route::get('/engineer/search/nice/{id}',[NiceController::class,'engineerNice'])->name('engineer.nice');
Route::get('/engineer/search/unnice/{id}',[NiceController::class,'engineerUnnice'])->name('engineer.unnice');

Route::get('/engineer/nice/',[NiceListController::class,'engineerNiceList'])->name('engineer.nice-list');

Route::get('/engineer/selection/',[SelectionManageController::class,'engineerSelectionName'])->name('engineer.selection');


Route::get('/engineer/engineer-info-index/',[EngineerInfoController::class,'index'])->name('engineer.engineer-info-index');
Route::get('/engineer/engineer-info-register',[EngineerInfoController::class,'register'])->name('engineer.engineer-info-register');
Route::post('/engineer/engineer-info-create',[EngineerInfoController::class,'create'])->name('engineer.engineer-info-create');
Route::get('/engineer/engineer-info-edit/{id}',[EngineerInfoController::class,'edit'])->name('engineer.engineer-info-edit');
Route::post('/engineer/engineer-info-update',[EngineerInfoController::class,'update'])->name('engineer.engineer-info-update');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BothNiceManageController;
use App\Http\Controllers\ProductController;


use App\Http\Controllers\CorporateController;
use App\Http\Controllers\CorporateInfoController;
use App\Http\Controllers\CorporateRegistrationInfoController;
use App\Http\Controllers\FromCorporateSearchController;
use App\Http\Controllers\JobInfoController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NiceManageController;
use App\Http\Controllers\SelectionFlowController;
use App\Http\Controllers\SelectionStageController;

use App\Http\Controllers\EngineerController;

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

Route::get('/corporate/search/',[FromCorporateSearchController::class,'index'])->name('corporate.search');

Route::get('/corporate/nice/',[NiceManageController::class,'indexCorporate'])->name('corporate.nice');

Route::get('/corporate/selection/',[BothNiceManageController::class,'display'])->name('corporate.selection');
//Route::get('/corporate/selection/',[SelectionStageController::class,'update'])->name('corporate.selection');
//Route::get('/corporate/selection/',[SelectionStageController::class,'display'])->name('corporate.selection');

//Route::get('/corporate/selection/',[MessageController::class,'send'])->name('corporate.message');
//Route::get('/corporate/selection/',[MessageController::class,'display'])->name('corporate.message');

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

Route::get('/engineer/',[EngineerController::class,'index'])->name('engineer.top');
Route::get('/engineer/search/',[FromEngineerSearchController::class,'index'])->name('engineer.search');
Route::get('/engineer/nice/',[NiceManageController::class,'nice'])->name('engineer.nice');
Route::get('/engineer/nice/',[NiceManageController::class,'unNice'])->name('engineer.nice');


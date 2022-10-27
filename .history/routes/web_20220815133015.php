<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/corporate/',[CorporateRegistrationInfoController::class,'display'])->name('corporate');
Route::get('/corporate/',[SelectionFlow::class,'display'])->name('corporate');
Route::get('/corporate/',[NiceManage::class,'count'])->name('corporate');
Route::get('/corporate/',[BothNiceManage::class,'count'])->name('corporate');
Route::get('/corporate/',[SelectionStage::class,'interviewCount'])->name('corporate');
Route::get('/corporate/',[SelectionStage::class,'casualInterviewCount'])->name('corporate');

Route::get('/corporate/search/',[FromCorporateSearch::class,'select'])->name('corporate.search');
Route::get('/corporate/search/',[FromCorporateSeach::class,'search'])->name('corporate.search');
Route::get('/corporate/search/',[FromCorporateSeach::class,'sort'])->name('corporate.search');
Route::get('/corporate/search/',[NiceManage::class,'keep'])->name('corporate.search');
Route::get('/corporate/search/',[NiceManage::class,'release'])->name('corporate.search');

Route::get('/corporate/nice/',[NiceManage::class,'display'])->name('corporate.nice');

Route::get('/corporate/selection/',[BothNiceManage::class,'display'])->name('corporate.selection');
Route::get('/corporate/selection/',[SelectionStage::class,'update'])->name('corporate.selection');
Route::get('/corporate/selection/',[SelectionStage::class,'display'])->name('corporate.selection');

Route::get('/corporate/message/',[Message::class,'send'])->name('corporate.message');
Route::get('/corporate/message/',[Message::class,'display'])->name('corporate.message');

Route::get('/corporate/job-info-register/',[JobInfo::class,'register'])->name('corporate.job-info-register');
Route::get('/corporate/job-info-register/',[JobInfo::class,'display'])->name('corporate.job-info-register');
Route::get('/corporate/job-info-update/',[JobInfo::class,'update'])->name('corporate.job-info-update');

Route::get('/corporate/corporate-info-register/',[CorporateInfo::class,'register'])->name('corporate.corporate-info-register');
Route::get('/corporate/corporate-info-register/',[CorporateInfo::class,'display'])->name('corporate.corporate-info-register');
Route::get('/corporate/corporate-info-update/',[CorporateInfo::class,'update'])->name('corporate.corporate-info-update');

Route::get('/corporate/selection-flow-register/',[SelectionFlow::class,'register'])->name('corporate.selection-flow-register');
Route::get('/corporate/selection-flow-update/',[SelectionFlow::class,'display'])->name('corporate.selection-flow-update');
Route::get('/corporate/selection-flow-update/',[SelectionFlow::class,'update'])->name('corporate.selection-flow-update');










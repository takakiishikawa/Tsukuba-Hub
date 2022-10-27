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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/corporate/',[CorporateController::class,'index'])->name('corporate.top');
//Route::get('/corporate/',[CorporateRegistrationInfoController::class,'display'])->name('corporate');
//Route::get('/corporate/',[SelectionFlowController::class,'display'])->name('corporate');
//Route::get('/corporate/',[NiceManageController::class,'count'])->name('corporate');
//Route::get('/corporate/',[BothNiceManageController::class,'count'])->name('corporate');
//Route::get('/corporate/',[SelectionStageController::class,'interviewCount'])->name('corporate');
//Route::get('/corporate/',[SelectionStageController::class,'casualInterviewCount'])->name('corporate');

Route::get('/corporate/search/',[FromCorporateSearchController::class,'select'])->name('corporate.search');
//Route::get('/corporate/search/',[FromCorporateSearchController::class,'search'])->name('corporate.search');
//Route::get('/corporate/search/',[FromCorporateSearchController::class,'sort'])->name('corporate.search');
//Route::get('/corporate/search/',[NiceManageController::class,'keep'])->name('corporate.search');
//Route::get('/corporate/search/',[NiceManageController::class,'release'])->name('corporate.search');

Route::get('/corporate/nice/',[NiceManageController::class,'display'])->name('corporate.nice');

Route::get('/corporate/selection/',[BothNiceManageController::class,'display'])->name('corporate.selection');
//Route::get('/corporate/selection/',[SelectionStageController::class,'update'])->name('corporate.selection');
//Route::get('/corporate/selection/',[SelectionStageController::class,'display'])->name('corporate.selection');

//Route::get('/corporate/selection/',[MessageController::class,'send'])->name('corporate.message');
//Route::get('/corporate/selection/',[MessageController::class,'display'])->name('corporate.message');

Route::get('/corporate/job-info-register/',[JobInfoController::class,'register'])->name('corporate.job-info-register');
//Route::get('/corporate/job-info-register/',[JobInfoController::class,'display'])->name('corporate.job-info-register');
//Route::get('/corporate/job-info-update/',[JobInfoController::class,'update'])->name('corporate.job-info-update');

Route::get('/corporate/corporate-info-register/',[CorporateInfoController::class,'register'])->name('corporate.corporate-info-register');
//Route::get('/corporate/corporate-info-register/',[CorporateInfoController::class,'display'])->name('corporate.corporate-info-register');
//Route::get('/corporate/corporate-info-update/',[CorporateInfoController::class,'update'])->name('corporate.corporate-info-update');

Route::get('/corporate/selection-flow-register/',[SelectionFlowController::class,'register'])->name('corporate.selection-flow-register');
Route::get('/corporate/selection-flow-update/',[SelectionFlowController::class,'display'])->name('corporate.selection-flow-update');
Route::get('/corporate/selection-flow-update/',[SelectionFlowController::class,'update'])->name('corporate.selection-flow-update');

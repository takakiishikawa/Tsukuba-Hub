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

top






('/corporate/top/search/',[FromCorporateSeach::class,'search'])
('/corporate/top/search/',[FromCorporateSeach::class,'sort'])
('/corporate/top/search/',[NiceManage::class,'keep'])
('/corporate/top/search/',[NiceManage::class,'release'])
('/corporate/top/nice/',[NiceManage::class,'display'])
('/corporate/top/selection/',[BothNiceManage::class,'display'])
('/corporate/top/selection/',[SelectionStage::class,'update'])
('/corporate/top/selection/',[SelectionStage::class,'display'])
('/corporate/top/message/',[Message::class,'send'])
('/corporate/top/message/',[Message::class,'display'])
('/corporate/top/job-info-register/',[JobInfo::class,'register'])
('/corporate/top/job-info-register/',[JobInfo::class,'display'])
('/corporate/top/job-info-update/',[JobInfo::class,'update'])
('/corporate/top/corporate-info-register/',[CorporateInfo::class,'register'])
('/corporate/top/corporate-info-register/',[CorporateInfo::class,'display'])
('/corporate/top/corporate-info-update/',[CorporateInfo::class,'update'])

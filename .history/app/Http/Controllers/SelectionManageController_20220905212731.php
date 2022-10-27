<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BothNice;
use Illuminate\Support\Facades\Auth;



class SelectionManageController extends Controller
{
    public function corporateSelectionName(){
        $both_nices=BothNice::where('name',Auth::user()->name)->get();
        return view('corporate.top.selection',['both_nices'=>$both_nices]);
    }
    public function engineerSelectionName(){
        $both_nices=BothNice::where('name',Auth::user()->name)->get();
        return view('engineer.top.selection',['both_nices'=>$both_nices]);
    }
}

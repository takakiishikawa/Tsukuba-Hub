<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BothNice;
use Illuminate\Support\Facades\Auth;



class SelectionController extends Controller
{
    public function index(){
        $both_nices=BothNice::where('name',Auth::user()->name)->get();
        return view('corporate.top.selection',['both_nices'=>$both_nices]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;

class NiceListController extends Controller
{
    public function index(){
        $nices=Nice::where('name',Auth::user()->name)->where('type',Auth::user()->type)->get();

        $nices=Nice::all();
        return view('corporate.top.nice-list',['nices'=>$nices]);
    }
}

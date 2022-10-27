<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;
use Illuminate\Support\Facades\Auth;


class NiceListController extends Controller
{
    public function corporateNiceList(){
        $nices=Nice::where('name',Auth::user()->name)->where('type',Auth::user()->type)->get();
        return view('corporate.top.nice-list',['nices'=>$nices]);
    }
    public function corporateNicedList(){
        $nices=Nice::where('name',Auth::user()->name)->where('type',Auth::user()->type)->get();
        return view('corporate.top.nice-list',['nices'=>$nices]);
    }
    public function engineerNiceList(){
        $nices=Nice::where('name',Auth::user()->name)->where('type',Auth::user()->type)->get();
        return view('corporate.top.nice-list',['nices'=>$nices]);
    }
    public function engineerNicedList(){
        $nices=Nice::where('name',Auth::user()->name)->where('type',Auth::user()->type)->get();
        return view('corporate.top.nice-list',['nices'=>$nices]);
    }
}

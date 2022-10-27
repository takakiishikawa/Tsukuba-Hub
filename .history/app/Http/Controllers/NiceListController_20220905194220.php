<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;
use Illuminate\Support\Facades\Auth;


class NiceListController extends Controller
{
    public function corporateNiceList(){
        $nices=Nice::where('name',Auth::user()->name)->where('type','企業')->get();
        $niceds=Nice::where('name',Auth::user()->name)->where('type','エンジニア')->get();

        return view('corporate.top.nice-list')
                ->with('nices',$nices)->with('niceds',$niceds);
    }
    public function engineerNiceList(){
        $nices=Nice::where('name',Auth::user()->name)->where('type','エンジニア')->get();
        $niceds=Nice::where('name',Auth::user()->name)->where('type','企業')->get();

        return view('corporate.top.nice-list')
                ->with('nices',$nices)->with('niceds',$niceds);
    }
}
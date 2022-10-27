<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;
use Illuminate\Support\Facades\Auth;


class NiceListController extends Controller
{
    public function corporateNiceList(){
        $nices=Nice::where('name',Auth::user()->name)->where('type','企業')->get();
        return view('corporate.top.nice-list',['nices'=>$nices]);
    }

}

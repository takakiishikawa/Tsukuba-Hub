<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class NiceListController extends Controller
{
    public function index(){
        $user=Auth::user()->get;
        return view('corporate.top.aiueo',['user',$user]);
    }
}

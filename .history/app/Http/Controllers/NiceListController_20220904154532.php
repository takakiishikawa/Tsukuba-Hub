<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class NiceListController extends Controller
{
    public function index(){
        $user_id=Auth::user()->id;
        $engineer_info=EngineerInfo::where('user_id',$user_id)->get();
        return view('engineer.top.engineer-info-index',['engineer_info'=>$engineer_info]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use App\Models\EngineerInfo;



class NiceController extends Controller
{
    public function corporateNice($id){
        $nice=new Nice();
        $nice->user_id=$id;
        $nice->name=Auth::user()->name;
        $a=User::where()
        $nice->engineer_name=$id->

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;


class NiceManageController extends Controller
{
    public function count(){

    }
    public function keep(){

    }
    public function release(){

    }
    public function display(Request $request){
        return view('corporate.top.nice',[]);
    }



}

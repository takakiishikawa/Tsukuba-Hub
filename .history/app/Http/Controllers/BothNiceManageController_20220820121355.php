<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BothNiceManage;
use App\Models\NiceManage;


class BothNiceManageController extends Controller
{
    public function count(){

    }
    public function display(){
        return view('corporate.top.selection',[]);
    }
}

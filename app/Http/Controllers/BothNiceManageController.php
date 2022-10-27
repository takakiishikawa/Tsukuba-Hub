<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BothNiceManage;
use App\Models\NiceManage;


class BothNiceManageController extends Controller
{
    public function count(){

    }
    public function indexCorporate(){
        return view('corporate.top.selection',[]);
    }
    public function indexEngineer(){
        return view('engineer.top.selection',[]);
    }
}

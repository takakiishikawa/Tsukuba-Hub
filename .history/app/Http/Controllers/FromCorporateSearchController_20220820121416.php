<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EngineerInfo;
use App\Models\EngineerRegistrationInfo;
use App\Models\NiceManage;


class FromCorporateSearchController extends Controller
{
    public function select(){
        return view('corporate.top.search',[]);
    }
    public function search(){

    }
    public function sort(){

    }
}

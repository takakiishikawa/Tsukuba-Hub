<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporateController extends Controller
{
    public function index(Request,$request){
        return view('corporate.top',[]);
    }
}
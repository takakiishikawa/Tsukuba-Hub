<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;

class CorporateController extends Controller
{
    public function index(Request $request){
        return view('corporate.top',[]);
    }
}
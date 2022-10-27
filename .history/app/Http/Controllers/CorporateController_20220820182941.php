<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;

class CorporateController extends Controller
{
    public function index(Request $request){
        $interview=$request->input('interview');
        $casual_interview=$request->input('casual_interview');

        return view('corporate.top',[]);
    }
}

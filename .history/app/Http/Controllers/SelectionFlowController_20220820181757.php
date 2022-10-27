<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;

class SelectionFlowController extends Controller
{
    public function register(){
        return view('corporate.top.selection-flow-register');
    }

    public function create(Request $request) {
        $interview=$request->input('interview');
        $interview_times=$request->input('interview_times');
        $casual_interview=$request->input('casual_interview');
        $casual_interview_times=$request->input('casual_interview_times');
    }


}

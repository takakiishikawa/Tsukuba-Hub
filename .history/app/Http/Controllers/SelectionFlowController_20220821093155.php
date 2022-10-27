<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;

class SelectionFlowController extends Controller
{
    public function register(){
        $SelectionFlows=SelectionFlow::all();
        return view('corporate.top.selection-flow-register',['SelectionFlows'=>$SelectionFlows]);
    }

    public function create(Request $request) {
        $interview=$request->input('interview');
        $interview_times=$request->input('interview_times');
        $casual_interview=$request->input('casual_interview');
        $casual_interview_times=$request->input('casual_interview_times');

        SelectionFlow::create([
            'interview'=>$interview,
            'interview_times'=>$interview_times,
            'casual_interview'=>$casual_interview,
            'casual_interview_times'=>$casual_interview_times,
        ]);
        return redirect()->route('corporate.top');
    }
}

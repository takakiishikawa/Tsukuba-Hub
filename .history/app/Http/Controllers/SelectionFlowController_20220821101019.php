<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;

class SelectionFlowController extends Controller
{
    public function register(){
        return view('corporate.top.selection-flow-register',);
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

    public function edit(Request $request,$id){
        $SelectionFlow=SelectionFlow::find($id);
        return view('corporate.top.selection-flow-edit',['SelectionFlow'=>$SelectionFlow]);
    }

    public function update(Request $request){
        $id=$request->input('id');
        $interview=$request->input('interview');
        $interview_times=$request->input('interview_times');
        $casual_interview=$request->input('casual_interview');
        $casual_interview_times=$request->input('casual_interview_times');

        $SelectionFlow=SelectionFlow::find($id);
        $SelectionFlow->interview=$interview;
        $SelectionFlow_times->interview=$interview_times;
        $casual_SelectionFlow->interview=$casual_interview;
        $casual_SelectionFlow_times->interview=$casual_interview_times;


    }
}

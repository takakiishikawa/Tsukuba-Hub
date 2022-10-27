<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;
use Illuminate\Support\Facades\Auth;


class SelectionFlowController extends Controller
{
    public function index(){
        $user_id=Auth::user()->id;
        $selection_flows=SelectionFlow::where('user_id',$user_id)->get();
        return view('corporate.top.selection-flow-index')
            ->with('selection_flows',$selection_flows);
    }

    public function register(){
        return view('corporate.top.selection-flow-register',);
    }

    public function create(Request $request) {
        $user_id=Auth::user()->id;
        $interview=$request->input('interview');
        $interview_times=$request->input('interview_times');
        $casual_interview=$request->input('casual_interview');
        $casual_interview_times=$request->input('casual_interview_times');

        SelectionFlow::create([
            'user_id'=>$user_id,
            'interview'=>$interview,
            'interview_times'=>$interview_times,
            'casual_interview'=>$casual_interview,
            'casual_interview_times'=>$casual_interview_times,
        ]);
        return redirect()->route('corporate.top.selection-flow-index');
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
        $SelectionFlow->interview_times=$interview_times;
        $SelectionFlow->casual_interview=$casual_interview;
        $SelectionFlow->casual_interview_times=$casual_interview_times;
        $SelectionFlow->save();
        return redirect()->route('corporate.top.selection-flow-index');
    }
}

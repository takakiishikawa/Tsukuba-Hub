<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;

class CorporateController extends Controller
{
    public function index(Request $request){
        $interview=SelectionFlow::find($interview);
        $casual_interview=$request->input('casual_interview');

        return view('corporate.top',[
            'interview'=>$interview,
            'casual_interview'=>$casual_interview,
        ]);
    }
}

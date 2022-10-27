<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;

class CorporateController extends Controller
{
    public function index(Request $request){
        $user_id=Auth::user()->id;
        $selection_flow=SelectionFlow::where('user_id',$user_id)->get();
        return view('corporate.top',[
            'selection_flow'=>$selection_flow,
        ]);
    }
}

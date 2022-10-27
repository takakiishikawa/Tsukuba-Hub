<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;

class CorporateController extends Controller
{
    public function index(Request $request){
        $SelectionFlows=SelectionFlow::all();

        return view('corporate.top',[
            'SelectionFlows'=>$SelectionFlows,
        ]);
    }
}

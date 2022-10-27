<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;
use Illuminate\Support\Facades\Auth;
use App\Models\Nices;



class CorporateController extends Controller
{
    public function index(Request $request){
        $user_id=Auth::user()->id;
        $selection_flows=SelectionFlow::where('user_id',$user_id)->get();

        //いいね数



        return view('corporate.top')
                ->with('selection_flows',$selection_flows);
    }


}


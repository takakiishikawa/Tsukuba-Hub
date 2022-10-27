<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;
use Illuminate\Support\Facades\Auth;
use App\Models\Nice;
use App\Models\BothNice;




class CorporateController extends Controller
{
    public function index(Request $request){
        $user_id=Auth::user()->id;
        $selection_flows=SelectionFlow::where('user_id',$user_id)->get();

        //いいね数など
        $nices=Nice::where('name',Auth::user()->name)->where('type',"企業")->get();
        $niceds=Nice::where('name',Auth::user()->name)->where('type',"エンジニア")->get();
        $both_nices=BothNice


        return view('corporate.top')
                ->with('selection_flows',$selection_flows)
                ->with('nices',$nices)
                ->with('niceds',$niceds);
    }


}


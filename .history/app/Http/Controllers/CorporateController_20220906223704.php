<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;
use Illuminate\Support\Facades\Auth;
use App\Models\Nice;
use App\Models\BothNice;
use App\Models\SelectionStage;




class CorporateController extends Controller
{
    public function index(Request $request){
        $user_id=Auth::user()->id;
        $selection_flows=SelectionFlow::where('user_id',$user_id)->get();

        //いいね数など
        $nices=Nice::where('name',Auth::user()->name)->where('type',"企業")->get();
        $niceds=Nice::where('name',Auth::user()->name)->where('type',"エンジニア")->get();
        $both_nices=BothNice::where('name',Auth::user()->name)->get();

        $selection_flows=SelectionFlow::where('user_id',Auth::user()->id)->first();
        $selection_flow_id=$selection_flows->id;
        $selection_stages=SelectionStage::where('selection_flow_id',$selection_flow_id)->get();

        return view('corporate.top')
                ->with('selection_flows',$selection_flows)
                ->with('nices',$nices)
                ->with('niceds',$niceds)
                ->with('both_nices',$both_nices)
                ->with('selection_stages',$selection_stages);
    }


}


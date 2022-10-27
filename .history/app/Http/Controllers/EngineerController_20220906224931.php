<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;
use Illuminate\Support\Facades\Auth;
use App\Models\Nice;
use App\Models\BothNice;
use App\Models\SelectionStage;

class EngineerController extends Controller
{
    public function index(){
        //いいね数など
        $nices=Nice::where('engineer_name',Auth::user()->engineer_name)->where('type',"エンジニア")->get();
        $niceds=Nice::where('engineer_name',Auth::user()->engineer_name)->where('type',"企業")->get();
        $both_nices=BothNice::where('engineer_name',Auth::user()->engineer_name)->get();

        $selection_stages1=SelectionStage::where('selection_flow_id',Auth::user()->selection_flow->id)->where('selection_stage',"面談")->get();
        $selection_stages2=SelectionStage::where('selection_flow_id',Auth::user()->selection_flow->id)->where('selection_stage',"採用")->get();

        return view('engineer.top')
                ->with('selection_flows',$selection_flows)
                ->with('nices',$nices)
                ->with('niceds',$niceds)
                ->with('both_nices',$both_nices)
                ->with('selection_stages1',$selection_stages1)
                ->with('selection_stages2',$selection_stages2);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;
use Illuminate\Support\Facades\Auth;
use App\Models\Nice;
use App\Models\BothNice;
use App\Models\SelectionStage;
use App\Models\UserLogin;
use DateTime;




class CorporateController extends Controller
{
    public function index(Request $request){
        //いいね数など
        $nices=Nice::where('name',Auth::user()->name)->where('type',"企業")->get();
        $niceds=Nice::where('name',Auth::user()->name)->where('type',"エンジニア")->get();
        $both_nices=BothNice::where('name',Auth::user()->name)->get();

        //遷移毎にUserLogin生成
        $name=Auth::user()->name;
        $user_id=Auth::user()->user_id;
        $date=new DateTime('now');









        UserLogin::create([
            'name'=>$name,
            'engineer_name'=>"なし",
            'type'=>"企業",
            'logged_at'=>$date,
            'user_id'=>$user_id,
        ]);






        return view('corporate.top')
                ->with('nices',$nices)
                ->with('niceds',$niceds)
                ->with('both_nices',$both_nices);
                //->with('selection_stages1',$selection_stages1)
                //->with('selection_stages2',$selection_stages2);
    }
}


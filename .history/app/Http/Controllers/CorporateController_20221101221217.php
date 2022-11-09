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
        $user_id=Auth::user()->id;
        $date=new DateTime('now');


        $xxx=UserLogin::where('user_id',Auth::user()->id)->first();
        if($xxx){
            $xxx->logged_at=$date;
            $xxx->save();
        }else{
            UserLogin::create([
                'name'=>$name,
                'engineer_name'=>"なし",
                'type'=>"企業",
                'logged_at'=>$date,
                'user_id'=>$user_id,
            ]);
        }

        return view('corporate.top')
                ->with('nices',$nices)
                ->with('niceds',$niceds)
                ->with('both_nices',$both_nices);
                //->with('selection_stages1',$selection_stages1)
                //->with('selection_stages2',$selection_stages2);
    }
    public function log(){
        \Log::debug(2);

        $loggedRecord=userLogin::where('user_id',Auth::user()->id)->first();
        $logged=$loggedRecord->logged_at;
        \Log::debug(4);

        $niceList=Nice::where('name',Auth::user()->name)->where('type',"エンジニア")->get();
        \Log::debug(3);

        $niceCreatedList=[];
        foreach($niceCreatedRecords as $niceCreatedRecord){
            $niceCreatedList[]=$niceCreatedRecord->user_id;
        }

        \Log::debug($niceCreatedList);
        \Log::debug(1);

        $niceList=[];
        foreach($niceRecords as $niceRecord){
            $niceList[]=$niceRecord->user_id;
        }





        return response()->json([
            'logged'=>$logged,
            'niceCreatedList'=>$niceCreatedList,
        ]);
    }
}


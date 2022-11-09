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


        $userLoginRecord=UserLogin::where('user_id',Auth::user()->id)->first();

        if($userLoginRecord){
            $userLoginRecord->logged_at=$date;
            $userLoginRecord->save();
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
        $niceModalRecords=Nice::where('name',Auth::user()->name)->where('type','エンジニア')->where('still','未')->get();
        $bothNiceModalRecords=BothNice::where('name',Auth::user()->name)->where('still','未')->get();

        foreach($niceModalRecords as $niceModalRecord){
            $niceModalRecord->still="済";
            $niceModalRecord->save();
        }

        foreach($bothNiceModalRecords as $bothNiceModalRecord){
            $bothNiceModalRecord->still="済";
            $bothNiceModalRecord->save();
        }

        return response()->json([
            'niceModalRecords'=>$niceModalRecords,
            'bothNiceModalRecords'=>$bothNiceModalRecords,
        ]);
    }

    public function timeLine(){
        $bothNiceRecords=BothNice::all();
        \Log::debug($bothNiceRecords);

        $timeLineRecords=[];
        foreach($bothNiceRecords as $bothNiceRecord){
            $timeLineRecords[]=[
                'name'=>$bothNiceRecord->name,
                'engineer_name'=>$bothNiceRecord->engineer_name,
            ];
        }

        return response()->json([
            'timeLineRecords'=>$timeLineRecords,
        ]);
    }
}


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


        $userLoginRecords=UserLogin::where('user_id',Auth::user()->id)->get();
        $userLoginRecord=UserLogin::where('user_id',Auth::user()->id)->first();

        $count=$userLoginRecords->count();
        \Log::debug($count);
        if($count===2){
            $userLoginRecord->delete();

            UserLogin::create([
                'name'=>$name,
                'engineer_name'=>"なし",
                'type'=>"企業",
                'logged_at'=>$date,
                'user_id'=>$user_id,
            ]);
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
        $loggedRecord=userLogin::where('user_id',Auth::user()->id)->first();
        $logged=$loggedRecord->logged_at;

        if($loggedRecord->logged_at>$loggedRecord->updated_at){
            $xxx=100;
        }else{
            $xxx=200;
        }



        $niceCreatedRecords=Nice::where('name',Auth::user()->name)->where('type',"エンジニア")->get();
        $niceCreatedList=[];
        foreach($niceCreatedRecords as $niceCreatedRecord){
            $niceCreatedList[]=[
                'niceCreated'=>$niceCreatedRecord->created_at,
                'niceEngineerName'=>$niceCreatedRecord->engineer_name,
            ];
        };

        $bothNiceCreatedRecords=BothNice::where('name',Auth::user()->name)->get();
        $bothNiceCreatedList=[];
        foreach($bothNiceCreatedRecords as $bothNiceCreatedRecord){
            $bothNiceCreatedList[]=[
                'bothNiceCreated'=>$bothNiceCreatedRecord->created_at,
                'bothNiceEngineerName'=>$bothNiceCreatedRecord->engineer_name,
            ];
        }

        return response()->json([
            'logged'=>$logged,
            'niceCreatedList'=>$niceCreatedList,
            'bothNiceCreatedList'=>$bothNiceCreatedList,
        ]);
    }

    public function timeLine(){
        $bothNiceRecords=BothNice::orderBy('created_at','DESC')->limit(3)->get();
        \Log::debug($bothNiceRecords);

        $timeLineRecords=[];
        foreach($bothNiceRecords as $bothNiceRecord){
            $timeLineRecords[]=[
                $name=$bothNiceRecord->name,
                $engineer_name=$bothNiceRecord->engineer_name,
            ];
        }





        return response()->json([
            'timeLineRecords'=>$timeLineRecords,
        ]);
    }
}


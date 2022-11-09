<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class NiceListController extends Controller
{
    public function corporateNiceList(){
        $nices=Nice::where('name',Auth::user()->name)->where('type','企業')->get();
        $niceds=Nice::where('name',Auth::user()->name)->where('type','エンジニア')->get();

        $niceRecords=Nice::where('type','企業')->get();
        $niceList=[];
        foreach($niceRecords as $niceRecord){
            $niceList[]=$niceRecord->user_id;
        }

        $user_name=Auth::user()->name;

        $myNiceRecords=Nice::where('name',$user_name)->where('type',"企業")->get();
        $myNiceList=[];
        foreach($myNiceRecords as $myNiceRecord){
            $myNiceList[$myNiceRecord->user_id]=$myNiceRecord;
        }

        $myNicedRecords=Nice::where('name',$user_name)->where('type',"エンジニア")->get();
        $nicedList=[];
        foreach($myNicedRecords as $myNicedRecord){
            //一時的な処理-要改善
            $engineerName=$myNicedRecord->engineer_name;

            $engineerUser=User::where('engineer_name',$engineerName)->first();

            $engineerUserId=$engineerUser->id;

            $nicedList[$engineerUserId]=$myNicedRecord->engineer_name;
        }

        return view('corporate.top.nice-list')
                ->with('nices',$nices)
                ->with('niceds',$niceds)
                ->with('niceList',$niceList)
                ->with('myNiceList',$myNiceList)
                ->with('nicedList',$nicedList);
    }
    public function engineerNiceList(){
        $nices=Nice::where('engineer_name',Auth::user()->engineer_name)->where('type','エンジニア')->get();
        $niceds=Nice::where('engineer_name',Auth::user()->engineer_name)->where('type','企業')->get();
        return view('engineer.top.nice-list')
                ->with('nices',$nices)->with('niceds',$niceds);
    }
}

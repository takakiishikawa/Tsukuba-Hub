<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EngineerInfo;
use App\Models\Nice;

use App\Models\CorporateInfo;
use Illuminate\Support\Facades\Auth;
use App\Models\JobInfo;




class SearchController extends Controller
{
    public function corporateSearch(Request $request){

        //検索結果表示
        $keyword1=$request->input('keyword1');
        $keyword2=$request->input('keyword2');
        $keyword3=$request->input('keyword3');
        $keyword4=$request->input('keyword4');
        $keyword5=$request->input('keyword5');
        $keyword6=$request->input('keyword6');
        $keyword7=$request->input('keyword7');
        $keyword8=$request->input('keyword8');
        $keyword9=$request->input('keyword9');
        $keyword10=$request->input('keyword10');
        $keyword11=$request->input('keyword11');
        $keyword12=$request->input('keyword12');
        $keyword13=$request->input('keyword13');

        $query=EngineerInfo::query();

        if(!empty($keyword1)) {
            $query->where('objective',$keyword1);
        }
        if(!empty($keyword2)) {
            $query->where('work_experience',$$keyword2);
        }
        if(!empty($keyword3)) {
            $query->where('work_experience_year',$keyword3);
        }
        if(!empty($keyword4)) {
            $query->where('development_language',$keyword4);
        }
        if(!empty($keyword5)) {
            $query->where('development_framework',$keyword5);
        }
        if(!empty($keyword6)) {
            $query->where('development_database',$keyword6);
        }
        if(!empty($keyword7)) {
            $query->where('development_infra',$keyword7);
        }
        if(!empty($keyword8)) {
            $query->where('development_os',$keyword8);
        }
        if(!empty($keyword9)) {
            $query->where('expectation',$keyword9);
        }
        if(!empty($keyword10)) {
            $query->where('strength',$keyword10);
        }
        if(!empty($keyword11)) {
            $query->where('interest',$keyword11);
        }
        if(!empty($keyword12)) {
            $query->where('age',$keyword12);
        }
        if(!empty($keyword13)) {
            $query->where('objective','like',"%$keyword13%")
                ->orWhere('work_experience','like',"%$keyword13%")
                ->orWhere('work_experience_year','like',"%$keyword13%")
                ->orWhere('development_language','like',"%$keyword13%")
                ->orWhere('development_framework','like',"%$keyword13%")
                ->orWhere('development_database','like',"%$keyword13%")
                ->orWhere('development_infra','like',"%$keyword13%")
                ->orWhere('development_os','like',"%$keyword13%")
                ->orWhere('expectation','like',"%$keyword13%")
                ->orWhere('strength','like',"%$keyword13%")
                ->orWhere('interest','like',"%$keyword13%")
                ->orWhere('age','like',"%$keyword13%");
        }

        $engineer_infos=$query->get();

        $user_name=Auth::user()->name;

        $tmp=Nice::where('name',$user_name)->where('type',"企業")->get();
        $niceList=[];
        foreach($tmp as $item){
            $niceList[$item->user_id]=$item;
        }

        $searchResultCount=$engineer_infos->count();

        return view('corporate.top.search')
                ->with('engineer_infos',$engineer_infos)
                ->with('user_name',$user_name)
                ->with('niceList',$niceList)
                ->with('searchResultCount',$searchResultCount);
        }

    public function engineerSearch(Request $request){

        $keyword=$request->input('keyword');
        $keyword2=$request->input('keyword2');
        $keyword3=$request->input('keyword3');


        $query=CorporateInfo::query();

        if(!empty($keyword)) {
            $query->where('language',$keyword);
        }
        if(!empty($keyword2)) {
            $query->where('series',$keyword2);
        }
        if(!empty($keyword3)) {
            $query->where('tag',$keyword3);
        }

        $corporate_infos=$query->get();
        return view('engineer.top.search',compact('corporate_infos'));
    }



    //検索 "前" 検索結果表示
    public function ageResult($age){
        $ageRecord=EngineerInfo::where('age',$age)->get();
        $ageCount=$ageRecord->count();

        return response()->json(['count'=>$ageCount]);
    }

    public function result(){
        $xxx=10;
        return response()->json(['xxx'=>$xxx]);
    }
}


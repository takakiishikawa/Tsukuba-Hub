<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EngineerInfo;
use App\Models\Nice;
use App\Models\BothNice;
use App\Models\User;



use App\Models\CorporateInfo;
use Illuminate\Support\Facades\Auth;
use App\Models\JobInfo;




class SearchController extends Controller
{
    public function corporateSearch(Request $request,$id){
        $xxxx=$id;
        \Log::debug($xxx);


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
            $query->where('work_experience',$keyword2);
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
            $query->orWhere('objective','like',"%$keyword13%")
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

        \Log::debug($query->toSql());

        //並び替えロジック
        $engineer_infos=$query->get();
        \Log::debug($engineer_infos);


        //pageCount用の配列
        $count=0;
        $pageCount=1;
        $recordCount=3;
        $pageCountList=[1];
        foreach($engineer_infos as $engineer_info){
            $count++;

            if($count%$recordCount===0){
                $pageCount++;
                $pageCountList[]=2;
            }
        }

        \Log::debug('[SearchController][corporateSearch]',$pageCountList);

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

        $myBothNiceRecords=BothNice::where('name',$user_name)->get();
        $bothNiceList=[];
        foreach($myBothNiceRecords as $myBothNiceRecord){
            $bothNiceList[]=$myBothNiceRecord->engineer_name;
        }
        $searchResultCount=$engineer_infos->count();

        $niceRecords=Nice::where('type','企業')->get();
        $niceList=[];
        foreach($niceRecords as $niceRecord){
            $niceList[]=$niceRecord->user_id;
        }

        return view('corporate.top.search')
                ->with('engineer_infos',$engineer_infos)
                ->with('user_name',$user_name)
                ->with('myNiceList',$myNiceList)
                ->with('nicedList',$nicedList)
                ->with('bothNiceList',$bothNiceList)
                ->with('niceList',$niceList)
                ->with('searchResultCount',$searchResultCount)
                ->with('pageCountList',$pageCountList);
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



    public function result(){
        $json = file_get_contents("php://input");
        $data = json_decode($json,true);

        $query=EngineerInfo::query();

        foreach($data as $item){
        if ($item['keyword']==='keyword1'){
            $query->orWhere('objective',$item['value'])->get();
        }
        //ミドルウェアで乱数を設定、AさんBさんを判別
        \Log::debug('searchController::result enter!');
        if ($item['keyword']==='keyword2'){
            $query->orWhere('work_experience',$item['value'])->get();
        }
        if ($item['keyword']==='keyword4'){
            $query->orWhere('development_language',$item['value'])->get();
        }
        if ($item['keyword']==='keyword5'){
            $query->orWhere('development_framework',$item['value'])->get();
        }
        if ($item['keyword']==='keyword6'){
            $query->orWhere('development_database',$item['value'])->get();
        }
        if ($item['keyword']==='keyword7'){
            $query->orWhere('development_infra',$item['value'])->get();
        }
        if ($item['keyword']==='keyword8'){
            $query->orWhere('development_os',$item['value'])->get();
        }
        if ($item['keyword']==='keyword9'){
            $query->orWhere('expectation',$item['value'])->get();
        }
        if ($item['keyword']==='keyword10'){
            $query->orWhere('strength',$item['value'])->get();
        }
        if ($item['keyword']==='keyword11'){
            $query->orWhere('interest',$item['value'])->get();
        }
        }
        $count=$query->count();
        return response()->json(['count'=>$count]);
    }

    //pagination
    public function pagination(){
        $engineer_infos=EngineerInfo::all();

        return response()->json([
            'engineer_infos'=>$engineer_infos
        ]);
    }
}


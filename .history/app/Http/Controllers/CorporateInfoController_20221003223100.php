<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CorporateInfo;
use Illuminate\Support\Facades\Auth;



class CorporateInfoController extends Controller
{
    public function index(Request $request){
        $user_id=Auth::user()->id;
        $corporate_info=CorporateInfo::where('user_id',$user_id)->get();
        return view('corporate.top.corporate-info-index',['corporate_info'=>$corporate_info]);
    }

    public function register(){
        return view('corporate.top.corporate-info-register',[]);
    }

    public function create(Request $request){
        $user_id=Auth::user()->id;
        $mission_title=$request->input('mission_title');
        $mission_content=$request->input('mission_content');
        $product_name=$request->input('product_name');
        $product_content=$request->input('product_content');
        $development_language=$request->input('development_language');
        $development_framework=$request->input('development_framework');
        $development_os=$request->input('development_os');
        $development_database=$request->input('development_database');
        $development_infra=$request->input('development_infra');
        $series=$request->input('series');
        $tag=$request->input('tag');
        $founded=$request->input('founded');
        $headquarters_city=$request->input('headquarters_city');
        $uploadedfile=$request->input('image');
        $filename=$uploadedfile->getClientOriginalName();



        CorporateInfo::create([
            'user_id'=> $user_id,
            'mission_title'=>$mission_title,
            'mission_content'=>$mission_content,
            'product_name'=>$product_name,
            'product_content'=>$product_content,
            'development_language'=>$development_language,
            'development_framework'=>$development_framework,
            'development_os'=>$development_os,
            'development_database'=>$development_database,
            'development_infra'=>$development_infra,
            'series'=>$series,
            'tag'=>$tag,
            'founded'=>$founded,
            'headquarters_city'=>$headquarters_city,
            'filename'=>$filename,
        ]);

        $uploadedfile->storeAs('',$filename);

        return redirect()->route('corporate.corporate-info-index');
    }



    public function edit(Request $request ,$id){
        $corporate_info=CorporateInfo::find($id);
        return view('corporate.top.corporate-info-edit',['corporate_info'=>$corporate_info]);
    }


    public function update(Request $request){
        $id=$request->input('id');
        $mission_title=$request->input('mission_title');
        $mission_content=$request->input('mission_content');
        $product_name=$request->input('product_name');
        $product_content=$request->input('product_content');
        $development_language=$request->input('development_language');
        $development_framework=$request->input('development_framework');
        $development_os=$request->input('development_os');
        $development_database=$request->input('development_database');
        $development_infra=$request->input('development_infra');
        $series=$request->input('series');
        $tag=$request->input('tag');
        $founded=$request->input('founded');
        $headquarters_city=$request->input('headquarters_city');
        $image=$request->input('image');



        $CorporateInfo=CorporateInfo::find($id);
        $CorporateInfo->mission_title=$mission_title;
        $CorporateInfo->mission_content=$mission_content;
        $CorporateInfo->product_name=$product_name;
        $CorporateInfo->product_content=$product_content;
        $CorporateInfo->development_language=$development_language;
        $CorporateInfo->development_framework=$development_framework;
        $CorporateInfo->development_os=$development_os;
        $CorporateInfo->development_database=$development_database;
        $CorporateInfo->development_infra=$development_infra;
        $CorporateInfo->series=$series;
        $CorporateInfo->tag=$tag;
        $CorporateInfo->founded=$founded;
        $CorporateInfo->headquarters_city=$headquarters_city;
        $CorporateInfo->image=$image;
        $CorporateInfo->save();
        return redirect()->route('corporate.corporate-info-index');
    }
}



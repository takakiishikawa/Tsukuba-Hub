<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EngineerInfo;
use App\Models\NiceManage;
use Illuminate\Support\Facades\Auth;




class FromCorporateSearchController extends Controller
{
    public function index(Request $request){

        $keyword=$request->input('keyword');
        $keyword1=$request->input('keyword1');
        $keyword2=$request->input('keyword2');

        $query=EngineerInfo::query();

        if(!empty($keyword)) {
            $query->where('language',$keyword);
        }
        if(!empty($keyword1)) {
            $query->where('age',$keyword1);
        }
        if(!empty($keyword2)) {
            $query->where('address',$keyword2)
        }

        $engineer_info=$query->get();
        return view('corporate.top.search',compact('engineer_info'));
    }

}


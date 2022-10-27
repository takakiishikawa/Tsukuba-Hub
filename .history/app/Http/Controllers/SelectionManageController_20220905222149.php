<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BothNice;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;



class SelectionManageController extends Controller
{
    public function corporateSelectionName(){
        $both_nices=BothNice::where('name',Auth::user()->name)->get();
        return view('corporate.top.selection',['both_nices'=>$both_nices]);
    }
    public function engineerSelectionName(){
        $both_nices=BothNice::where('engineer_name',Auth::user()->engineer_name)->get();
        return view('engineer.top.selection',['both_nices'=>$both_nices]);
    }

    public function messageSend(Request $request){
        $message=new message();
        $both_nice=BothNice::where('name',Auth::user()->name)->first();
        $both_nice_id=$both_nice->id;
        $message->both_nice_id=$both_nice_id;
        $message->type=Auth::user()->type;
        $message->content=$request->input('content');
        $message->save();
        return view('corporate.top.search');
    }
}

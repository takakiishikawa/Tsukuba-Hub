<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BothNice;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use App\Models\SelectionStage;




class SelectionManageController extends Controller
{
    public function corporateIndex(){
        $both_nice=BothNice::where('name',Auth::user()->name)->get();
        //メッセージ内容


        return view('corporate.top.selection')
                ->with('both_nice',$both_nice)
                ->with('messages',$messages)
                ->with('selection_stages',$selection_stages);
    }
    public function engineerIndex(){
        $both_nices=BothNice::where('engineer_name',Auth::user()->engineer_name)->get();
        //メッセージ内容
        $both_nice=BothNice::where('engineer_name',Auth::user()->engineer_name)->first();
        $both_nice_id=$both_nice->id;
        $messages=Message::where('both_nice_id',$both_nice_id)->get();

        return view('engineer.top.selection')
                ->with('both_nices',$both_nices)
                ->with('messages',$messages);
    }

    public function corporateSelectionMessage(Request $request){
        $message=new Message();
        $message->user_id=Auth::user()->id;
        $both_nice=BothNice::where('name',Auth::user()->name)->first();
        $message->both_nice_id=$both_nice->id;
        $message->type=Auth::user()->type;
        $message->message_content=$request->input('message_content');
        $message->save();
        return redirect()->route('corporate.selection');
    }
    public function engineerSelectionMessage(Request $request){
        $message=new Message();
        $both_nice=BothNice::where('engineer_name',Auth::user()->engineer_name)->first();
        $message->both_nice_id=$both_nice->id;
        $message->type=Auth::user()->type;
        $message->content=$request->input('content');
        $message->save();
        return redirect()->route('engineer.selection');
        }

}

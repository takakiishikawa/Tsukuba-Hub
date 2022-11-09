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
        $both_nice=BothNice::where('name',Auth::user()->name)->first();
        //メッセージ内容
        $messages=Message::where('both_nice_id',$both_nice->id)->get();
        return view('corporate.top.selection')
                ->with('both_nice',$both_nice)
                ->with('messages',$messages);
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


    public function apiCorporateIndex(){

        $xx=[];
        $xx[]=[
            [
                1,
                2,
                3,
            ],
        ];
        \Log::debug($xx);
        \Log::debug(100);


        $both_nices=BothNice::where('name',Auth::user()->name)->get();
        $apiCorporateSelection=[];

        foreach($both_nices as $both_nice){
            $messages=Message::where('both_nice_id',$both_nice->id)->get();

            $apiCorporateSelection[]=[
                'engineer_name'=>$both_nice->engineer_name,
                'selection_stage'=>$both_nice->selection_stage->selection_stage,
                'message_content'=>[],
            ];
        }



        \Log::debug($apiCorporateSelection->messageContent;);




        return response()->json([
            'apiCorporateSelection'=>$apiCorporateSelection,
        ]);
    }
}

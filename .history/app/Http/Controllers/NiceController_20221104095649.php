<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;
use App\Models\BothNice;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\EngineerInfo;
use App\Models\SelectionStage;
use Illuminate\Support\Facades\DB;



class NiceController extends Controller
{

    public function corporateNice($id){
        DB::transaction(function () use ($id) {

        $user=User::where('id',$id)->first();
        $tmp=Nice::where('name',Auth::user()->name)->where('engineer_name',$user->engineer_name)->where('type','エンジニア')->first();
        if ($tmp){
            $tmp->delete();
            $both_nice=new BothNice();
            $both_nice->user_id=Auth::user()->id;
            $both_nice->name=Auth::user()->name;
            $both_nice->engineer_name=$user->engineer_name;
            $both_nice->still="未";
            $both_nice->save();
            //選考段階
            $selection_stage=new SelectionStage;
            $selection_stage->user_id=Auth::user()->id;
            $selection_stage->both_nice_id=$both_nice->id;
            $selection_stage->selection_flow_id=Auth::user()->selection_flow->id;
            $selection_stage->selection_stage="面談";
            $selection_stage->save();
        }
        else{
        $nice=new Nice();
        $nice->user_id=$user->id;
        $nice->name=Auth::user()->name;
        $nice->type=Auth::user()->type;
        $user=User::where('id',$id)->first();
        $nice->engineer_name=$user->engineer_name;
        $nice->save();
        }
        });
        return redirect()->route('corporate.search');

    }

    public function corporateUnnice($id){
        $nice=Nice::where('user_id',$id)->first();
        $nice->delete();
        return redirect()->route('corporate.search');
    }

    public function engineerNice($id){
        DB::transaction(function () use ($id) {

            $user=User::where('id',$id)->first();
            $tmp=Nice::where('engineer_name',Auth::user()->engineer_name)->where('name',$user->name)->where('type','企業')->first();
            if ($tmp){
                $tmp->delete();
                $both_nice=new BothNice();
                $both_nice->user_id=Auth::user()->id;
                $both_nice->engineer_name=Auth::user()->engineer_name;
                $both_nice->name=$user->name;
                $both_nice->save();
                //選考段階

            }
            else{
            $nice=new Nice();
            $nice->user_id=$user->id;
            $nice->engineer_name=Auth::user()->engineer_name;
            $nice->type=Auth::user()->type;
            $user=User::where('id',$id)->first();
            $nice->name=$user->name;
            $nice->save();
            }
            });
            return redirect()->route('engineer.search');
    }

    public function engineerUnnice($id){
        $nice=Nice::where('user_id',$id)->where('engineer_name',Auth::user()->engineer_name)->first();
        $nice->delete();
        return redirect()->route('engineer.search');
    }
}


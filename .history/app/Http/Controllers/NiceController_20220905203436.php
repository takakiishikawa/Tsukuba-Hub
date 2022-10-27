<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;
use App\Models\BothNice;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\EngineerInfo;



class NiceController extends Controller
{
    public function corporateNice($id){
        $user=User::where('id',$id)->first();
        $tmp=Nice::where('name',Auth::user()->name)->where('engineer_name',$user1->engineer_name)->where('type','エンジニア')->first();
        if ($tmp){
            $tmp->delete();

        }
        else{
        $nice=new Nice();
        $nice->user_id=$id;
        $nice->name=Auth::user()->name;
        $nice->type=Auth::user()->type;
        $user2=User::where('id',$id)->first();
        $nice->engineer_name=$user2->engineer_name;
        $nice->save();
        }
        return redirect()->route('corporate.search');
    }

    public function corporateUnnice($id){
        $nice=Nice::where('user_id',$id)->first();
        $nice->delete();
        return redirect()->route('corporate.search');
    }

    public function engineerNice($id){
        $nice=new Nice();
        $nice->user_id=$id;
        $nice->engineer_name=Auth::user()->engineer_name;
        $nice->type=Auth::user()->type;
        $user=User::where('id',$id)->first();
        $nice->name=$user->name;
        $nice->save();
        return redirect()->route('engineer.search');
    }

    public function engineerUnnice($id){
        $nice=Nice::where('user_id',$id)->first();
        $nice->delete();
        return redirect()->route('engineer.search');
    }
}


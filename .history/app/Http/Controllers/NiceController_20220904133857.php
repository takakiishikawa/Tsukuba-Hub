<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\EngineerInfo;



class NiceController extends Controller
{
    public function corporateNice($id){
        $nice=new Nice();
        $nice->user_id=$id;
        $nice->name=Auth::user()->name;
        $user=User::where('id',$id)->first();
        $nice->engineer_name=$user->engineer_name;
        $nice->save();
        return redirect()->route('corporate.search');
    }

    public function corporateUnnice($id){
        $nice=new Nice();
        $nice->user_id=$id;
        $nice->name=Auth::user()->name;
        $user=User::where('id',$id)->first();
        $nice->engineer_name=$user->engineer_name;
        $nice->save();
        return redirect()->route('corporate.search');
    }

    /**
    public function corporateUnnice($id){
        $user_id=$id;
        $name=Auth::user()->name;
        $user=User::where('id',$id)->first();
        $engineer_name=$user->engineer_name;

        $nice=Nice::where('user_id',$user_id)->where('name',$name)->where('engineer_name',$engineer_name)->first();
        $nice->delete();
        return redirect()->route('corporate.search');
    }
    */

}


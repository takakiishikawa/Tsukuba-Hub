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
        $name=Auth::user()->name;
        $user=User::where('id',$id)->first();
        $engineer_name=$user->engineer_name;

        $nice=Nice::where('user_id',$id)->first();
        $nice->delete();
        return redirect()->route('corporate.search');
    }

}    public function unnice(Post $post, Request $request){
    $user=Auth::user()->id;
    $nice=Nice::where('post_id', $post->id)->where('user_id', $user)->first();
    $nice->delete();
    return back();
}
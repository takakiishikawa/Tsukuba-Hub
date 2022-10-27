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
        $user=User::where('id',$id)->get();
        $nice->engineer_name=$user->engineer_name;
        $nice->save();
        return redirect()->route('corporate.search');
    }
}

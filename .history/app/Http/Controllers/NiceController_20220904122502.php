<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;

class NiceController extends Controller
{
    public function corporateNice($id){
        $nice=new Nice();
        $nice->user_id=$id;
        $nice->name=Auth::user()->name;
        $nice->engineer_name=

    }
}

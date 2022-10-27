<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function corporateNice(){
        $nice=new Nice();
    }
}

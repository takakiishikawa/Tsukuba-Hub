<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;

class NiceController extends Controller
{
    public function corporateNice(){
        $nice=new Nice();
    }
}

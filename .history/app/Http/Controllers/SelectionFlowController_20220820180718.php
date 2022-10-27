<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionFlow;

class SelectionFlowController extends Controller
{
    public function register(){
        return view('corporate.top.selection-flow-register');
    }



}

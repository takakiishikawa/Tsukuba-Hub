<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;


class NiceListController extends Controller
{
    public function index(){
        $nice=Nice::all();
        return view('corporate.top.nice-list');
    }
}
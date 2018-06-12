<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('094007.index');
    }
    public function student(){
        return view('094007.student');
    }
    public function fees(){
        return view('094007.fees');
    }
    public function records(){
        return view('094007.records');
    }
}

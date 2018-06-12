<?php
/**
 * Created by PhpStorm.
 * User: Adrian Karani
 * Date: 12/06/2018
 * Time: 13:03
 */

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

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



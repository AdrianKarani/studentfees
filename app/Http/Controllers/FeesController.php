<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\student;
use App\fee;

class FeesController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('094007.records');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $fees = new fees;
        $fees->studentnumber = request('studentnumber');
        $fees->studentname = request('studentname');
        $fees->amount1 = request('amount1');
        $fees->save();

        return redirect('/')->with('success','Student Added');

    }
}

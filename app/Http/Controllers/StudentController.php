<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\student;

class StudentController extends Controller
{    public function store()
{
    $student=new Student();
    $student->student_number=request('studentNumber');
    $student->full_name=request('studentname');
    $student->birthdate=request('birthdate');
    $student->address=request('address');
    $student->save();
    return redirect('/student');
}
}

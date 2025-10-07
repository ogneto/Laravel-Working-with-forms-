<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    //
    public function FormGet() {
        return view('site.form');
    }

    public function FormPost(Request $request) {
        Student::create($request->all());
    }
}

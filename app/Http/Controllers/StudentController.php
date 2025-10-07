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
        //Student::create($request->all());

        $student = new Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone_number = $request->input('phone_number');
        $student->college_address = $request->input('college_address');
        $student->comment = $request->input('comment');

        $student->save();

        /* Other forms to save a student in the database:

            // Using the fill method:
            $student = new Student;
            $student->fill($request->all());
            $student->save();

            // Using the create mehotd:
            $student = new Student;
            $student->create($request->all());
        */
        return view('site.form-ok', ['request' => $request]);
    }
}

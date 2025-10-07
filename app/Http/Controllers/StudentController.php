<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Address;


class StudentController extends Controller
{
    //
    public function FormGet() {

        $addresses = Address::all();

        return view('site.form', ['addresses' => $addresses]);
    }

    public function FormPost(Request $request) {

        $rules = [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|max:80|unique:students',
            'phone_number' => 'required|max:25|unique:students',
            'college_address_id' => 'required',
            'comment' => 'required|max:1000',
        ];

        $messages = [
            'required' => "The field :attribute is required! Please try again!",
            'email.email' => "Sorry. You didn't write a valid email. Please try again!",
            'comment.max' => "Sorry, the comments can't be bigger than 1000 "
        ];

        $request->validate($rules, $messages);

        $student = new Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone_number = $request->input('phone_number');
        $student->college_address_id = $request->input('college_address_id');
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

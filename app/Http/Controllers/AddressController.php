<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    //
    public function FormGet() {
        return view('site.form-address');
    }

    public function FormPost(Request $request) {

        $rules = [
            'address' => 'required|unique:addresses'
        ];

        $messages = [
            'address.required' => 'The field address is required. Please try again!',
            'address.unique' => 'This address already exists. Please check the database!'
        ];

        $request->validate($rules, $messages);

        Address::create($request->all());
        return view('site.form-ok-address');

    }
}

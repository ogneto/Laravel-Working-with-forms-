<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class MainController extends Controller
{
    //
    public function MainPage() {

        $addresses = Address::all();

        return view('site.main', ['addresses' => $addresses]);
    }
}

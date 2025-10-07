<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function MainPage() {

        $addresses = [
            "1" => 'Asa Norte',
            "2" => 'Asa Sul',
            "3" => 'Sudoeste'
        ];

        return view('site.main', ['addresses' => $addresses]);
    }
}

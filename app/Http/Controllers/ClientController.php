<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function homePage() {
        return view('client.home');
    }

    public function activities() {
        return view('client.activities');
    }

    public function health() {
        return view('client.health');
    }

    public function partners() {
        return view('client.partners');
    }

    public function about() {
        return view('client.about');
    }

    public function contact() {
        return view('client.contact');
    }
}

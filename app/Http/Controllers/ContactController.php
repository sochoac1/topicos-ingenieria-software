<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(): View
    {
        $data1 = "Contact us - Online Store";
        $data2 = "Contact us";
        $Email = "Email: sochoac1@eafit.edu.co ...";
        $Phone = "Number: 3224328942";
        return view('home.contact')->with("title", $data1)
        ->with("subtitle", $data2)
        ->with("email", $Email)
        ->with("phone", $Phone);
    }
}

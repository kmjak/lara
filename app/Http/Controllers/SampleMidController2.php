<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleMidController2 extends Controller
{
    public function index(Request $request)
    {
        return view('sample-mid2');
    }
}

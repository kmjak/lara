<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class info extends Controller
{
    public function index($msg = 'anonymous')
    {
        switch ($msg) {
            case 'anonymous':
                return view('error');
            default:
                return view('info', ['msg' => $msg]);
        }
    }
}

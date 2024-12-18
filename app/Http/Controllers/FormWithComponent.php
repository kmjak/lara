<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormWithComponent extends Controller
{
    public function index(Request $req)
    {
        $params = [
            'name' => $req->input('name')
        ];
        return view('form-with-component', $params);
    }
}

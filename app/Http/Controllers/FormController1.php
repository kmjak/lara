<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController1 extends Controller
{
    public function index(Request $req)
    {
        $params = [
            'method' => $req->method(),
            'val1' => $req->input('val1', null),
            'val2' => $req->input('val2', null),
            'msg' => $req->input('msg', null),
            'item' => ['apple', 'banana', 'cherry'],
        ];
        return view('form1', $params);
    }
}

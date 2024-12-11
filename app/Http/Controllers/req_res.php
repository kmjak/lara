<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class req_res extends Controller
{
    public function index(Request $request, Response $response){
        return view('req_res', ['req' => $request, 'res' => $response]);
    }
}

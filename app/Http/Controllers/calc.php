<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calc extends Controller
{
    function index(){
        return view('calc', ['calc' => session("calc","0")]);
    }

    function post() {
        if(isset($_POST['calc'])){
            try{
                $act = session()->get('calc');
                session()->forget('calc');
                session(['calc' => ""]);
    
                $res = eval("return $act;");
                return view('calc', ['calc' => $act, 'res'=> $res]);
            } catch (\Throwable $th) {
                return view('calc', ['calc' => $act. "=", 'res'=> "Error"]);
            }
        }
        $act = strval($_POST['action']);
        if(session()->has('calc')){
            $sess = session("calc","") . $act;
        } else {
            $sess = $_POST['action'];
        }

        session(['calc'=> strval($sess)]);
        return view('calc', ['calc' => $sess]);
    }
}

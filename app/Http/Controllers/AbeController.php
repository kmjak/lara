<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbeController extends Controller
{
    public function index(Request $req)
    {
        if($req->method() == "GET") {
            $direction = session('direction', null);
            $page = session('page', null);
            if($direction == null || $page == null) {
                return view("form");
            }
        } else {
            $direction = $req->input('direction');
            $page = $req->input('page');
            if($page == "session_delete") {
                session()->forget('direction');
                session()->forget('page');
                return view("form");
            }
        }

        session(['direction' => $direction, 'page' => $page]);

        $params = ['title' => "阿部 寛のホームページ", "layout" => "layouts.".$direction."_bar", "page" => $page];
        $goto = [
            ["dis_name"=>"トップ","val"=>"top","color"=>'bg-red-200'],
            ["dis_name"=>"映画出演","val"=>"movie","color"=>'bg-green-400'],
            ["dis_name"=>"ドラマ出演","val"=>"drama","color"=>'bg-cyan-400'],
            ["dis_name"=>"舞台出演","val"=>"stage","color"=>'bg-blue-400'],
            ["dis_name"=>"写真集","val"=>"  ","color"=>'bg-blue-500'],
            ["dis_name"=>"出版本","val"=>"book","color"=>'bg-blue-700'],
            ["dis_name"=>"管理者","val"=>"admin","color"=>'bg-purple-400'],
            ["dis_name"=>"session reset","val"=>"session_delete","color"=>'bg-purple-800'],
        ];
        
        switch ($direction) {
            case "left":
                return view("abe", ["params"=>$params,"goto"=>$goto]);
            case 'right':
                return view("abe", ["params"=>$params,"goto"=>$goto]);

            default:
                return view('error');
        }
    }
}

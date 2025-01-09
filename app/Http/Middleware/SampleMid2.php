<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SampleMid2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $age = $request->input('age');
        $name = $request->input('name');
        $email = $request->input('email');
        $msg = $name. "さんの利用料金は";
        if ($age < 8) {
            $msg = $msg. '無料です。';
        } elseif ($age < 12) {
            $msg = $msg. '500円です。';
        } elseif ($age < 65) {
            $msg = $msg. '1000円です。';
        } else {
            $msg = $msg. '無料です。';
        }
        $msg = $msg. "詳しい情報はメールアドレス". $email. "に送りました。";
        echo $msg;
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class auth
{
    /**
     * ユーザー認証のミドルウェアレイヤー
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $access_token = $request->input('access_token');
        //TODO：Redisから取得する

        return $next($request);
    }
}

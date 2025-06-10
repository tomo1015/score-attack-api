<?php

namespace App\Http;

use App\Http\Middleware\auth;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Middleware\SetCacheHeaders;
use Symfony\Component\HttpKernel\HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        //\Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
    ];

    protected $routeMiddleware = [
        'cache.headers' => SetCacheHeaders::class, // ヘッダキャッシュさせないようにする
        'can' => Authorize::class, // 特定のモデルやリソースへのアクションに対してポリシーを付与する機能（Laravel5.3から参照先変更）
        'controller.auth' => auth::class
    ];
}

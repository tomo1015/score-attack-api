<?php

namespace App\Http\Controllers\Api;

use App\Logic\AuthLogic;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    private AuthLogic $logic;
    public function __construct()
    {
    }

    /**
     * ユーザー登録
     * @param Request $request
     * @return array
     * @throws \Throwable
     */
    public function register(Request $request): array
    {
        //リクエストの事前セット
        $this->logic->setRequest($request);
        return $this->logic->register();
    }

    /**
     * ユーザーログイン
     * @param Request $request
     * @return array
     * @throws \Exception
     */
    public function login(Request $request): array
    {
        $this->logic->setRequest($request);
        return $this->logic->login();
    }
}

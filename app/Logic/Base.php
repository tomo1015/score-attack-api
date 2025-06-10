<?php

namespace App\Logic;


use Illuminate\Http\Request;

class Base
{
    private Request $request;
    private int $code;
    private string $error_msg;

    public function getRequest(): Request
    {
        return $this->request;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getErrorMessage()
    {
        return $this->error_msg;
    }

    /**
     * リクエストのセット
     * @param Request $request
     * @return void
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;

        $this->code = 200;
        $this->error_msg = null;
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Logic\ScoreLogic;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ScoreController extends Controller
{
    private ScoreLogic $logic;

    public function __construct(ScoreLogic $logic)
    {

    }

    /**
     * スコア登録
     * @param Request $request
     * @return array
     */
    public function submit(Request $request)
    {
        $this->logic->setRequest($request);
        return $this->logic->submit();
    }
}

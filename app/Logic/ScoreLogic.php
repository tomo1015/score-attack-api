<?php

namespace App\Logic;

use App\Models\U\User;
use App\Service\ScoreService;
use Illuminate\Support\Facades\DB;
use Throwable;

class ScoreLogic extends Base
{
    public function __construct(private ScoreService $service)
    {

    }

    /**
     * スコア情報の登録
     * @throws Throwable
     */
    public function submit(): array
    {
        $score = $this->getRequest()->input('score');

        $user_id = $this->getRequest()->input('user_id');
        $user = User::getUserByUserId($user_id);

        $this->service->submitScore($user, $score);

        return [];
    }
}

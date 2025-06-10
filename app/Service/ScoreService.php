<?php

namespace App\Service;

use App\Models\C\Score;
use App\Models\U\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class ScoreService
{
    /**
     * @throws \Throwable
     */
    public function submitScore(User $user, int $score): array
    {
        $score = Score::createNoSave([
            'user_id', $user->user_id,
            'score' => $score,
        ]);

        try {
            DB::connection()->beginTransaction();

            $user->save();

            DB::connection()->commit();
        } catch (\Exception $exception) {
            DB::connection()->rollBack();
            throw new \Exception('update db transaction failed');
        }

        //Redisのキャッシュ更新
        Redis::add('ranking', $score, $user->user_id);

        return [
            'user_id' => $user->user_id,
            'score' => $score
        ];
    }
}

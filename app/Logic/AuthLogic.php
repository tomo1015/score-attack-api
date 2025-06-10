<?php

namespace App\Logic;

use App\Models\U\User;
use Illuminate\Support\Facades\DB;
use Throwable;

class AuthLogic extends Base
{
    /**
     * @throws Throwable
     */
    public function register(): array
    {
        //ユーザーの登録を行う
        $user = User::createNoSave([
            'name' => $this->getRequest()->input('name'),
            'email' => $this->getRequest()->input('email'),
            'score' => 0,//スコア0
        ]);

        try {
            DB::connection()->beginTransaction();

            $user->save();

            DB::connection()->commit();
        } catch (\Exception $exception) {
            DB::connection()->rollBack();
            throw new \Exception('update db transaction failed');
        }

        return [
            'is_ok' => true
        ];
    }

    public function login()
    {
        $user = User::getUser($this->getRequest()->input('email'));
        if ($user === null) {
            throw new \Exception('user data is not found');
        }

        return [
            'is_ok' => true
        ];
    }
}

<?php

namespace App\Models\U;

use App\Models\ModelBase;

/**
 * @property int $user_id
 * @property string $name
 * @property string $email
 */
class User extends ModelBase
{
    protected static $database_name_prefix = 'score_attack';
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'email'
    ];

    /**
     * email情報で取得
     * @param string $email
     * @return User
     */
    public static function getUserByEmail(string $email): User
    {
        return self::w()
            ->where('email', $email)
            ->first();
    }

    /**
     * ユーザーIDで取得
     * @param int $user_id
     * @return User
     */
    public static function getUserByUserId(int $user_id): User
    {
        return self::w()
            ->where('user_id', $user_id)
            ->first();
    }
}

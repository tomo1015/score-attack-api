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

    public static function getUser(string $email)
    {
        return self::w()
            ->where('email', $email)
            ->first();
    }
}

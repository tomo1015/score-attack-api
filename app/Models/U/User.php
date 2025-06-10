<?php

namespace App\Models\U;

use App\Models\ModelBase;

class User extends ModelBase
{
    protected static $database_name_prefix = 'score_user';
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'email',
        'score'
    ];

    public static function getUser(string $email)
    {
        return self::w()
            ->where('email', $email)
            ->first();
    }
}

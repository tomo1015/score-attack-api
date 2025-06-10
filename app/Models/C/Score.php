<?php

namespace App\Models\C;

use App\Models\ModelBase;

class Score extends ModelBase
{
    protected static $database_name_prefix = 'score_attack';
    protected $table = 'scores';

    protected $fillable = [
        'user_id',
        'score'
    ];
}

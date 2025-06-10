<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ModelBase extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    protected static $database_name_prefix;

    public static function w(): Builder
    {
        return static::on(static::$database_name_prefix);
    }

    public static function r(): Builder
    {
        return static::on(static::$database_name_prefix);
    }

    public static function createNoSave(array $fill)
    {
        return static::w()->getModel()->fill($fill);
    }

    public function save(array $options = []): bool
    {
        return parent::save();
    }
}

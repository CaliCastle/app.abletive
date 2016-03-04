<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        "version", "build", "is_beta", "download"
    ];

    /**
     * iOS application instance
     *
     * @return mixed
     */
    public static function iOS()
    {
        return static::where('platform', 'iOS')->first();
    }
}

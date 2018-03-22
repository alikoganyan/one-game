<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gamers extends Model
{
    protected $fillable = [
        "name",
        "email",
        "level_id",
        "social_id"
    ];

    protected $hidden = [
    ];

    public static function getBySocialId($social_id){
        return self::query()
            ->where(["social_id"=>$social_id])
            ->first();
    }
}

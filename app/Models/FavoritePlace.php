<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FavoritePlace extends Model
{

    protected $fillable =
        [
            "user_id",
            "place_id",
        ];

    protected $hidden = [
        "created_at", "updated_at"
    ];
}

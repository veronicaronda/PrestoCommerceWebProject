<?php

namespace App\Models;

use Maize\Markable\Markable;
use Maize\Markable\Models\Favorite;
use Illuminate\Database\Eloquent\Model;

class Pattern extends Model
{
    use Markable;

    protected static $marks = [
        Favorite::class,
    ];
}

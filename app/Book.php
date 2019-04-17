<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{







    protected $fillable = [
        'name', 'pages', 'ISBN','price' ,'published_at',
    ];
}

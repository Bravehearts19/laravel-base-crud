<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    protected $fillable = [
        'price', 'sale_date', 'type'
    ];

    protected $hidden = [

    ];
}

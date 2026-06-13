<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgressProject extends Model
{
    protected $fillable = [
        'title',
        'description',
        'technology',
        'image',
        'year',
        'sort_order',
    ];
}

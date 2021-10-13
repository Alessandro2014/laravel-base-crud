<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'series', 'type', 'sale_date', 'price', 'thumb', 'description',];
}

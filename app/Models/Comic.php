<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'series', 'type', 'sale_date', 'price', 'thumb', 'description',];

    public function getCreatedAt() 
    {
        return Carbon::create($this->created_at)->format('d-m-Y');
    }

    public function getUpdatedAt() {
        return Carbon::create($this->updated_at)->format('d-m-Y');
    }
}

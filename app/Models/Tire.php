<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tire extends Model
{
    protected $fillable = ['name', 'price', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}

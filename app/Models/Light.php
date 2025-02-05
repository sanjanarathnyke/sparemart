<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Light extends Model
{
    protected $table = 'light';  // Specify the table name

    protected $fillable = ['name', 'price', 'category_id', 'image'];  // Fillable fields

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}

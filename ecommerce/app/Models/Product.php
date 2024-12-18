<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // Explicitly specify the table name
    protected $table = 'product';  // This tells Laravel to use the 'product' table

    protected $fillable = [
        'name',
        'category_id',
        'about',
        'price',
        'discounted_price',
        'rating',
        'thumbnail',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class); // A product belongs to one category
    }
}

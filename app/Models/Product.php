<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'title',
        'is_in_stock',
        'average_rating',
        'default_variant',
    ];
    function variant()
    {
        return $this->hasMany(variant::class,'productId');
    }
    use HasFactory;
}

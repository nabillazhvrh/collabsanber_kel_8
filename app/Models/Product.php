<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'photo',
        'price',
    ];
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}

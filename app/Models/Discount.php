<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

        protected $fillable = [
        'title',
        'description',
        'image',
        'old_price',
        'new_price',
        'url',
        'shop_id',
        'category_id',
        'user_id',
        'start_date',
        'end_date'
    ];

}

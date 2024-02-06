<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_register extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'cate_id',
        'small_description',
        'orignal_price',
        'selling_price',
        'slug',
        'image',
        'qty',
        'tax',
        'status',
        'trending',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'describtion', 'status', 'popular', 'meta_title', 'meta_descrip', 'meta_kewords', 'image' ,
     

    ];

}

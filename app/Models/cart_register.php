<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart_register extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'user_id', 'pro_id', 'pro_qty','selling_price'

    ];
}

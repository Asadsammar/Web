<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_code',
        'name_of_goods',
        'catagory_item',
        'price',
        'qty',
    ];
}

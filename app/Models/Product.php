<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'producer',
        'type',
        'title',
        'description',
        'weight',
        'amount',
        'price'
    ];
    protected $table = 'products';
}

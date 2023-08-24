<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // {
    //     // protected $table = 'products'; // Name of the database table
    //     // protected $primaryKey = 'id'; // Primary key field
    //     // public $timestamps = true; // Enable timestamps
    //     // protected $fillable = ['name', 'price', 'description']; // Fillable attributes
    // }
 protected $table = 'products';
    protected $fillable = [
        'name',
        'category',
        'description',
        'price',
        'rate',
        'discount_price',
        'original_price',
        'quantity',
        'tags',
        'image',
    ];


    
}

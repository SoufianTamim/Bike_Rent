<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'name' ,
        'category' ,
        'condition' ,
        'manufacturer' ,
        'model' ,
        'size' ,
        'price' ,
        'weight' ,
        'maintenance_history' ,
        'speeds_number' ,
        'location' ,
        'image1',
        'image2',
        'image3',
        'image4',
        'description',
        'created_at',
        'updated_at',
    ];

}

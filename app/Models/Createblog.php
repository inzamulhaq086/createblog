<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Createblog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'discription',
        'color',
        'price',
        'code',
        'size',
        'images',
    ];

}

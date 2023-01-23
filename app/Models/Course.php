<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'oldprice',
        'price',
        'price_credit',
        'school',
        'places',
        'tiny_desc',
        'start_date',
        'about',
        'skills',
        'link',
        'comments'
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'content',
        'category_id',
    ];
}

// https://youtu.be/MG1kt_wiIz0?t=9605
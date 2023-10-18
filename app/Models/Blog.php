<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'image_title',
        'image_desc',
        'title',
        's_description',
        'l_description',
        'blog_title_url'
    ];
}

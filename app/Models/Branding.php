<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branding extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_image',
        'main_image_title',
        'main_image_desc',
        'title',
        'categories',
        's_description',
        'l_description',
        'image1',
        'image2',
        'image3',
        'image4',
        'image1_title',
        'image1_desc',
        'image2_title',
        'image2_desc',
        'image3_title',
        'image3_desc',
        'image4_title',
        'image4_desc',
        
    ];

}

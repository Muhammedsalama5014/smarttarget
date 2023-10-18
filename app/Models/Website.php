<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'main_image',
          'main_image_title',
        'main_image_desc',
        'title',
        's_description',
        'image1',
        'image2',
        'image3',
         'image1_title',
        'image1_desc',
        'image2_title',
        'image2_desc',
        'image3_title',
        'image3_desc',
        'image4',
        'sec1_image',
        'sec1_title',
        'sec1_description',
        'sec2_image',
        'sec1_image_title',
        'sec1_image_desc',
        'sec2_image_title',
        'sec2_image_desc',
        
        'sec2_title',
        'sec2_description'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'bg_image',
        'bg_image_title',
        'bg_image_desc',
        'h_title',
        'h_desc',
        'guide_title',
        'guide_desc1',
        'guide_desc2',
        'guide_image',
        'guide_image_title',
        'guide_image_desc',
        'profile',
        'about_title',
        'about_desc1',
        'about_desc2',
        'mission',
        'vision',
        'about_image1',
        'about_image2',
        'about_image1_title',
        'about_image1_desc',
        'about_image2_title',
        'about_image2_desc',
    ];
}

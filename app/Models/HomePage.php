<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    protected $fillable = [
        'header_video',
        'who_title',
        'who_title',
        'who_description1',
        'who_description2',
        'who_img1',
        'who_img2',
        'who_img3',
        'who_img1_title',
        'who_img1_desc',
        'who_img2_title',
        'who_img2_desc',
        'who_img3_title',
        'who_img3_desc',
        'who_img4',
        'about_title',
        'about_description1',
        'about_description2',
        'vission',
        'mission',
        'vission_img',
        'mission_img',
        
        'vission_img_title',
        'mission_img_title',
        'vission_img_desc',
        'mission_img_desc',
    ];
}

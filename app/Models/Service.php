<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'title',
        'sub_title',
        's_description',
        'main_img',
        'main_img_title',
        'main_img_desc',
        'l_description',
        'end_img1',
        'end_img2',
        'end_img3',
        'end_img4',
        'end_img1_title',
        'end_img1_desc',
        'end_img2_title',
        'end_img2_desc',
        'end_img3_title',
        'end_img3_desc',
        'end_img4_title',
        'end_img4_desc',
        'service_title_url'
    ];
}

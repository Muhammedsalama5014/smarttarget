<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePage extends Model
{
    use HasFactory;

    protected $fillable = [
        'bg_image',
        'bg_image_title',
        'bg_image_desc',
        'title',
        'subtitle',
        'description',
    ];
}

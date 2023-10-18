<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'img_title',
        'img_desc',
        'name',
        'position',
        'description',
        'video',
        'about',
        'education',
        'experiance'
    ];
}

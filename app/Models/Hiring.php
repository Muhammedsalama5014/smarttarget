<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiring extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'img_title',
        'img_desc',
        'title',
        'description',
        'type',
        'location',
    ];
}

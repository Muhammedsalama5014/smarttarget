<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motion extends Model
{
    use HasFactory;

    protected $fillable = [
        'video',
        'title',
        'company',
        'description',
        'video1',
        'video2',
        'video3',
        'video4',
        'video5',
    ];
}

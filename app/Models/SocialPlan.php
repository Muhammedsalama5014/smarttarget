<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'title',
        'price',
    ];

}

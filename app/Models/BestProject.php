<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'month_name',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
          'image1_title',
        'image1_desc',
        'image2_title',
        'image2_desc',
        'image3_title',
        'image3_desc',
        'image4_title',
        'image4_desc',
        'image5_title',
        'image5_desc',
        
    ];
}

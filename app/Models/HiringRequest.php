<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HiringRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'hiring_id',
        'name',
        'email',
        'phone',
        'cover_letter',
        'cv',
    ];
}

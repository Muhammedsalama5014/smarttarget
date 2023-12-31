<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_name',
        'name',
        'email',
        'phone',
        'message',
    ];
}

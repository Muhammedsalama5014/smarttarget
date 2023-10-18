<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherPlanFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'other_plan_id',
        'title',
        'price',
    ];

    public function otherPlan(){
        return $this->belongsTo(OtherPlan::class);
    }
}

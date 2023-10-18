<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddFeaturesToSocial extends Model
{
    use HasFactory;
    protected $fillable = ['social_plan_id','social_plan_feature_id','social_plan_name','social_plan_feature_name'];

}

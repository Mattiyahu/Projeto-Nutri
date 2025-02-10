<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNutritionData extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'calories',
        'meal_type',
    ];
}
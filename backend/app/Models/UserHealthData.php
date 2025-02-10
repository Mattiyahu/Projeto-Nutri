<?php

// App\Models\UserHealthData.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHealthData extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mental_health_status',
        'goals',
        'challenges',
        'motivation',
    ];

    // Relacionamento com o modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
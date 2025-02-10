<?php

// App\Models\User.php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Relacionamento com o modelo UserHealthData
    public function healthData()
    {
        return $this->hasMany(UserHealthData::class);
    }
}


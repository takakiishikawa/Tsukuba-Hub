<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'name',
        'engineer_name',
        'type',
        'logged_at',
    ];
}

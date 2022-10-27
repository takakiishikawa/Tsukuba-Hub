<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectionFlow extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'interview',
        'interview_times',
        'casual_interview',
        'casual_interview_times',
    ];
}

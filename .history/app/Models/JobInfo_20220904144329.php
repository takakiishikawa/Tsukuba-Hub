<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobInfo extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'job_type',
        'position',
        'job_description',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

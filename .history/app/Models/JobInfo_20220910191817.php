<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobInfo extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'recruitment_job',
        'recruitment_position',
        'job_content',
        'team_name',
        'team_size',
        'must_technology',
        'better_technology',
        'must_personality',
        'better_personality',
        'hire_number',
        'annual_income',
        'bonus_number',
        'bonus_income',
        'work_city',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

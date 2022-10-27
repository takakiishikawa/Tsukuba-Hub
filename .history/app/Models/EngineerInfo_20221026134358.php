<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineerInfo extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'age',
        'address_city',
        'objective',
        'work_experience',
        'work_experience_year',
        'development_language',
        'development_framework',
        'development_os',
        'development_database',
        'development_infra',
        'expectation',
        'strength',
        'interest',
        'video',
        'image',
        'path',
    ];
    public function user(){
        return $this->belongsTo('App\Models\user');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CorporateInfo extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'mission_title',
        'mission_content',
        'product_name',
        'product_content',
        'development_language',
        'development_framework',
        'development_os',
        'development_database',
        'development_infra',
        'series',
        'tag',
        'founded',
        'headquarters_city',
        'image',
        'path',
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }
}









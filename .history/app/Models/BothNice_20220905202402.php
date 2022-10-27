<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BothNice extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'engineer_name',
    ];
}

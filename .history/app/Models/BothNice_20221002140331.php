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
    public function message(){
        return $this->hasOne(Message::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}

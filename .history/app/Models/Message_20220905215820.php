<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;

    protected $fillable=[
        'type',
        'content',
    ];
    public function both_nice(){
        return $this->belongsTo(Bothnice::class);
    }
}

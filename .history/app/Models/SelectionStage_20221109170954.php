<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectionStage extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'both_nice_id',
        'selection_flow',
        'selection_stage',
        'apply',
        'apply_job',
        'evaluation',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function both_nice(){
        return $this->belongsTo(BothNice::class);
    }
}

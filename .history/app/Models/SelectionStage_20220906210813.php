<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectionStage extends Model
{
    use HasFactory;

    protected $fillable=[
        'both_nice_id',
        'selection_flow',
        'selection_stage',
    ];
}

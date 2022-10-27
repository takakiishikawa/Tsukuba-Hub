<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;





class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function engineer_info(){
        return $this->hasOne(EngineerInfo::class);
    }
    public function corporate_info(){
        return $this->hasOne(CorporateInfo::class);
    }
    public function job_infos(){
        return $this->hasMany(JobInfo::class);
    }
    public function nice(){
        return $this->hasOne(Nice::class);
    }
    public function selection_flow(){
        return $this->hasOne(SelectionFlow::class);
    }
    public function selection_stage(){
        return $this->hasMany(SelectionStage::class);
    }
    public function message(){
        return $this->hasMany(Message::class);
    }
    public function both_nice(){
        return $this->hasMany(BOthNice::class);
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'type',
        'name',
        'engineer_name',
        'email',
        'password',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}




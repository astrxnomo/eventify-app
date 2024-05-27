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

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
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

    /*Método para definir que un usuario está relacionado con un rol*/
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    //Un usuario va a tener 1 o N tickets
    public function tickets(){
        return $this->hasMany('App\Models\ticket');
    }

    //Un usuario va a tener 1 o N events
    public function events(){
        return $this->hasMany('App\Models\event');
    }

    public function ticket(){
        return $this->belongsTo('App\Models\ticket');
    }
}

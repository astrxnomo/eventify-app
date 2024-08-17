<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function event(){
        return $this->hasMany('App\Models\Event');
    }

    protected $fillable=[
        'addres',
=======
    protected $fillable = [
        'address',
>>>>>>> 3460b7e9b86d7c45726d63834283df8275e5026d
        'city',
        'region',
        'country',
    ];

    public function events()
    {
        return $this->hasOne(Event::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;

    public function event(){
        return $this->hasMany('App\Models\event');
    }

    protected $fillable=[
        'addres',
        'city',
        'region',
        'country',
    ];
}

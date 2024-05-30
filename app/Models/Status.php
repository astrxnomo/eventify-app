<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;


    //Un estado puede estar en uno varios eventos
    public function event(){
        return $this->hasMany('App\Models\event');
    }

    protected $fillable=[
        'name'
    ];
}

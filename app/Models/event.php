<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    //Un evento puede estar uno o muchos usuarios
    public function user(){
        return $this->belongsTo('App\Models\user');
    }

    //Un evento puede tener uno o muchos tickets
    public function tickets(){
        return $this->hasMany('App\Models\ticket');
    }

    public function locations(){
        return $this->belongsTo('App\Models\location');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }


    public function status(){
        return $this->belongsTo('App\Models\Status');
    }

    protected $fillable=[
        'name',
        'description',
        'img_url',
        'capacity',
        'price',
        'start_date',
        'end_date'
    ];
}

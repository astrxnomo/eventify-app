<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
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

    public function categories(){
        return $this->belongsTo('App\Models\category');
    }

    
    public function status(){
        return $this->belongsTo('App\Models\statu');
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

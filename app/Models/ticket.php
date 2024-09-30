<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    //Un ticket puede estar en uno muchos usuarios
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Un ticket puede estar en uno o muchos eventos
    public function event(){
        return $this->belongsTo(Event::class);
    }

    protected $fillable=[
        'name',
        'qr_url',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

<<<<<<< HEAD
    public function category(){
        return $this->belongsTo('App\Models\Category');
=======
    public function status()
    {
        return $this->belongsTo(Status::class);
>>>>>>> 3460b7e9b86d7c45726d63834283df8275e5026d
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
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

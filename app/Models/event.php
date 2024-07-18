<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
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

    public function status()
    {
        return $this->belongsTo(Status::class);
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

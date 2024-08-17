<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'city',
        'region',
        'country',
    ];

    public function events()
    {
        return $this->hasOne(Event::class);
    }

}

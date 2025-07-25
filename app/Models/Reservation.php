<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'nb_personnes',
        'reservation_date',
        'reservation_time',
        'message',
        'vu'
    ];

    public $timestamps = false;
}

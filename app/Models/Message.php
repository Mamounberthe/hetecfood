<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

      protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'date_rec',
        'status',
        'vu'
    ];
    protected $dates = ['date_rec'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    use HasFactory;

    public $table = 'consult';

    public $fillable = [
        // '',
        'start_time', 
        'end_time',
    ];

    public $timestamps = false;
}

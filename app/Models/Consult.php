<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    use HasFactory;

    public $table = 'consult';

    // public $fillable = [
    //     'clientId',
    //     'tekst',
    //     'start_time', 
    //     'end_time',
    // ];

    protected $guarded = [];

    public $timestamps = false;
}

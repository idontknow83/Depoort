<?php

namespace App\Http\Controllers;

use App\Models\Arts;

class ArtsController extends Controller
{
    public function showArts()
    {
        $arts = Arts::get();
        return view('home', [
            'arts' => $arts
        ]); 
    }
}

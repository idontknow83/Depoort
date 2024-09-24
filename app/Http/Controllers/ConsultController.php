<?php

namespace App\Http\Controllers;

use App\Models\Consult;

class ConsultController extends Controller
{
    public function showConsult()
    {
        $consult = Consult::get();
        return view('home', [
            'consult' => $consult
        ]); 
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Client;

class ClientController extends Controller
{
    public function showClient()
    {
        $clients = Client::get();
        return view('home', [
            'client' => $clients
        ]); 
    }
}
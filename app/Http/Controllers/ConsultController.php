<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

    public function create(Request $request)
    {
        $date = $request->input('date');
        return view('consults.create', ['date' => $date]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        Consult::create($validated);

        return redirect('/agenda')->with('success', 'Afspraak succesvol gemaakt!');
    }
}
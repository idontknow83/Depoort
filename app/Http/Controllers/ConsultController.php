<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consult;

class ConsultController extends Controller
{
    public function show()
    {
        $consult = Consult::get();
        return view('consults.agenda', [
            'consult' => $consult
        ]); 
    }

    public function create(Request $request, Consult $consult)
    {
        $consult->fill($request->all())->save();
        if ($consult->fill($request->all())->save()) {
            return back()->with(['success' => true, 'message' => 'Consult created successfully']);
        } else {
            return back()->with(['error' => true, 'message' => 'error']);
        }
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'clientid' => 'required|',
            'tekst' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        Consult::create($validated);

        return redirect('/agenda')->with('success', 'Afspraak succesvol gemaakt!');
    }
}
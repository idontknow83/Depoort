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
    public function getEvents(Request $request)
    {
        $events = Consult::all(); 
        
        $formattedEvents = $events->map(function($event) {
            return [
                'tekst' => $event->tekst,
                'start_time' => $event->date . 'T' . $event->start_time,
                'end_time' => $event->date . 'T' . $event->end_time,
                'clientId' => $event->clientId,
                'id' => $event->id
            ];
        });

        return response()->json($events);
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
            'clientId' => 'required|',
            'tekst' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        Consult::create($validated);

        return redirect()->back()->with('success', 'Toegang voor administratie ingetrokken.');
    }
}
// Migration file
Schema::table('consults', function (Blueprint $table) {
    $table->boolean('view_permission_for_admin')->default(false);
});
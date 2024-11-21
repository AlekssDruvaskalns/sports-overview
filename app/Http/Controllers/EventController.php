<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('event.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name',
            'date',
            'location'
        ]);

        Event:create([
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'location' => $request->input('location')
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $allEvents = Event::all();
        return view('event.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('event.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name',
            'date',
            'location'
        ]);

        return redirect()->route('event.index')->with('updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('event.index')->with('event deleted');
    }
}

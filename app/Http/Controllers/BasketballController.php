<?php

namespace App\Http\Controllers;

use App\Models\Basketball;
use Illuminate\Http\Request;

class BasketballController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $sort_by = null)
    {
        $query = Basketball::query();

        if ($sort_by) {
            $query->orderBy($sort_by);
        }

        $players = $query->get();
        return view('basketball.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('basketball.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'team' => 'required',
            'jersey_number' => 'required|integer',
            'position' => 'required',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'age' => 'required|integer',
            'draft_year' => 'required|integer',
            'draft_pick' => 'required|integer',
            'birthdate' => 'required|date',
            'country' => 'required',
            'experience' => 'required|integer',
        ]);

        Basketball::create($request->all());
        return redirect()->route('basketball.index')->with('success', 'Player created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Basketball $basketball)
    {
        return view('basketball.show', compact('basketball'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Basketball $basketball)
    {
        return view('basketball.edit', compact('basketball'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Basketball $basketball)
    {
        $request->validate([
            'name' => 'required',
            'team' => 'required',
            'jersey_number' => 'required|integer',
            'position' => 'required',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'age' => 'required|integer',
            'draft_year' => 'required|integer',
            'draft_pick' => 'required|integer',
            'birthdate' => 'required|date',
            'country' => 'required',
            'experience' => 'required|integer',
        ]);

        $basketball->update($request->all());
        return redirect()->route('basketball.index')->with('success', 'Player updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Basketball $basketball)
    {
        $basketball->delete();
        return redirect()->route('basketball.index')->with('success', 'Player deleted successfully.');
    }
}

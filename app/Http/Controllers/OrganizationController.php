<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = Organization::all();
        return view('organization.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organization.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        return view('organization.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization)
    {
        return view('organization.edit');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organization $organization)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $organization->update([
            'name' => $request->input('name')
        ]);

        return redirect()->route('organization.index')->with(' updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();
        return redirect()->route('organization.index');
    }
}

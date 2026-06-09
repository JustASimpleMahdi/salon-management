<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use App\Models\Service;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personnels = Personnel::with(['services'])->latest()->get();
        $personnelsCount = $personnels->count();
        return view('manager.personnel.index', compact('personnels', 'personnelsCount'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'services' => 'sometimes|array',
            'services.*' => 'required|integer|exists:services,id'
        ]);

        $personnel = Personnel::create($validated);
        if (!empty($request->services)) {
            $personnel->services()->sync($request->services);
        }

        return redirect()->route('manager.personnels.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::latest()->get();
        return view('manager.personnel.create', compact('services'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Personnel $personnel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personnel $personnel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personnel $personnel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personnel $personnel)
    {
        //
    }
}

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

        $personnel = Personnel::create($request->only('firstname', 'lastname'));
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
     * Show the form for editing the specified resource.
     */
    public function edit(Personnel $personnel)
    {
        $services = Service::latest()->get();
        $personnel->load('services');
        return view('manager.personnel.edit', compact('personnel', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personnel $personnel)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'services' => 'sometimes|array',
            'services.*' => 'required|integer|exists:services,id'
        ]);
        $personnel->update($request->only('firstname', 'lastname'));
        if (!empty($request->services)) {
            $personnel->services()->sync($request->services);
        } else {
            $personnel->services()->detach();
        }
        return redirect()->route('manager.personnels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personnel $personnel)
    {
        $personnel->delete();
        return redirect()->route('manager.personnels.index');
    }
}

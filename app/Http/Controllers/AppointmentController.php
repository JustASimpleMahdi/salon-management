<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Personnel;
use App\Rules\TimeRule;
use ErrorException;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Appointment::query();
        try {
            $date = Jalalian::fromFormat('Y/m/d', $request->date);
        } catch (ErrorException|\TypeError $e) {
            $date = Jalalian::now();
        }
        $appointments = $query->whereDate('start', $date->toCarbon())->get();
        return view('manager.appointments.index', compact('appointments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => ['required', function ($attribute, $value, $fail) {
                try {
                    $jalalian = Jalalian::fromFormat('Y/m/d H:i:s', $value . ' 23:59:59');
                    if ($jalalian->isPast()) {
                        $fail('validation.date.past');
                    }
                } catch (ErrorException) {
                    $fail('The :attribute is not a valid date.')->translate();
                }
            }],
            'start' => ['required', new TimeRule],
            'end' => ['required', new TimeRule],
            'personnels' => ['required', 'array'],
            'personnels.*' => ['required', 'exists:personnels,id'],
        ]);
        if ($validated['start'] >= $validated['end']) {
            return back()->withErrors([
                'end' => 'زمان پایان باید بزرگتر از زمان شروع باشد.',
            ])->withInput();
        }
        $startDate = Jalalian::fromFormat('Y/m/d H:i', $validated['date'] . ' ' . $validated['start']);
        $endDate = Jalalian::fromFormat('Y/m/d H:i', $validated['date'] . ' ' . $validated['end']);

        if (
            Appointment::where('start', '<', $endDate->toCarbon())
                ->where('end', '>', $startDate->toCarbon())
                ->exists()
        ) {
            return back()->withErrors([
                'time' => 'زمان با نوبتی دیگر تداخل دارد.',
            ])->withInput();
        }

        $appointment = Appointment::create([
            'start' => $startDate,
            'end' => $endDate,
        ]);
        $appointment->personnels()->sync($validated['personnels']);

        return redirect()->route('manager.appointments.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personnels = Personnel::latest()->get();
        return view('manager.appointments.create', compact('personnels'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        if ($appointment->end->isPast()) abort(403);

        $personnels = Personnel::latest()->get();
        $appointment->load('personnels');
        return view('manager.appointments.edit', compact('appointment', 'personnels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        if ($appointment->end->isPast()) abort(403);

        $validated = $request->validate([

            'start' => ['required', new TimeRule],
            'end' => ['required', new TimeRule],
            'personnels' => ['required', 'array'],
            'personnels.*' => ['required', 'exists:personnels,id'],
        ]);
        if ($validated['start'] >= $validated['end']) {
            return back()->withErrors([
                'end' => 'زمان پایان باید بزرگتر از زمان شروع باشد.',
            ])->withInput();
        }
        $date = $appointment->start->format('Y/m/d');
        $startDate = Jalalian::fromFormat('Y/m/d H:i', $date . ' ' . $validated['start']);
        $endDate = Jalalian::fromFormat('Y/m/d H:i', $date . ' ' . $validated['end']);

        if (
            Appointment::whereNot('id', $appointment->id)->where('start', '<', $endDate->toCarbon())
                ->where('end', '>', $startDate->toCarbon())
                ->exists()
        ) {
            return back()->withErrors([
                'time' => 'زمان با نوبتی دیگر تداخل دارد.',
            ])->withInput();
        }

        $appointment->update([
            'start' => $startDate,
            'end' => $endDate,
        ]);
        $appointment->personnels()->sync($validated['personnels']);
        return redirect()->route('manager.appointments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        if ($appointment->end->isPast()) abort(403);

    }
}

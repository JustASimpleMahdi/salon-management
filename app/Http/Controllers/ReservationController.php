<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Personnel;
use App\Models\Service;
use Exception;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use TypeError;

class ReservationController extends Controller
{
    public function confirm(Appointment $appointment, Service $service, Personnel $personnel)
    {
        $reservation = auth()->user()->reservations()->make();
        $reservation->appointment()->associate($appointment);
        $reservation->service()->associate($service);
        $reservation->personnel()->associate($personnel);
        $reservation->save();

        return response()->redirectToRoute('appointments.index');
    }

    public function confirmation(Appointment $appointment, Service $service, Personnel $personnel)
    {

        return view('reservation.confirmation', compact('appointment', 'service', 'personnel'));
    }

    public function index(Request $request)
    {
        if (!$request->query('service')) return response()->redirectToRoute('reservation.services');

        $service = Service::findOrFail($request->query('service'));

        try {
            $date = Jalalian::fromFormat('Y/m/d H:i:s', $request->date . ' 23:59:59');
            if ($date->isPast()) throw new Exception();
        } catch (Exception|TypeError) {
            $date = Jalalian::now();
        }

        $appointments = Appointment::with(['personnels', 'personnels.services'])->byDate($date)->available()->orderByTime()->get();

        return view('reservation.index', compact('date', 'appointments', 'service'));
    }

    public function services()
    {
        $services = Service::latest()->get();
        return view('reservation.services', compact('services'));
    }
}

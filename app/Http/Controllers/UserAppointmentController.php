<?php

namespace App\Http\Controllers;

class UserAppointmentController extends Controller
{
    public function index()
    {
        $currentReservations = auth()->user()->reservations()->current()->with(['service', 'personnel', 'appointment'])->get();
        $pastReservations = auth()->user()->reservations()->past()->with(['service', 'personnel', 'appointment'])->get();
        return view('appointments.index', compact('currentReservations', 'pastReservations'));
    }
}

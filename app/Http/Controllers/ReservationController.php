<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ReservationController extends Controller
{
    public function services()
    {
        $services = Service::latest()->get();
        return view('reservation.services', compact('services'));
    }
}

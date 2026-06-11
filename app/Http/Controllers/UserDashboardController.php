<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;

class UserDashboardController extends Controller
{
    public function index()
    {
        $todayAppointmentsCount = Appointment::today()->count();
        $popularServices = Service::popular()->limit(4)->get();

        return view('index', compact('todayAppointmentsCount', 'popularServices'));
    }
}

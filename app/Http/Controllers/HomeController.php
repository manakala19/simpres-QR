<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Holiday;
use App\Models\Permission;
use App\Models\Presence;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            "title" => "Beranda",
        ]);
    }

    public function show( $attendance)
    {
        return view('home.show', [
            "title" => "Informasi Absensi Kehadiran",
        ]);
    }

    public function permission( $attendance)
    {
        return view('home.permission', [
            "title" => "Form Permintaan Izin",
        ]);
    }

    // for qrcode
    public function sendEnterPresenceUsingQRCode()
    {
    }

    public function sendOutPresenceUsingQRCode()
    {
    }
}

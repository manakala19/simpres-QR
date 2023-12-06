<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Permission;
use App\Models\Presence;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PresenceController extends Controller
{
    public function index()
    {
        return view('presences.index', [
            "title" => "Daftar Absensi Dengan Kehadiran",
        ]);
    }

    public function show( $attendance)
    {
        return view('presences.show', [
            "title" => "Data Detail Kehadiran",
        ]);
    }

    public function showQrcode()
    {
        return view('presences.qrcode', [
            "title" => "Generate Absensi QRCode",
        ]);
    }

    public function downloadQrCodePDF()
    {
    }

    public function getQrCode(?string $code)
    {
    }

    public function notPresent( $attendance)
    {
        return view('presences.not-present', [
            "title" => "Data Karyawan Tidak Hadir",
        ]);
    }

    public function permissions( $attendance)
    {
        return view('presences.permissions', [
            "title" => "Data Karyawan Izin",
        ]);
    }

    public function presentUser(Request $request,  $attendance)
    {
    }

    public function acceptPermission(Request $request, $attendance)
    {
    }

    private function getNotPresentEmployees($presences)
    {
    }
}

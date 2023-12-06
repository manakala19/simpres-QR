<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    public function index()
    {
        return view('holidays.index', [
            "title" => "Hari Libur"
        ]);
    }

    public function create()
    {
        return view('holidays.create', [
            "title" => "Tambah Data Hari Libur"
        ]);
    }

    public function edit()
    {
        return view('holidays.edit', [
            "title" => "Edit Data Hari Libur",
        ]);
    }
}

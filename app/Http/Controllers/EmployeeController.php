<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees.index', [
            "title" => "Karyawaan"
        ]);
    }

    public function create()
    {
        return view('employees.create', [
            "title" => "Tambah Data Karyawaan"
        ]);
    }

    public function edit()
    {
        return view('employees.edit', [
            "title" => "Edit Data Karyawaan",
        ]);
    }
}

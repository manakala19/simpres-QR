<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            "title" => "Masuk"
        ]);
    }

    public function authenticate( $request)
    {
    }

    public function logout()
    {
    }
}

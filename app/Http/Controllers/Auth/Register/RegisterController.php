<?php

namespace App\Http\Controllers\auth\register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register.index');
    }
}

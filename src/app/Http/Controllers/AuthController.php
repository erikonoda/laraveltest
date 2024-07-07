<?php

namespace App\Http\Controllers;
use App\Models\Register;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function admin()
    {
        $register = Register::all();
        return view('admin', ['register' -> $register]);
    }
}

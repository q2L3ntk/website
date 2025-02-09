<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create() {
        return view('login');
    }

    public function forgotPassword() {
        return view('forgot-password');
    }

    public function confirmPassword() {
        return view('confirm-password');
    }

    public function verifyEmail() {
        return view('verify-email');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function create() 
    {
        return view('auth.reset-password');
    }

    public function store()
    {

    }
}
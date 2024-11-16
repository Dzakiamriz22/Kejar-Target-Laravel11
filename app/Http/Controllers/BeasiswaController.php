<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function create()
    {
        return view('tambahbeasiswa');
    }

    public function edit()
    {
        return view('editbeasiswa');
    }
}
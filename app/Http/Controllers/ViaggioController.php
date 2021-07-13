<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Viaggio;

class ViaggioController extends Controller
{
    public function index()
    {
        return view('viaggi');
    }
}
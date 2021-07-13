<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Travel;

class TravelController extends Controller
{
    public function index()
    {
        $travelss = Travel::all();

        return view('travels', compact('travelss'));
    }
}
<?php

namespace App\Http\Controllers;

Use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $users = Cars::table('cars')->get();

        return view('car.index', ['cars' => $cars]);
    }
}

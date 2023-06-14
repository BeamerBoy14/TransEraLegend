<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function list()
    {
        $cars = Car::all();
        return view('cars',['Cars' => $cars]);
    }

    public function show($id)
    {
        $car = Car::find($id);
        return view('car', compact('car'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    public function list()
    {
        $cars = Car::all();

        return view('test',['cars' => $cars]);
    }

    /*public function getBrand($name)
    {
        $brand = Brand::find($name);

        return view('car.show', ['brand => $brand']);
    }*/
}
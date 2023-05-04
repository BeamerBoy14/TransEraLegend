<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    public function list()
    {
        $cars = Cars::all();
        return view('cars',['Cars' => $cars]);
    }

    public function show($id)
    {
        $car = Cars::find($id);
        return view('cars', compact('car'));
    }


    /*public function getBrand($name)
    {
        $brand = Brand::find($name);

        return view('car.show', ['brand => $brand']);
    }*/
}
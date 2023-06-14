<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function list()
    {
        $brands = Brand::all();

        return view('test',['brands' => $brands]);
    }

    /*public function getBrand($name)
    {
        $brand = Brand::find($name);

        return view('car.show', ['brand => $brand']);
    }*/
}

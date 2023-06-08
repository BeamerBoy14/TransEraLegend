<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = 'cars';

    use HasFactory;

    public static function getById($id)
    {
        return self::find($id);
    }

    public static function getAllCars()
    {
        return self::all();
    }

    public function brandName()
    {
        return Brand::getBrandNameById($this->brand_id);
    }

    public static function getLatestCar()
    {
        return self::latest('created_at')->first();
    }

}

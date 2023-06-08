<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    use HasFactory;

    public function getAllBrands() {
        $brands = Brand::all();
        return $brands;
    }

    public static function getBrandNameById($id) {
        $brand = Brand::find($id);

        if ($brand) {
            return $brand->name;
        }

        return null;
    }

}

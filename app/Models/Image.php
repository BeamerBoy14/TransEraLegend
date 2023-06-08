<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $table = 'images';

    use HasFactory;

    public function getImageByBrandId($brandId) {
        return $this->where('brand_id', $brandId)->first();
    }
}

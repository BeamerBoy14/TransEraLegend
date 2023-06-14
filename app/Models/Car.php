<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
use Illuminate\Support\Carbon;

class Car extends Model
{
    protected $table = 'car';

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

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public static function getAvailableCarsForTomorrow()
    {
        $tomorrow = Carbon::tomorrow();

        return self::whereNotExists(function ($query) use ($tomorrow) {
            $query->select(DB::raw(1))
                ->from('reservation')
                ->whereRaw("'$tomorrow' BETWEEN startDate AND endDate")
                ->whereColumn('car.id', 'reservation.car_id');
        })->get();
    }

}

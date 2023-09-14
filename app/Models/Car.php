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

    public function isAvailableForReservation($startDate, $endDate)
    {
        // Convert input dates to Carbon instances for easy comparison
        $start = Carbon::parse($startDate);
        $end = Carbon::parse($endDate);

        // Query the reservations table to check for overlapping reservations
        $overlappingReservations = Reservation::where('car_id', $this->id)
            ->where(function ($query) use ($start, $end) {
                // Check for reservations that overlap with the provided dates
                $query->where(function ($subquery) use ($start, $end) {
                    $subquery->where('startDate', '<', $start)
                        ->where('endDate', '>', $start);
                })->orWhere(function ($subquery) use ($start, $end) {
                    $subquery->where('startDate', '<', $end)
                        ->where('endDate', '>', $end);
                });
            })
            ->exists();

        // If there are overlapping reservations, the car is not available
        return !$overlappingReservations;
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{

    protected $table = 'reservation';

    use HasFactory;

    protected $fillable = [
        'startDate',
        'endDate',
        'car_id',
        'user_id',
    ];

    public static function createReservation($startDate, $endDate, $carId, $userId)
    {
        return self::create([
            'startDate' => $startDate,
            'endDate' => $endDate,
            'car_id' => $carId,
            'user_id' => $userId,
        ]);
    }

    public static function getUserReservations($userId)
    {
        return self::where('user_id', $userId)->get();
    }    
}

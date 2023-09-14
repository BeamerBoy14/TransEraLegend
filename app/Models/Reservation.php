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
        // Vérifiez d'abord si la voiture est disponible pour la réservation
        $car = Car::getById($carId);

        if (!$car->isAvailableForReservation($startDate, $endDate)) {
            // La voiture n'est pas disponible, vous pouvez gérer cela ici (ex : renvoyer une erreur).
            return null;
        }

        $user = User::find($userId);

        if ($user->hasReservationsInPeriod($startDate, $endDate)) {
            // L'utilisateur a déjà réservé une voiture pendant cette période, gérer cela ici.
            return null;
        }

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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Promotion extends Model
{
    protected $table = 'promotion';
    
    public static function getLatestPromotion()
    {
        return self::latest('date')->first();
    }

    function getPromotionsByDate()
    {
        $today = Carbon::today();

        $promotions = Promotion::where('startDate', '<=', $today)
                            ->where('endDate', '>=', $today)
                            ->get();

        return $promotions;
    }
}
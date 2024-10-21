<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TourPlaces extends Model
{
    use HasFactory;
    public function tours(): HasMany
    {
        return $this->hasMany(TourDetail::class,'tour_place_id');
    }
}

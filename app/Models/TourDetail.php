<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TourDetail extends Model
{
    use HasFactory;
    public function tour(): BelongsTo{
        return $this->belongsTo(Tours::class,'tour_id','id');
    }
    public function tourPlace(): BelongsTo
    {
        return $this->belongsTo(TourPlaces::class,'tour_place_id','id');
    }
}

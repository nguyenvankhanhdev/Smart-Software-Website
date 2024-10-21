<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tours extends Model
{
    use HasFactory;
    public function tourType(): BelongsTo
    {
        return $this->belongsTo(TourTypes::class,'type_id','id');
    }
    public function tourDetail(): HasMany{
        return $this->hasMany(TourDetail::class,'tour_id');
    }


}

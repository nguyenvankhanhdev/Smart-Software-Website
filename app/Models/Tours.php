<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tours extends Model
{
    use HasFactory;
    public function tourtypes(): BelongsTo
    {
        return $this->belongsTo(TourTypes::class,'type_id','id');
    }
    public function tourdetails(): HasMany{
        return $this->hasMany(TourDetails::class,'tour_id');
    }
    public function booktours(): HasMany{
        return $this->hasMany(BookTours::class,'tour_id');
    }

    public function detailhoteltours(): HasMany{
        return $this->hasMany(DetailHotelTours::class,'tour_id');
    }
    public function programtours()
    {
        return $this->hasMany(ProgramTours::class,'tour_id');
    }
    public function taskemployees()
    {
        return $this->hasMany(TaskEmployees::class,'tour_id');
    }
    public function tourimages()
    {
        return $this->hasMany(TourImages::class,'tour_id');
    }

}

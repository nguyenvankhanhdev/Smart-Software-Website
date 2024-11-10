<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    use HasFactory;
    public function detailHotelTours(){
        return $this->hasMany(DetailHotelTours::class,'hotel_id');
    }
}

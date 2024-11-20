<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailHotelTours extends Model
{
    use HasFactory;
    public function hotels(){
        return $this->belongsTo(Hotels::class,'hotel_id','id');
    }
    public function tours(){
        return $this->belongsTo(Tours::class,'tour_id','id');
    }
}

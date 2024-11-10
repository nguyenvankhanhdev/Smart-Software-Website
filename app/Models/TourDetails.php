<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourDetails extends Model
{
    use HasFactory;
    public function tours()
    {
        return $this->belongsTo(Tours::class,'tour_id','id');

    }
    public function tourattractions()
    {
        return $this->hasMany(TourAttractions::class,'tour_attraction_id','id');
    }
}

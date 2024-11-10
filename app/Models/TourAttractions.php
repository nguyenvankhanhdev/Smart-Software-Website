<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourAttractions extends Model
{
    use HasFactory;
    // điểm du lich
    public function tourdetails()
    {
        return $this->hasMany(TourDetails::class, 'tour_attraction_id', 'id');
    }

}

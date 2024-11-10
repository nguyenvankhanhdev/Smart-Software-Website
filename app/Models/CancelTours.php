<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancelTours extends Model
{
    use HasFactory;


    public function tours()
    {
        return $this->belongsTo(Tours::class,'tour_id','id');

    }
    public function orders(){
        return $this->hasMany(Orders::class,'cancel_tours_id','id');
    }
}

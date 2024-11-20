<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    public function booktour(){
        return $this->belongsTo(BookTours::class,'book_tour_id','id');
    }
    public function customers(){
        return $this->belongsTo(Customers::class,'customer_id','id');
    }

    public function canceltours(){
        return $this->belongsTo(CancelTours::class,'cancel_tours_id ','id');
    }
}

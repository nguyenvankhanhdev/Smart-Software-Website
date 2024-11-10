<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBookTours extends Model
{
    use HasFactory;
    public function booktours(){
        return $this->belongsTo(BookTours::class,'book_tour_id','id');
    }
    public function customers(){
        return $this->belongsTo(Customers::class,'customer_id','id');
    }
}

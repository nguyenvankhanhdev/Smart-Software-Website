<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTours extends Model
{
    use HasFactory;
    public function tours()
    {
        return $this->belongsTo(Tours::class,'tour_id','id');

    }
    public function customers()
    {
        return $this->belongsTo(Customers::class,'customer_id','id');
    }




}

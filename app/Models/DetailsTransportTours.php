<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsTransportTours extends Model
{
    use HasFactory;
    public function tours(){
        return $this->belongsTo(Tours::class,'tour_id','id');
    }
    public function transportations(){
        return $this->belongsTo(Transportations::class,'transport_id','id');
    }




}

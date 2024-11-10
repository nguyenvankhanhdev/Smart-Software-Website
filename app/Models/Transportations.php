<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportations extends Model
{
    use HasFactory;
    public function detailstransporttours(){
        return $this->hasMany(DetailsTransportTours::class,'transport_id');
    }

}

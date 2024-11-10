<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function customtypes(){
        return $this->belongsTo(CustomTypes::class,'custom_type_id','id');
    }

    public function orders(){
        return $this->hasMany(Orders::class,'customer_id','id');
    }
    public function ratings(){
        return $this->hasMany(Ratings::class,'customer_id','id');
    }



}

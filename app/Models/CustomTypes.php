<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomTypes extends Model
{
    use HasFactory;
    public function customers(){
        return $this->hasMany(Customers::class,'custom_type_id');
    }
}

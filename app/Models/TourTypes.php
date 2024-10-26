<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TourTypes extends Model
{

    use HasFactory;

    
    public function tours(): HasMany
    {
        return $this->hasMany(Tours::class,'type_id');
    }
}

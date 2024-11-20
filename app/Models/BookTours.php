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
    public function detailbooktours()
    {
        return $this->hasMany(DetailBookTours::class,'book_tour_id','id');
    }
    public function orders(){
        return $this->hasMany(Orders::class,'book_tour_id','id');
    }




}

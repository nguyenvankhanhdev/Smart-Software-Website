<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTypes extends Model
{
    use HasFactory;
    public function blogtours(){
        return $this->hasMany(BlogTours::class,'blog_type_id ');
    }
}
